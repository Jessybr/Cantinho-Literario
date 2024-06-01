<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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

    <main class="h-screen ml-[20rem] pt-11 pl-20 sm:h-screen sm:ml-1 sm:px-8">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>
        <div class="w-full flex flex-col">
            <form action="" class="flex flex-row justify-between flex-wrap gap-3 w-2/3 sm:w-full sm:flex-col">
                <label>
                    Foto
                    <input type="file" name="" class="w-full">
                </label>
                <label class="w-full">
                    Nome
                    <input type="text" name="" class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-1/2 sm:w-full">
                    CPF
                    <input type="text" name="" class="w-full border-2 border-red-600 rounded">
                </label>
                <label class="w-2/5 sm:w-full">
                    Celular
                    <input type="text" name="" placeholder="11922222222" class="w-full border-2 border-red-600 rounded pl-2">
                </label>
                <label class="w-full">
                    Endereço
                    <input type="text" name="" placeholder="logradouro e número" class="w-full border-2 border-red-600 rounded pl-2">
                </label>
                <input type="submit" value="Cadastrar" class="self-start px-4 py-[6px] rounded text-neutral-50 font-semibold bg-red-600">
            </form>
        </div>
    </main>

    
    <?php include_once './components/footer.php' ?>
    
</body>
</html>