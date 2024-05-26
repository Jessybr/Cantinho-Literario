<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="fixed flex flex-col justify-start items-center h-screen w-[19rem] bg-red-600 text-neutral-50">
        <div class="pt-5 w-[231px] h-1/6">
            <h1 class="text-2xl">Cantinho Literário</h1><hr>
        </div>

        <div class="flex flex-col w-[231px] h-[520px] border-l border-l-[1] border-neutral-50">
            <div class="pl-3 pb-2 border-b border-b-[1] border-neutral-50 font-black">
                <h2>Menu</h2>
            </div>
            <div class="flex justify-between items-start flex-col w-4/5 h-3/4 pl-3 pt-1 font-light">
                <div>
                    <ul>
                        <li class="my-4"><a href="home.html">Início</a></li>
                        <li class="my-4"><a href="livros.html">Livros</a></li>
                        <li class="my-4"><a href="">Empréstimos</a></li>
                        <li class="my-4"><a href="">Clientes</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="my-4">Funcionário:</li>
                        <li class="my-4">Sair</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <main class="h-screen ml-[20rem] pt-11 pl-20">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>

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
        <div class="flex flex-row justify-between flex-wrap gap-6 w-8/12 my-6">
            <p class="w-2/5">Cliente: João</p>
            <p class="w-2/5">CPF: 32342344234</p>
            <p class="w-2/5">Data de empréstimo: 21/21/21</p>
            <p class="w-2/5">Data de devolução: 21/21/12</p>
        </div>
        <div class="flex gap-6">
            <a href="" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Devolver</a>
            <a href="" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Editar</a>
            <a href="" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">Excluir</a>
        </div>
    </main>

    <footer>
        <p>&copy;Copyright 2024 Jéssica B. Ramos. Todos os direitos reservados .</p>
    </footer>
    
</body>
</html>