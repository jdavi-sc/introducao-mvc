<?php
require_once '../model/Conexao.php';    
require_once '../model/Produto.php';


// Pegando a subcategoria da URL
$subcategoria = isset($GET['subcategoria']) ? urldecode($_GET['subcategoria']): null;

?>