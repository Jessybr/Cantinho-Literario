<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './components/header.php' ?>

    <main class="h-screen ml-[20rem] pt-11 pl-20">
        <div class="mb-12 pt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#27272a" viewBox="0 0 256 256"><path d="M232,200a8,8,0,0,1-16,0,88.1,88.1,0,0,0-88-88H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,61.66L51.31,96H128A104.11,104.11,0,0,1,232,200Z"></path></svg>
        </div>
        <div class="flex flex-col gap-5">
            <div class="flex flex-row">
                <div class="w-[133px] h-[169px] shadow-lg mr-10">Foto 133.33 169</div>
                <div class="py-5 flex flex-col gap-4">
                    <h2 class="text-xl text-red-600">João Pedro</h2>
                    <span class="text-base text-red-600 font-semibold">23 pontos</span>
                </div>
            </div>
            <div class="flex flex-row flex-wrap gap-2">
                <p class="w-2/5">Data do cadastro</p>
                <p class="w-2/5">CPF</p>
                <p class="w-2/5">Endereço</p>
                <p class="w-2/5">Celular</p>
            </div>
            <a href="form-cliente.html" class="w-[100px] py-[3px] px-7 text-neutral-50 font-semibold bg-red-600 rounded">Editar</a>
        </div>
        
        <div class="flex flex-col gap-5">
            <h1 class="my-5 text-xl font-bold">Empréstimos passados</h1>
            <table class="table-book text-center w-full">
                <thead>
                    <tr>
                        <th class="py-2">Título</th>
                        <th class="py-2">Cliente</th>
                        <th class="py-2">Data do empréstimo</th>
                        <th class="py-2">Data de devolução</th>
                        <th class="py-2" colspan="2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2">O Pequeno Príncepe</td>
                        <td class="py-2">João Paulo</td>
                        <td class="py-2">21/12/12</td>
                        <td class="py-2">31/12/12</td>
                        <td class="py-2">Devolvido</td>
                        <td class="pr-5 th-none py-2">
                            <svg class="ml-10 cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6d6d6e"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="text-neutral-50 font-light text-left">
                    <tr>
                        <td class="py-2 px-5" colspan="2">
                            Monstrando 10 de 200 itens
                        </td>
                        <td class="py-2 px-5" colspan="5">
                            <div>
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