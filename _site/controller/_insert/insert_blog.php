<?php

include_once '../connection.php';
//require 'wideimage/WideImage.php'; //Inclui classe WideImage à página

//Recebe os valores digitados
$nome = filter_input(INPUT_POST, 'txt_nome');
$texto = filter_input(INPUT_POST, 'txt_corpo');

if(isset($_FILES['txt_imagem']))
 {
    $ext = strtolower(substr($_FILES['txt_imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../../media/images/blog/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    $img = $dir.$new_name;
}
/*
if (isset($_FILES['txt_imagem'])) {
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

    $extensao = strtolower(substr($_FILES['txt_imagem']['name'], -4)); //Pegando extensão do arquivo
    $nome_temp = $_FILES['txt_imagem']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável
    $novo_nome = $nome . date("-Y.m.d-H.i.s") . $extensao; //Definindo um novo nome para o arquivo
    $pastaUp = '../../media/images/blog/'; //Diretório para uploads
    $pastaDown = chmod('../../media/images/blog/, 0755)'; //Diretório para downloads
    
    $image = WideImage::load($nome_temp); //Carrega a imagem utilizando a WideImage
    $image = $image->resize(200, 200, 'outside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
    $image = $image->crop('center', 'center', 200, 200); //Corta a imagem do centro, forçando sua altura e largura
    
    //move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $pastaUp . $novo_nome); //Fazer upload do arquivo
    //$caminhoCompleto = $pastaDown . $novo_nome;

    $ca = 'http://localhost/iHuman/_site/media/images/blog/';
    $img = $ca; //. $novo_nome;
    
    $image->saveToFile($pastaUp.$novo_nome); //Salva a imagem
}
*/


//CRIA uma consulta para cadastra um novo produto
//$sql = "INSERT INTO produto(idProduto, nomeProduto, descProduto, caminhoImagemPrincipal, qtdEstoque, precoProduto, tipo, categoria) VALUES (0, '$nome', '$descricao', '$caminhocompleto', $estoque, $preco, '$tipo', '$categoria')";
$sql = "INSERT INTO blog (idBlog, nomeBlog, corpoBlog, caminhoImagemPrincipal) VALUES (0, '$nome', '$texto', '$img');";
//EXECUTA a consulta
$resultado = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/form_blog.php'>"
    . "<script type='text/javascript'>"
    . "alert('Postagem publicada com Sucesso! $resultado');</script>";

    //echo $caminhoCompleto;
    //echo $img;
} else {
    echo "ERROR: ";
    //echo "ERRO:   --> $resultado e linha > $linha";
}

mysqli_close($con);