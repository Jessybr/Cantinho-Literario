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
    <link rel="stylesheet" href="../assets/alert.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './components/header.php' ?>

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

    <div class="alert-devolucao bg-red-600 rounded-2xl text-zinc-900 flex flex-col items-center py-9 gap-3">
        <h3 class="text-neutral-50">Devolução</h3>
        <div class="flex flex-col gap-10">
            <form action="" method="post" class="flex flex-wrap items-center w-full gap-6">
                <label class="text-zinc-900">Como estava o estado do livro?
                    <select name="" id="">
                        <option value="">Normal</option>
                        <option value="">Rabiscado</option>
                        <option value="">Molhado</option>
                        <option value="">Rasgado</option>
                        <option value="">Perdido</option>
                    </select>
                </label>
                <input type="submit" value="Devolver" class="px-7 rounded-md bg-neutral-50 text-zinc-800 w-28 self-center">
            </form>
            <button id='cancelDevolucaoBtn' class="w-28 px-4 rounded-md bg-neutral-50 text-zinc-800 self-center">Cancelar</button>
        </div>
    </div>
    
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
                    <h1 class="text-xl font-bold mr-10 sm:mt-3">Titulo Livro</h1>
                    <p class="text-base">COD</p>
                </div>
                <div class="flex flex-col gap-6">
                    <ul class="sm:flex sm:flex-col sm:gap-4">
                        <li>Editora: Asas</li>
                        <li>Gênero: Terrror</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between flex-wrap gap-6 w-8/12 my-6 sm:flex-col sm:gap-4 sm:w-full">
            <p class="w-2/5 sm:w-full">Cliente: João</p>
            <p class="w-2/5 sm:w-full">CPF: 32342344234</p>
            <p class="w-2/5 sm:w-full">Data de empréstimo: 21/21/21</p>
            <p class="w-2/5 sm:w-full">Data de devolução: 21/21/12</p>
        </div>
        <div class="flex gap-6 sm:mb-8 sm:overflow-auto">
            <span id="finish-emprestimo" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Devolver</span>
            <a href="./form-emprestimo.php" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Editar</a>
            <span id="btn-delete" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600 cursor-pointer">Excluir</span>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
    <script src="../assets/script/alertDelete.js"></script>
    <script src="../assets/script/alertDevolucao.js"></script>
</body>
</html>