<?php

$nome = $_POST["tNome"];
$senha = $_POST["tSenha"];
$email = $_POST["tEmail"];
$sexo = $_POST["tSexo"];
$nasc = $_POST["tNasc"];
$log = $_POST["log"];
$numero = $_POST["numero"];
$Regiao = $_POST["tEst"];
$Cidade = $_POST["cCid"];
$GraudeUrgencia = $_POST["cUrg"]; 
$Mensagem = $_POST["tMsg"]; 
$Iphone = $_POST["tPed"]; 
$Cor = $_POST["cCor"]; 
$Quantidade = $_POST["cQtd"]; 
$Precototal = $_POST["cTot"]; 



$tEst = "";
foreach ($checkbox as $estado){
    $tEst.= $estado." ";
}
$tCid = "";
foreach ($checkbox as $cidade){
    $tCid.= $cidade." ";
}
$tPed = "";
foreach ($checkbox as $iphone){
    $tPed.= $iphone." ";
}


echo "<p>Seu nome é: {$nome}</p>";
echo "<p>Sua senha é: {$senha}</p>";
echo "<p>Seu e-mail é: {$email}</p>";
echo "<p>Seu sexo é: {$sexo}</p>";
echo "<p>Sua data de nascimento é: {$nasc}</p>";
echo "<p>Seu logradouro é: {$log}</p>";
echo "<p>Seu número é: {$numero}</p>";
echo "<p>O grau de urgência é: {$GraudeUrgencia}</p>";
echo "<p>A mensagem é: {$Mensagem}</p>";
?>