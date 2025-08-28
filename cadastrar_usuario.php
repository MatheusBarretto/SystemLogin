<?php

try{
    if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['confirmarsenha'])){
        $nome = $_POST['nome'];
        $email = $_POST ['email'];
        $senha = $_POST['senha'];
        $senhaConfirm = $_POST['confirmarsenha'];

    }else{
        echo "Erro no formulário";
    }

    if ($senha == $senhaConfirm){
        $hashSenha = password_hash($senha, PASSWORD_BCRYPT);
    }else{
        echo "As senhas não são iguais";
    }

    require 'banco/conexao.php';



    $sql = "insert into usuario (login, email, senha) 
            values 
            (:nome, :email, :senha)";

    $insert = $conn->prepare($sql);
    $insert->bindparam(':nome', $nome, PDO::PARAM_STR);
    $insert->bindparam(':email', $email, PDO::PARAM_STR);
    $insert->bindparam(':senha', $hashSenha, PDO::PARAM_STR);
    $insert->execute();

    echo "<script> window.alert('Usuário cadastrado com sucesso!') 
            window.location.href='index.html'</script>";

}catch(PDOexception $e){
    echo "<h2 style='color:red;'> Erro: " .$e->getMessage ()."</h2>;";
}
