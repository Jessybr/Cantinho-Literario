<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
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
    <?php include_once './components/header.php';
        require '../control/books_controller.php';

        $stmt = new BooksControler;
        $pagina = 1;
        if(isset($_GET['pagina']))
            $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

        if(!$pagina)
            $pagina = 1;
        
        $limite = 10;
        $inicio = ($pagina * $limite) - $limite;
        $total = $stmt->countAllDatas();
        $fim = ceil($total / $limite);
        
    ?>

    <main class="h-full ml-[20rem] pt-11 pl-20 pb-8 sm:h-screen sm:ml-1 sm:px-8">
        <div class="mb-12 pt-4">
            <h1 class="w-20 pb-1 border-b border-zinc-800 font-bold text-xl">Livros</h1>
        </div>
        <div class="flex flex-col items-start w-4/5 sm:w-full md:w-11/12">
            <div class="flex gap-x-4 mb-8">
                <button class="px-3 py-1 bg-red-600 rounded-md text-neutral-50 font-semibold cursor-pointer">Cadastrar livro</button>
            </div>
            <div class="w-full flex flex-col items-start sm:w-full sm:pt-6">
                <form action="" method="post" class="w-full flex flex-col justify-center items-center">
                    <input type="search" name="" id="" class="w-2/3 border-2 border-red-600 rounded pl-3 mb-4 sm:w-full" placeholder="Digite alguma informação sobre o livro...">
                </form>
                
                <form action="" class="w-full flex items-center flex-col sm:items-start sm:w-full sm:overflow-scroll md:items-start md:w-full md:overflow-scroll">
                    <table class="table-book text-left w-full">
                        <thead>
                            <tr>
                                <th class="th-none"></th>
                                <th class="py-3">Título</th>
                                <th class="py-3">Autor</th>
                                <th class="py-3">Qtdd. Exemplares</th>
                                <th class="py-3">Código</th>
                                <th class="th-none"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $datas = $stmt->viewAllDatas($inicio, $limite);
                                $count = 0;
                                for($i = 0; $i < count($datas); $i++) {
                                    $count++;
                            ?>
                            <tr class="text-center">
                                <td class="px-5 th-none py-3"><input type="checkbox" name="" id=""></td>
                                <td class="py-3"><?php echo $datas[$i]["Titulo"]; ?></td>
                                <td class="py-3"><?php echo $datas[$i]['Autor']; ?></td>
                                <td class="py-3"><?php echo $datas[$i]['Quantidade']; ?></td>
                                <td class="py-3"><?php echo $datas[$i]['Cod_livro']; ?></td>
                                <td class="pr-5 th-none py-3">
                                    <a href="./info-livro.php">
                                        <svg class="ml-10 cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6d6d6e"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                                    </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot class="text-neutral-50 font-light">
                            <tr>
                                <td class="py-3 px-5" colspan="2">Mostrando <?php echo $count;?> de <?php echo $total;?></td>
                                <td class="py-3 px-5" colspan="5">
                                    <div class="flex flex-row justify-end w-full">
                                        <a href="?pagina=<?=1;?>">
                                            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg>
                                        </a>
                                        <?php if($pagina>1){ ?>
                                        <a href="?pagina=<?=$pagina-1; ?>">
                                            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
                                        </a>
                                        <?php } ?>
                                        <?php if($pagina<$fim){ ?>
                                        <a href="?pagina=<?=$pagina+1;?>">
                                            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                                        </a>
                                        <?php } ?>
                                        <a href="?pagina=<?=$fim;?>">
                                            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fafafa"><path d="M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    
                </form>
            </div>
        </div>
    </main>

    <?php include_once './components/footer.php' ?>
    <script src="../assets/script/menu.js"></script>
</body>
</html>