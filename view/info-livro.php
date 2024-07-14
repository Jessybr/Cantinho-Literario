<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/table.css">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/alert.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './components/header.php';
        require '../control/booksControl.php';
        $book = new BooksControl;
        if(isset($_GET['Cod_livro'])){
            $Cod_livro = $_GET['Cod_livro'];
            $result = $book->getBook($Cod_livro);
            $data = $result->fetch(PDO::FETCH_ASSOC);
        }
        
    ?>

    <div class="alert-delete bg-red-600 rounded-2xl text-neutral-50 flex flex-col items-center py-9 gap-4">
        <h3>Tem certeza que deseja excluir este livro?</h3>
        <div class="flex flex-row gap-12">
            <form action="" method="post">
                <input type="hidden" name="">
                <input type="submit" value="Sim" class="px-7 rounded-md bg-neutral-50 text-zinc-900">
            </form>
            <button id='cancelBtn' class="px-7 rounded-md bg-neutral-50 text-zinc-900">Não</button>
        </div>
    </div>

    <main class="h-screen ml-[20rem] pt-11 pl-20 sm:h-full sm:ml-1 sm:px-8">
        <div class="mb-12 pt-4">
            <h3>Informação</h3>
        </div>
        <div class="flex flex-row w-4/5 border-b-2 pb-6 sm:w-full sm:flex-col">
            <div class="w-[133px] h-[169px] shadow-lg mr-10">
                img 133.33 por 169.45
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-row items-center justify-between sm:flex-col sm:gap-4 sm:items-start">
                    <h1 class="text-xl font-bold mr-10"><?php echo $data['Titulo'];?></h1>
                    <p class="text-base">Cod: <?php echo $data['Cod_livro'];?></p>
                </div>
                <div class="flex flex-col">
                    <ul class="sm:flex sm:flex-col sm:gap-4">
                        <li>Editora: <?php echo $data['Editora'];?></li>
                        <li>Gênero: <?php echo $data['Genero'];?></li>
                        <li>Quantidade de exemplares: <?php echo $data['Quantidade'];?></li>
                        <li>Exemplares disponíveis: </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-6 w-3/4">
            <div class="text-lg mb-6">Descrição</div>
            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perferendis quis cum dolor temporibus eum, similique porro dolore provident, maiores perspiciatis rem. Cumque nostrum ea obcaecati tempora facilis. Incidunt, quos.</div>
        </div>
        <div class="flex items-center gap-6 sm:mb-8">
            <a href="./form-emprestimo.php" class="font-semibold text-red-600">Realizar Empréstimo</a>
            <a href="./form-livro.php?Cod_livro=<?=$data['Cod_livro']?>" class="px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Editar</a>
            <span id="btn-delete" class="px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600 cursor-pointer">Excluir</span>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
    <script src="../assets/script/alertDelete.js"></script>
</body>
</html>