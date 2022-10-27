<?php
if(isset($_POST['buttonLogar'])){
  $email = $_POST['username'];
  $senha = $_POST['password'];

 //conexão com o banco de dados para
 $host = mysqli_connect("localhost", "root","", "mercadinho");

 //if ($host) {   echo "Conectado";}
 $query = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha';";

 $exec = mysqli_query($host, $query);

/*if (mysqli_affected_rows($host)) {
     echo "<script>alert('Usuário Encontrado com sucesso.');location.href='../';</script>";
 }*/

 while ($dados = mysqli_fetch_array($exec)) {
      $nome_bd  = $dados['nome'];
      $email_bd = $dados['email'];
      $senha_bd = $dados['senha'];	
}

if ($email == $email_bd) {
     if ($senha == $senha_bd) {
         echo "<script>alert('Bem-Vindo ".$nome_bd."');location.href='';</script>";
         }else {
         echo "<script>alert('Erro, Tente novamente!.');location.href='../login.html';</script>";
     }
 }else {
     echo "<script>alert('Erro, Tente novamente!.');location.href='../login.html';</script>";
 }
}
?>