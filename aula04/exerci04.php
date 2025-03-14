<?php
$nome = $_POST['cxnome'];
$email = $_POST['cxemail'];
$data = $_POST['cxdata'];
$bandeira = $_POST['cxbandeira'];
echo"<p>Olá, ".$nome."!</p>";
echo"<p>Seu email: ".$email."!</p>";
echo"<p>Nascimento: ".$data."!</p>";
echo"<p>Bandeira do Cartão de Crédito: ".$bandeira."!</p>";
?>