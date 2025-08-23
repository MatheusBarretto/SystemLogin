<?php

try{
    if(isset($_POST['usuario']) && isset($_POST['usuario']) &&isset($_POST['usuario'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $senhaConfirm = $_POST['confirmarsenha'];
    }else{
        echo "Erro no formulário"
    }

    if ($senha == $senhaConfirm){
        $hashSenha = password_hash($senha, PASSWORD_BCRYPT)
    }else{
        echo "As senhas não são iguais"
    }

}catch(PDOexception $e){
    echo "<h2 style='color:red;'> Erro: " .$e->getMessage ()."</h2>;"
}
