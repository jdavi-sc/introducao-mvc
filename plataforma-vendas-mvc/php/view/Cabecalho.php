<?php
    require_once '../model/Conexao.php';
    require_once '../model/Menu.php';

    $db = new Conexao();
    $conn = $db->connect();

    //para o menu
    $menuObj = new Menu($conn);
    $menu = $menuObj->getMenuCompleto();

?>


<header class="container-header">
    <div class="logo-principal">
        <img src="" alt="">
        <h2>Tanaka Autopeças</h2>
    </div> 
    <div class="container-menu">
        
        <nav>
            <ul class="menu">
                <li><a href="../view/Home.php">Home</a></li>
                <?php foreach($menu as $categoria => $subcategoria):?>
                    <li><a href=""><?php echo $categoria; ?></a>
                        <ul>
                            <?php foreach($subcategoria as $sub): ?>
                                <li>
                                    <a href="../view/card.php?subcategoria=<?php echo urlencode($sub);?>">
                                        <?php echo $sub; ?>
                                    </a>
                                </li>   
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                <?php endforeach; ?>
                <li><a href="../view/Sobre.html">Sobre</a></li>
            </ul>
        </nav>

    </div>
</header>