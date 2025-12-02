<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liga Escolar - Federação Portuguesa de Futebol</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', Arial, sans-serif;
      background-color: #fff;
      color: #000;
    }

    /* ----------- TOPO ----------- */
    header {
      background: linear-gradient(90deg, #000 0%, #d60000 50%, #006633 100%);
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 30px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-area img {
      height: 50px;
}

    .logo-area h1 {
      font-size: 1.1rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* ----------- MENU SUPERIOR ----------- */
    nav {
      background-color: #1c1c1c;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 40px;
      color: white;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 0.9rem;
      text-transform: uppercase;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #d60000;
    }
    
    .nav-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .nav-right input[type="text"] {
      padding: 5px 10px;
      border-radius: 4px;
      border: none;
      outline: none;
    }

    .menu-btn {
      background-color: #d60000;
      border: none;
      color: white;
      padding: 8px 14px;
      text-transform: uppercase;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .menu-btn:hover {
      background-color: #a00000;
    }
    .main-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px;
    }

    .main-text {
      max-width: 45%;
    }

    .main-text h2 {
      font-size: 2.4rem;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    .main-text p {
      color: #444;
      line-height: 1.6;
      margin-bottom: 25px;
    }

    .main-text a {
      background-color: #d60000;
      color: white;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 3px;
      font-weight: bold;
      text-transform: uppercase;
      transition: background 0.3s;
    }

    .main-text a:hover {
      background-color: #900;
    }
    
    .main-image {
      width: 45%;
    }

    .main-image img {
      width: 100%;
      border-radius: 8px;
    }

    /* ----------- RODAPÉ ----------- */
    footer {
      background-color: #1c1c1c;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-size: 0.8rem;
    }
  </style>
</head>
<body>

  <!-- TOPO -->
  <header>
    <div class="logo-area">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/FPF_logo.svg" alt="FPF Logo">
      <h1>Federação Portuguesa de Futebol - Liga Escolar</h1>
    </div>
  </header>

  <!-- MENU -->
  <nav>
    <div class="nav-links">
      <a href="index.php">Início</a>
      <a href="calendario.php">Calendário</a>
      <a href="classificacao.php">Classificação</a>
      <a href="equipas.php">Equipas</a>
      <a href="login.php">Login</a>

    </div>

    <div class="nav-right">
      <input type="text" placeholder="Pesquisa...">
      <button class="menu-btn">Menu</button>
    </div>
  </nav>

  <!-- CONTEÚDO PRINCIPAL -->
  <section class="main-section">
    <div class="main-text">
      <h2>Bem-vindo à Liga Escolar!</h2>
      <p>Descobre as equipas, o calendário dos jogos e acompanha a classificação da nossa competição escolar.</p>
      <a href="classificacao.php">Ver Classificação</a>
    </div>
     <div class="main-image">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f5/Women_football_match.jpg" alt="Jogo de Futebol">
    </div>
  </section>

  <!-- RODAPÉ -->
  <footer>
    © 2025 Liga Escolar - Todos os direitos reservados.
  </footer>

</body>
</html>