<?php
include_once ('../../../_site/controller/connection.php');
//$ca = '../connection.php';

//require $ca;
//include_once 'login.php'; //necessário para verificação da idade
//CRIA uma consulta para listar as categorias
$sql = "SELECT * FROM login WHERE class = 2 ORDER BY nome";
//EXECUTA a consulta
$resultado = mysqli_query($con, $sql);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($resultado);
// calcula quantos dados retornaram
$totalColuna = mysqli_num_rows($resultado);
$totalLinha = mysqli_num_rows($resultado);
if ($totalLinha<4){
    $totalLinha = 4;
}
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php for ($l = 0; $l < ($totalLinha/4); $l++) { ?>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <?php
            // se o número de resultados for maior que zero, mostra os dados
            if ($totalLinha > 0) {
                // inicia o loop que vai mostrar todos os dados
                for ($i = 1; $i <= 4; $i++) {
                    ?>
                    <div class="d-flex justify-content-center" style="margin: 0 5px 0 5px;">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= $linha['foto'] ?>" 
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title"><?= $linha['nome'] ?></h2>
                                <h5 class="card-title"><b>UF:</b><i style="color: red"><?= $linha['uf'] ?></i></h5>                            
                                <h6 class="card-title">Gostos:</h6>
                                <p class="card-text"><?= $linha['gostos'] ?></p>
                            </div>
                            <div id="a " class="card-footer" onclick="mudaCor">
                                <a href="#" class="btn btn-primary btn-block align-self-end" style="background-color: #04D9C4; color: #fff;">
                                <img src="http://localhost/iHuman/_site/media/images/heroe.png" alt="" class="img img-responsive" style="width: 2rem;"/>Contatar</a>
                            </div>
                        </div>
                    </div>           
                    <?php
                    $linha = mysqli_fetch_assoc($resultado);
                    if ($linha['id'] == NULL){
                        exit();
                    }
                        
                    // finaliza o loop que vai mostrar os dados
                }
                // fim do if 
            }
            ?>
        </div>
        <?php } ?>
    </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($resultado);
mysqli_close($con);
?>