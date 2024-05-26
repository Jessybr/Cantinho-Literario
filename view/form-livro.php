<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <h1>Cantinho Literário</h1>
        </div>
        <div>
            <div>
                <h2>Menu</h2>
            </div>
            <div>
                <div>
                    <ul>
                        <li>Início</li>
                        <li>Livros</li>
                        <li>Empréstimos</li>
                        <li>Clientes</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>Funcionário:</li>
                        <li>Sair</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="h-screen ml-[20rem] pt-11 pl-20">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>
        <div>
            <form action="" method="POST" class="flex flex-row justify-between flex-wrap gap-3 w-2/3">
                <label class="w-full">
                    Título
                    <input type="text" name="" id=""  class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-2/3">
                    Autor
                    <input type="text" name="" id=""  class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-1/4">
                    Quantidade de exemplares
                    <input type="number" name="" id="" class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-1/2">
                    Editora
                    <input type="text" name="" id="" class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-2/5">
                    Gênero
                    <input type="text" name="" id="" class="w-full border-2 border-red-600 rounded">
                </label>
                <input type="submit" value="Cadastrar" class="py-1 px-3 text-neutral-50 font-semibold bg-red-600 rounded cursor-pointer">
            </form>
        </div>
    </main>

    
    <?php include_once './components/footer.php' ?>
    
</body>
</html>