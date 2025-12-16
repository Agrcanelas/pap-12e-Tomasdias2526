<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga à La Tomeiz - Login</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial Black', sans-serif;
        background: url("10c.png") no-repeat center center/cover;
        background-color: #000;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    /* CAIXA DO LOGIN/REGISTO */
    .form-container {
        position: relative;
        z-index: 2;
        background: rgba(19, 49, 5, 0.85);
        border: 3px solid #00ff40;
        box-shadow: 0 0 20px #00ff4088;
        border-radius: 15px;
        width: 420px;
        padding: 30px;
        text-align: center;
        color: white;
    }

    .form-container h2 {
        margin: 0;
        font-size: 30px;
        color: #00ff40;
        text-transform: uppercase;
    }

    .form-container p {
        margin-top: 5px;
        color: #ccc;
    }

    .form-container input {
        width: 95%;
        padding: 12px;
        margin-top: 15px;
        border-radius: 10px;
        border: 2px solid #00ff40;
        background-color: #000000dd;
        color: #00ff40;
        font-size: 14px;
        outline: none;
        text-transform: uppercase;
    }

    .form-container input::placeholder {
        color: #00ff4088;
    }

    .form-container button {
        width: 100%;
        margin-top: 20px;
        padding: 12px 0;
        background-color: #00ff40;
        border: none;
        border-radius: 25px;
        color: #000;
        font-size: 18px;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
    }

    .form-container button:hover {
        background-color: #00cc35;
    }

    /* LINK PARA TROCAR LOGIN/REGISTO */
    .form-container a {
        color: #00ff40;
        text-decoration: none;
        font-size: 14px;
    }

    .form-container a:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>

<div class="overlay"></div>

<div class="form-container">
    <h2>Entrar</h2>
    <p>Acede à tua conta da Liga</p>

    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <p style="margin-top: 15px;">
        Ainda não tens conta?
        <br>
        <a href="registo.php">Criar Conta</a>
    </p>
</div>

</body>
</html><!-- Mensagem de sucesso ou ajuda após criar conta ou perda de dados -->
<div class="form-container" id="message-container" style="display: none;">
    <h2 id="message-title"></h2>
    <p id="message-text"></p>
    <button onclick="closeMessage()">Fechar</button>
</div>

<script>
    // Função para exibir mensagem personalizada
    function showMessage(type) {
        const container = document.getElementById('message-container');
        const title = document.getElementById('message-title');
        const text = document.getElementById('message-text');

        if(type === 'success') {
            title.textContent = 'Conta Criada com Sucesso!';
            text.innerHTML = 'A tua conta foi criada. Já podes fazer login.<br>Se encontrares problemas, contacta o suporte.';
        } else if(type === 'data-loss') {
            title.textContent = 'Problema com os Dados';
            text.innerHTML = 'Detectámos uma possível perda de dados.<br>Por favor, tenta recuperar a tua conta ou contacta o suporte.';
        }

        container.style.display = 'block';
    }

    function closeMessage() {
        document.getElementById('message-container').style.display = 'none';
    }

    // Exemplo: exibir mensagem de sucesso após registro
    // showMessage('success');

    // Exemplo: exibir mensagem de perda de dados
    // showMessage('data-loss');
</script>

