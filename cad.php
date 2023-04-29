<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Pokemon</title>
</head>
<body>
    <img src="charmander.png" alt="charmander" id="charmander">
    <nav id="nav"><i href="pokebola.png"></i><a href="index.php">Login</a></nav>
        <div class="formLogin">
            <form method="post" action="cadastro_action.php">
                <h2>CADASTRO</h2>
                <div class="caixa">
                    <label for="login">Login</label>
                    <div class="send">
                        <input type="text" name="login" id="login" placeholder="seu login" maxlength="20">
                    </div>
                </div>

                <div class="caixa">
                    <label for="senha1">Senha</label>
                    <div class="send">
                        <input type="password" name="senha1" id="senha1" placeholder="defina sua senha" maxlength="8">
                    </div>
                </div>
                <div class="caixa">
                    <label for="senha2">Repita a senha</label>
                    <div class="send">
                        <input type="password" name="senha" id="senha2" placeholder="repita sua senha" maxlength="8">
                    </div>
                </div>
            <div class="submit">
                <button type="submit">CADASTRAR-SE</button>
            </div>
        </form>
    </div>
    <footer>
    </footer>
    <div class="fundo"></div>
</body>
</html>