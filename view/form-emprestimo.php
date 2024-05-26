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

    <main class="h-screen ml-[20rem] pt-11 pl-20">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>
        <div>
            <!-- Informações do livro que vai ser emprestado 
                tem que colocar um php aqui para puxar os livros -->
            <div class="flex flex-row w-4/5 border-b-2 pb-6">
                <div class="w-[133px] h-[169px] shadow-lg mr-10">
                    img 133.33 por 169.45
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row items-center justify-between">
                        <h1 class="text-xl font-bold mr-10">Titulo Livro</h1>
                        <p class="text-base">COD</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <ul>
                            <li>Editora: Asas</li>
                            <li>Gênero: Terrror</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 my-6">
                <span class="font-bold text-red-600">+ Adicionar livro</span>
                
                <form action="" method="post" class="flex flex-col gap-3">
                    <label class="w-1/2">Cliente
                        <input type="text" class="w-full rounded border-2 border-red-600">
                    </label>
                    <label class="w-1/2">CPF
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