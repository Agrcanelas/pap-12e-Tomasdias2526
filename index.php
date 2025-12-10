<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liga à La Tomeiz</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #111;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            background: #0d2c00;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        nav ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        nav a {
            color: white;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            transition: 0.3s;
        }

        nav a::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #7aff65;
            transition: 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* HERO */
        .hero {
            background: url("10c.png") center/cover no-repeat;
            height: 90vh;
            display: flex;
            align-items: center;
            padding-left: 60px;
            color: white;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.55);
        }

        .hero-content {
            position: relative;
            max-width: 600px;
            animation: fadeIn 1.2s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 15px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .btn {
            padding: 14px 28px;
            font-size: 18px;
            background: #7aff65;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #57d445;
            transform: scale(1.05);
        }

        /* SECÇÕES */
        section {
            padding: 60px;
        }

        h2 {
            margin-bottom: 20px;
        }

        /* CARD EXEMPLO */
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-6px);
        }

        /* RESPONSIVO */
        @media (max-width: 768px) {
            nav {
                padding: 20px;
            }
            .hero {
                padding: 20px;
            }
            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav>
        <h2 style="color: white;">⚽ Liga Tomeiz</h2>
        <ul>
            <li><a href="#login">Login</a></li>
            <li><a href="#calendario">Calendário</a></li>
            <li><a href="#equipas">Equipas</a></li>
            <li><a href="#jogadores">Jogadores</a></li>
            
        </ul>
    </nav>

    <!-- HERO -->
    <div class="hero">
        <div class="hero-content">
            <h1>A Turma Surpresa Será Campeã na Liga à La Tomeiz!</h1>
            <p>Não importa o resultado — importa a tua energia em campo. Junta-te à liga e mostra o teu talento!</p>
            <button class="btn" onclick="scrollToSection()">Quero Participar</button>
        </div>
    </div>


</body>
</html>
