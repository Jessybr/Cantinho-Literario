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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './components/header.php' ?>

    <main class="h-screen ml-[20rem] pt-11 pl-20 sm:h-full sm:ml-1 sm:px-8">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>
        <div class="flex flex-row w-4/5 border-b-2 pb-6 sm:w-full sm:flex-col">
            <div class="w-[133px] h-[169px] shadow-lg mr-10">
                img 133.33 por 169.45
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-row items-center justify-between sm:flex-col sm:gap-4 sm:items-start">
                    <h1 class="text-xl font-bold mr-10">Titulo Livro</h1>
                    <p class="text-base">COD</p>
                </div>
                <div class="flex flex-col">
                    <ul class="sm:flex sm:flex-col sm:gap-4">
                        <li>Editora: Asas</li>
                        <li>Gênero: Terror</li>
                        <li>Quantidade de exemplares:</li>
                        <li>Exemplares disponíveis:</li>
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
            <a href="./form-livro.php" class="px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Editar</a>
            <a href="" class="px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Excluir</a>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
</body>
</html>