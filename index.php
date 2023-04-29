<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon</title>
</head>
<body>
    <img src="pikachu.png" alt="pikachu" id="pikachu">
        <div class="formLogin">
            <form method="post" action="login.php">
                <h2>Login</h2>
                <div class="caixa">
                    <label for="login">Login</label>
                    <div class="send">
                        <input type="text" name="login" id="login" placeholder="seu login">
                    </div>
                </div>

                <div class="caixa">
                    <label for="senha">Senha</label>
                    <div class="send">
                        <input type="password" name="senha" id="senha" placeholder="sua senha" maxlenght="8">
                    </div>
                </div>

            <div class="submit">
                <button type="submit">LOGIN</button>
                <button type="submit" id="cadastro"><a href="cad.php">CADASTRAR-SE</a></button>
            </div>
        </form>
    </div>
    <footer>
    </footer>
    <div class="fundo"></div>
</body>
</html>