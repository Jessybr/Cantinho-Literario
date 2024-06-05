<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <div class="alert-devolucao bg-red-600 rounded-2xl text-zinc-900 flex-col items-center py-9 gap-3">
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

    <main class="h-screen sm:h-full ml-[20rem] sm:ml-1 pt-11 pl-20 sm:px-8 sm:mb-6">
        <div class="flex flex-row flex-wrap sm:flex-col">
            <div class="flex flex-col gap-3 w-1/2 sm:w-auto mb-12 sm:mb-6 pt-14 sm:pt-6">
                <h1 class="w-20 pb-1 border-b border-zinc-800 font-bold text-xl">Livros</h1>
                <p>Quantidade de livros:</p>
                <p>Disponíveis:</p>
            </div>

            <div class="flex flex-col gap-3 w-1/2 sm:w-auto mb-12 sm:mb-6 pt-14 sm:pt-6">
                <h1 class="w-32 pb-1 border-b border-zinc-800 font-bold text-xl">Exemplares</h1>
                <p>Quantidade de exemplares:</p>
                <p>Disponíveis:</p>
            </div>

            <div class="flex flex-col gap-3 w-4/5 sm:w-full sm:pt-6">
                <h1 class="w-60 pb-1 border-b border-zinc-800 font-bold text-xl mb-5">Devoluções próximas</h1>
                <form action="" class="w-full sm:w-full sm:overflow-scroll  md:items-start md:w-full md:overflow-scroll">
                    <table class="table-home text-left w-full">
                        <thead>
                            <tr >
                                <th class="px-6 py-3">
                                    Título do livro
                                </th>
                                <th class="px-6 py-3">Cliente</th>
                                <th class="px-6 py-3">Data do empréstimo</th>
                                <th colspan="2" class="px-6 py-3">Data da devolução</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-3">O Príncepe</td>
                                <td class="px-6 py-3">João Carlos</td>
                                <td class="px-6 py-3">23/23/23</td>
                                <td class="px-6 py-3">24/24/24</td>
                                <td class="px-3 py-3 cursor-pointer"><svg id="finish-emprestimo" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6d6d6e"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
    <script src="../assets/script/alertDevolucao.js"></script>
</body>
</html>