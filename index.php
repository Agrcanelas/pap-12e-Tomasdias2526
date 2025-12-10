<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga à La Tomeiz</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial Black', sans-serif;
            background-color: #000;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            background-color: #133105ff;
            padding: 10px 20px;
            display: center;
            position: fixed;
            align-items: center;
            justify-content: center;
            top: 0;
            z-index: 100;
        }

        .navbar img {
            height: 50px;
            display: center; 
            
        }

        .menu {
            display: flex;
            gap: 95px;
        }
        .menu a {
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .hero {
            height: 89vh;
            width: 100%;
            background: url("10c.png") no-repeat center center/cover;
            background position: center;
            position: center;
            display: flex;
            align-items: center;
            padding-left: 80px;
            padding-right: 10px;
        }

        .overlay {
            position: absolute;
            inset: 90;
            background: rgba(0, 0, 0, 0.45);
        }

        .hero-content {
            position: relative;
            max-width: 600px;
            z-index: 6;
        }

        .tag {
            background-color: #00ff40;
            color: #000;
            width: fit-content;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .hero-title {
            margin: 15px 0;
            font-size: 48px;
            font-weight: 900;
            line-height: 1.2;
            color: #000000ff;
        }

        .hero-desc {
            color: #000000ff;
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #00ff40;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border: 2px solid #00ff40;
            padding: 10px 20px;
            border-radius: 25px;
        }

        .btn:hover {
            background-color: #00ff40;
            color: #000;
        }
        a:focus {
    outline: none;
}

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?><div class="navbar">
        <img src="logo_liga.png" alt="Logo Liga">
        <div class="menu"> 
        <ul></ul>
            <a href="calendario.php">Calendário</a></li>
            <a href="equipas.php">Equipas</a></li>
            <a href="jogadores.php">Jogadores</a></li>
            <a href="registo.php">Login</a></li>
        </li>
    </ul>
<div class="ghost"></div>
</nav>

        </div>
    </div>

    <!-- HERO -->
<div class="hero">
    <div class="overlay"></div>

    <div class="hero-content">
        <div class="tag">LIGA À LA TOMEIZ</div>

        <h1 class="hero-title">
            A TURMA SURPRESA DO CAMPEONATO<br>
            SERÁ VENCEDORA DA LIGA À LA TOMEIZ
        </h1>

        <p class="hero-desc">
            Não importa o resultado, importa a tua energia em campo. 
            Junta-te à liga e mostra o teu talento!
        </p>
    </div>
</div>

  