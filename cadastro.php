<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="cadastro.php" method="POST">
        <div class="login-container">
            <h2>CADASTRO</h2>
            <label for="nome">Nome:</label>
            <input type="text" value="" name="nome" placeholder="Nome completo">

            <label for="email">E-mail:</label>
            <input type="text" value="" required name="email" placeholder="exemplo@exemplo.com">

            <label for="senha">Senha:</label>
            <input type="password" value="" name="senha" required placeholder="**********">

            <label for="confirmarsenha">Confirmar Senha:</label>
            <input type="password" value="" required name="confirmarsenha" placeholder="**********">

            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>
</html>