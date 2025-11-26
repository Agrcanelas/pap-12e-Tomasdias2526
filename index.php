<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga à la Tomeiz</title>

    <style>
        /* ======== ESTILO GERAL ======== */
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background:
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=1920&q=80')
                no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 25px 0;
            border-bottom: 2px solid #00bfff;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 2px;
            color: #00bfff;
        }

        /* ======== MENU ======== */
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #00bfff;
        }

        /* ======== SECÇÃO PRINCIPAL ======== */
        .main {
            text-align: center;
            padding: 60px 20px;
        }

        .main h2 {
            font-size: 2em;
            color: #00bfff;
            margin-bottom: 40px;
        }

        .jogos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .jogo-card {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid #00bfff;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 191, 255, 0.3);
            transition: transform 0.3s, background-color 0.3s;
        }

        .jogo-card:hover {
            transform: scale(1.05);
            background-color: rgba(0, 191, 255, 0.1);
        }

        .equipa {
            font-size: 1.2em;
        }

        .resultado {
            font-size: 2em;
            margin: 10px 0;
            font-weight: bold;
            color: #00bfff;
        }

        .data {
            font-size: 0.9em;
            color: #ccc;
        }

        /* ======== RODAPÉ ======== */
        footer {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 15px;
            margin-top: 50px;
            color: #aaa;
            font-size: 0.9em;
            border-top: 1px solid #00bfff;
        }
    </style>
</head>
<body>

<header>
    <h1>LIGA À LA TOMEIZ ⚽</h1>
</header>

<nav>
    <a href="#">🏠 Início</a>
    <a href="#">📅 Calendário</a>
    <a href="#">🏆 Classificação</a>
    <a href="#">👥 Equipas</a>
    <a href="#">📧 Contacto</a>
</nav>

<section class="main">
    <h2>Jogos da Semana</h2>

    <div class="jogos">
        <?php foreach ($jogos as $jogo): ?>
            <div class="jogo-card">
                <div class="equipa"><?= $jogo["equipa1"] ?> <br>vs<br> <?= $jogo["equipa2"] ?></div>
                <div class="resultado"><?= $jogo["resultado"] ?></div>
                <div class="data"><?= $jogo["data"] ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<footer>
    © <?= date("Y") ?> Liga à la Tomeiz — Projeto PAP | Desenvolvido por [O teu nome]
</footer>

</body>
</html>
