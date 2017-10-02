<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vijay
 * Date: 19/09/17
 * Time: 19:02
 */
require_once "conexao.php";
$sql = "select nm_comprador as \"value\", id_comprador as \"id\" from compradores";
$conexao = conectar();
$stmt = mysqli_query($conexao, $sql);
$json = [];
while($rs = mysqli_fetch_assoc($stmt)){
    array_walk($rs, function(&$entry){
        $entry = utf8_encode($entry);
    });
    $json[] = $rs;
}
print json_encode($json);
?>