<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Federação Portuguesa de Futebol</title>
  <style>
    /* ----------- RESET ----------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', Arial, sans-serif;
      background-color: #fff;
      color: #000;
      line-height: 1.6;
    }

    /* ----------- CABEÇALHO ----------- */
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
      height: 55px;
    }

    .logo-area h1 {
      font-size: 1.2rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* ----------- MENU ----------- */
    nav {
      background-color: #1c1c1c;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 40px;
      color: white;
      flex-wrap: wrap;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 25px;
      flex-wrap: wrap;
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
      gap: 10px;
    }

    .nav-right input[type="text"] {
      padding: 6px 10px;
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
      background-color: #900;
    }

    /* ----------- SEÇÃO DESTAQUE ----------- */
    .main-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px 10%;
      gap: 40px;
      background: #f9f9f9;
    }

    .main-text {
      max-width: 50%;
    }

    .main-text h2 {
      font-size: 2.4rem;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    .main-text p {
      color: #444;
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

    /* ----------- EM FOCO ----------- */
    .em-foco {
      padding: 60px 10%;
    }

    .em-foco h2 {
      font-size: 2rem;
      text-transform: uppercase;
      border-left: 6px solid #d60000;
      padding-left: 10px;
      margin-bottom: 30px;
    }

    .foco-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
    }

    .foco-item {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      background: #fff;
      transition: transform 0.3s;
    }

    .foco-item:hover {
      transform: translateY(-5px);
    }

    .foco-item img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .foco-item .info {
      padding: 15px;
    }

    .foco-item .info h3 {
      color: #000;
      margin-bottom: 10px;
      font-size: 1.1rem;
    }

    .foco-item .info p {
      color: #555;
      font-size: 0.9rem;
    }

    /* ----------- PARCEIROS ----------- */
    .parceiros {
      background-color: #eee;
      padding: 50px 10%;
      text-align: center;
    }

    .parceiros h2 {
      font-size: 1.8rem;
      margin-bottom: 30px;
      text-transform: uppercase;
    }

    .logos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .logos img {
      height: 50px;
      filter: grayscale(100%);
      transition: filter 0.3s;
    }

    .logos img:hover {
      filter: grayscale(0%);
    }

    /* ----------- REDES SOCIAIS ----------- */
    .social {
      background: #1c1c1c;
      color: white;
      text-align: center;
      padding: 40px 10%;
    }

    .social h2 {
      margin-bottom: 20px;
      text-transform: uppercase;
      font-size: 1.4rem;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 10px;
    }

    .social-icons a {
      color: white;
      font-size: 1.6rem;
      text-decoration: none;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #d60000;
    }

    /* ----------- RODAPÉ ----------- */
    footer {
      background-color: #000;
      color: #ccc;
      text-align: center;
      padding: 25px;
      font-size: 0.85rem;
    }
  </style>
</head>
<body>

  <!-- CABEÇALHO -->
  <header>
    <div class="logo-area">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/FPF_logo.svg" alt="FPF Logo">
      <h1>Federação Portuguesa de Futebol</h1>
    </div>
  </header>

  <!-- MENU -->
  <nav>
    <a href="index.php">Inicio</a>
    <a href="calendario.php">Calendario</a>
    <a href="classificacao.php">Classificacao</a>
    <a href="equipas.php">Equipas</a>
    <a href="contacto.php">Contacto</a>
    </div>
    <div class="nav-right">
      <input type="text" placeholder="Pesquisa...">
      <button class="menu-btn">Menu</button>
    </div>
  </nav>

  <!-- DESTAQUE -->
  <section class="main-section">
    <div class="main-text">
      <h2>Festa do Futebol Está de Volta!</h2>
      <p>44 equipas jogam qualificação para a 3ª ronda da Taça de Portugal Feminina Generali Tranquilidade.</p>
      <a href="#">Ler mais</a>
    </div>
    <div class="main-image">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f5/Women_football_match.jpg" alt="Futebol Feminino">
    </div>
  </section>

  <!-- EM FOCO -->
  <section class="em-foco">
    <h2>Em Foco</h2>
    <div class="foco-grid">
      <div class="foco-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Portugal_national_football_team_training.jpg" alt="">
        <div class="info">
          <h3>Seleção A prepara jogo decisivo</h3>
          <p>Equipa nacional treina em Lisboa antes do confronto com a França.</p>
        </div>
      </div>
      <div class="foco-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/76/Estadio_do_Dragao_interior.jpg" alt="">
        <div class="info">
          <h3>Final da Taça marcada para o Dragão</h3>
          <p>O clássico estádio do Porto será palco da grande final da Taça de Portugal 2025.</p>
        </div>
      </div>
      <div class="foco-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Portugal_team_celebrating.jpg" alt="">
        <div class="info">
          <h3>Portugal sobe no ranking da FIFA</h3>
          <p>A seleção portuguesa alcança o 6º lugar no novo ranking mundial.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PARCEIROS -->
  <section class="parceiros">
    <h2>Parceiros Oficiais</h2>
    <div class="logos">
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/16/Nike_logo.svg" alt="Nike">
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Sagres_logo.svg" alt="Sagres">
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Galp_logo.svg" alt="Galp">
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Vodafone_2017_logo.svg" alt="Vodafone">
    </div>
  </section>

  <!-- REDES SOCIAIS -->
  <section class="social">
    <h2>Siga-nos</h2>
    <div class="social-icons">
      <a href="#">📘</a>
      <a href="#">🐦</a>
      <a href="#">📸</a>
      <a href="#">▶️</a>
    </div>
  </section>

  <!-- RODAPÉ -->
  <footer>
    © 2025 Federação Portuguesa de Futebol. Todos os direitos reservados.<br>
    Desenvolvido como exemplo educativo.
  </footer>

</body>
</html>
