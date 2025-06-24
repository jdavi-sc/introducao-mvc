<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA INICIAL | Seja bem-vindo!</title>

    <!-- reset de estilização do browser -->

    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/reset.css">
    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="./../../css/componentes/carrossel.css">
    <link rel="stylesheet" type="text/css" href="./../../css/componentes/menu.css">
    
    <!-- css destinado as principais configurações de estilos do portal -->
    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/principal.css">

</head>
<body>
    <!-- cabeçalho -->
     <?php
     
        include '../view/Cabecalho.php'

     ?>

    <main class="container-main">
        <div class="carrossel">
            <div class="slides">
                <img src="./../../src/images/destaques/pastilha.jfif" alt="Pastilha de freios Gol 1996-01">
                <img src="./../../src/images/destaques/mocinetica.jfif" alt="Mocinética">
                <img src="./../../src/images/destaques/parabrisa.jfif" alt="Parabrisa Pálio 2003">
                <img src="./../../src/images/destaques/gol.jfif" alt="Bico Injetor Gol 1996-01">
            </div>
            <button class="prev" onclick="mudarslide(-1)"> </button>
            <button class="next" onclick="mudarslide(1)"> </button>
        </div>
    </main>
    <!-- rodapé -->
     <script src="./../../js/carrossel.js"></script>
</body>
</html>