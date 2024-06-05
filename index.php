<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/output.css">
    <link rel="stylesheet" href="./assets/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="cont-title">
            <h1>Cantinho Literário</h1>
        </div>
        <div class="cont-main">
            <h2>Login</h2>
            <form action="./model/login.php" method="post">
                <label>Email:
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