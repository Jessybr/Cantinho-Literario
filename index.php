<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./assets/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main class="flex justify-center items-center alig flex-col gap-20 font-sans h-screen">
        <div class="w-72">
            <h1 class="flex items-center justify-center text-2xl font-medium text-zinc-800">Cantinho Literário</h1>
        </div>
        <div class="flex items-center justify-center flex-col w-[545px] h-[313px] bg-red-600 rounded-2xl">
            <h2 class="pb-5 text-lg font-light text-neutral-50">Login</h2>
            <form class="flex items-start justify-center flex-col gap-5 w-auto text-neutral-50" action="./model/login.php" method="post">
                <label class="">Email:
                    <input type="text" name="email" id="" class="ml-3 rounded-md pl-2 text-zinc-800">
                </label>
                <label>Senha:
                    <input type="text" name="senha" id="" class="ml-2 rounded-md pl-2 text-zinc-800">
                </label>
                <input type="submit" value="logar" class="text-center self-center w-20 h-6 text-zinc-800 bg-neutral-50 rounded">
            </form>
        </div>
    </main>

    <footer class="flex text-center justify-center h-12 text-zinc-800">
        <p>&copy;Copyright 2024 Jéssica B. Ramos. Todos os direitos reservados .</p>
    </footer>
    
</body>
</html>