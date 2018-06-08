<?php
require_once 'app/modelos/CrudCategoria.php';
require_once 'app/modelos/CrudProduto.php';

//Ação principal - LISTAR TODAS AS CATEGORIAS



if(isset($_GET['acao'])){
    $acao=$_GET['acao'];

}else{
    $acao='index';
}

switch ($acao) {
    case 'index':
        $crud=new CrudCategoria();
        $crud2=new CrudProduto();
        $categorias=$crud->getCategorias();
        $produtos=$crud2->getProdutos();
        include "app/views/principal/index.php";
        break;
}