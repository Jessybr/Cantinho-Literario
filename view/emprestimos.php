<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1 class="w-20 pb-1 border-b border-zinc-800 font-bold text-xl">Empréstimos</h1>
        </div>
        <div class="w-full flex flex-col items-center">
            <form action="" method="post" class="w-full flex flex-col justify-center items-center">
                <input type="search" name="" id="" class="w-2/3 border-2 border-red-600 rounded pl-3 mb-4" placeholder="Digite o nome do cliente ou o título do livro">
            </form>
            <table class="table-book text-center w-full">
                <thead>
                    <tr>
                        <th class="th-none"></th>
                        <th class="py-3">Título</th>
                        <th class="py-3">Cliente</th>
                        <th class="py-3">Data do empréstimo</th>
                        <th class="py-3">Data de devolução</th>
                        <th class="th-none"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-5">
                            <svg class=" cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6d6d6e"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        </td>
                        <td class="py-3">O Pequeno Príncepe</td>
                        <td class="py-3">João Paulo</td>
                        <td class="py-3">21/12/12</td>
                        <td class="py-3">31/12/12</td>
                        <td class="py-3 px-5 th-none"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6d6d6e"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg></td>
                    </tr>
                </tbody>
                <tfoot class="text-neutral-50 font-light">
                    <tr>
                        <td class="py-3 px-5" colspan="2">
                            Monstrando 10 de 200 itens
                        </td>
                        <td class="py-3 px-5" colspan="5">
                            <div class="flex flex-row justify-end w-full">
                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg><svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z"/></svg>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>

</body>
</html>