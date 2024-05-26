<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                        <li class="my-4"><a href="emprestimos.html">Empréstimos</a></li>
                        <li class="my-4"><a href="clientes.html">Clientes</a></li>
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
        <div class="flex flex-row flex-wrap">
            <div class="flex flex-col gap-3 w-1/2 mb-12 pt-14">
                <h1 class="w-20 pb-1 border-b border-zinc-800 font-bold text-xl">Livros</h1>
                <p>Quantidade de livros:</p>
                <p>Disponíveis:</p>
            </div>

            <div class="flex flex-col gap-3 w-1/2 mb-12 pt-14">
                <h1 class="w-32 pb-1 border-b border-zinc-800 font-bold text-xl">Exemplares</h1>
                <p>Quantidade de exemplares:</p>
                <p>Disponíveis:</p>
            </div>

            <div class="flex flex-col gap-3 w-4/5">
                <h1 class="w-60 pb-1 border-b border-zinc-800 font-bold text-xl mb-5">Devoluções próximas</h1>
                <form action="" class="w-full">
                    <table class="table-home text-left w-full">
                        <thead>
                            <tr >
                                <th colspan="2" class="px-6 py-3">
                                    Título do livro
                                </th>
                                <th class="px-6 py-3">Cliente</th>
                                <th class="px-6 py-3">Data do empréstimo</th>
                                <th class="px-6 py-3">Data da devolução</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3 py-3"><input type="checkbox" name="" id=""></td>
                                <td class="px-6 py-3">O Príncepe</td>
                                <td class="px-6 py-3">João Carlos</td>
                                <td class="px-6 py-3">23/23/23</td>
                                <td class="px-6 py-3">24/24/24</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>

</body>
</html>