<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liga à La Tomeiz this is the end</title>

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
            padding: 20px 140px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 23px;

        }
        nav ul {
            display: flex;
            gap: 90px;
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
            height: 4px;
            background: #7aff65;
            transition: 0.1s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* HERO */
      .hero {
    background: url("10c.png") center/cover no-repeat;
    height: 90vh;
    position: relative;
    display: flex;
    align-items: center;
    padding: 0 60px;
}

/* gradiente só no lado do texto */
.hero::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 45%;
    height: 100%;
    background: linear-gradient(
        to right,
        rgba(0,0,0,0.55),
        rgba(0,0,0,0)
    );
}

/* texto */
.hero-content {
    position: relative;
    max-width:610px;
    color: white;
}

.hero h1 {
    font-size: 65px;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 15px;
}

.hero p {
    font-size: 45px;
    font-weight: 500;
    opacity: 0.95;
    margin-bottom: 25px;
}

/* botão */
.btn {
    background: #7aff65;
    color: #0d2c00;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 8px;
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
    </style>
</head>

<body>

    <!-- NAV -->
    <nav>
        <h2 style="color: white;">Liga á laTomeiz</h2>
        <ul>
            <a href="registo.php">Login</a></li>
            <a href="calendario.php">Calendário</a></li>
            <a href="equipas.php">Equipas</a></li>
            <a href="jogadores.php">Jogadores</a></li>
            
            
            
        </ul>
    </nav>

    <!-- HERO -->
    <div class="hero">
        <div class="hero-content">
            <h1>A Turma Surpresa Será Campeã na Liga à La Tomeiz!</h1>
            <p>Não importa o resultado — importa a tua energia em campo. Junta-te à liga e mostra o teu talento!</p>
        </div>
    </div>


</body>
</html>
