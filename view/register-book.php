<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include_once './components/header.php';
        require '../control/booksControl.php';
        require '../control/picture.php';
        $book = new BooksControl;
        
        if(isset($_GET['Cod_livro'])){
            $Cod_livro = $_GET['Cod_livro']? $_GET['Cod_livro'] : NULL;
            $result = $book->getBook($Cod_livro);
            $data = $result->fetch(PDO::FETCH_ASSOC);
        }

        if(isset($_POST['btnSubmit']) && (!empty($_POST['Titulo']) && !empty($_POST['Autor']) && !empty($_POST['Editora']) && !empty($_POST['Genero']) && !empty($_POST['Quantidade']))){
            $Cod_livro = $_GET['Cod_livro'];
            $titulo = $_POST['Titulo'];
            $autor = $_POST['Autor'];
            $editora = $_POST['Editora'];
            $genero = $_POST['Genero'];
            $quantidade = $_POST['Quantidade'];
            if(!empty($_FILES['foto'])){
                $image = $_FILES['foto'];
                $pictureController = new Picture($image);
                $name_image = $pictureController->validatePicture();
                if($name_image){
                    $book->updateBook($Cod_livro, $name_image, $titulo, $autor, $editora, $genero, $quantidade);
                }else{
                    $errors = $pictureController->countErrors();
                    echo '<script>alert("'.$errors.'")</script>';
                }
            }else{
                $book->updateBook($Cod_livro, $data['Foto'], $titulo, $autor, $editora, $genero, $quantidade);
            }
        }else{
            echo '<script>alert("Preencha todos os campos")</script>';
        }       
    ?>

    <main class="h-screen ml-[20rem] pt-11 pl-20 sm:h-screen sm:ml-1 sm:px-8">
        <div class="mb-12 pt-4">
            <h3>Cadastrar Livro</h3>
        </div>
        <div>
            <form action="form-livro.php" method="POST" class="flex flex-row justify-between flex-wrap gap-3 w-2/3 sm:flex-col sm:w-full sm:mb-4">
                <label>
                    Foto
                    <input type="file" name="foto" class="w-full" >
                </label>
                <label class="w-full">
                    Título
                    <input type="text" name="Titulo"  class="w-full pl-2 border-2 border-red-600 rounded">
                </label>
                <label class="w-2/3 sm:w-full">
                    Autor
                    <input type="text" name="Autor"  class="w-full pl-2 border-2 border-red-600 rounded">
                </label>
                <label class="w-1/4 sm:w-full">
                    Quantidade de exemplares
                    <input type="number" name="Quantidade" class="w-full pl-2 border-2 border-red-600 rounded">
                </label>
                <label class="w-1/2 sm:w-full">
                    Editora
                    <input type="text" name="Editora" class="w-full pl-2 border-2 border-red-600 rounded">
                </label>
                <label class="w-2/5 sm:w-full">
                    Gênero
                    <input type="text" name="Genero" class="w-full pl-2 border-2 border-red-600 rounded" >
                </label>
                <input type="submit" value="Cadastrar" name="btnSubmit" class="py-1 px-3 text-neutral-50 font-semibold bg-red-600 rounded cursor-pointer sm:w-32">
            </form>
        </div>
    </main>


    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
    <script src="../assets/script/form.js"></script>
    <script src="../assets/script/flowbite.min.js"></script>
</body>
</html>