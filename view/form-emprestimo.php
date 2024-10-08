<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/table.css">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './components/header.php' ?>

    <main class="h-screen ml-[20rem] pt-11 pl-20 sm:h-auto sm:ml-1 sm:px-8">
        <div>
            <!-- Informações do livro que vai ser emprestado 
                tem que colocar um php aqui para puxar os livros -->
            <div class="flex flex-row w-4/5 border-b-2 pb-6 sm:flex-col sm:w-full">
                <div class="w-[133px] h-[169px] shadow-lg mr-10">
                    img 133.33 por 169.45
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row items-center justify-between sm:flex-col sm:gap-3 sm:items-start sm:mt-5">
                        <h1 class="text-xl font-bold mr-10">Titulo Livro</h1>
                        <p class="text-base">COD</p>
                    </div>
                    <div class="flex flex-col gap-6 sm:gap-5">
                        <ul>
                            <li>Editora: Asas</li>
                            <li>Gênero: Terrror</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 my-6 sm:mb-8">
                <span class="font-bold text-red-600">+ Adicionar livro</span>
                
                <form action="" method="post" class="flex flex-col gap-3">
                    <label class="w-1/2 sm:w-full">Cliente
                        <input type="text" class="w-full rounded border-2 border-red-600">
                    </label>
                    <label class="w-1/2 sm:w-full">CPF
                        <input type="text" class="w-full rounded border-2 border-red-600">
                    </label>
                    <input type="submit" value="Concluir" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">
                </form>
            </div>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    
</body>
</html>