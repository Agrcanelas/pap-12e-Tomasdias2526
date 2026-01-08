<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liga à La Tomeiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI', sans-serif; }

        body {
            background: linear-gradient(135deg, #e0ffe0, #a0d4a0);
            color: #222;
            overflow-x:hidden;
        }

    
        header {
            position: fixed;
            top:0;
            width:100%;
            background: rgba(13,44,0,0.95);
            color:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 60px;
            z-index:1000;
            box-shadow:0 3px 8px rgba(0,0,0,0.2);
        }

        header h1 { font-size:26px; }

        nav { display:flex; gap:30px; }

        nav a {
            color:white;
            text-decoration:none;
            font-weight:bold;
            padding:5px 0;
            position:relative;
            transition:0.3s;
        }

        nav a::after {
            content:'';
            position:absolute;
            left:0;
            bottom:-3px;
            width:0%;
            height:3px;
            background:#7aff65;
            border-radius:2px;
            transition:width 0.3s;
        }

        nav a.active::after,
        nav a:hover::after { width:100%; }

        .hero {
            background: url("10c.png") center/cover no-repeat;
            height:75vh;
            display:flex;
            align-items:center;
            justify-content:center;
            position:relative;
            border-radius:12px;
            margin-top:80px;
            overflow:hidden;
        }

        .hero::before {
            content:"";
            position:absolute;
            inset:0;
            background: rgba(0,0,0,0.3);
        }

        .hero-content {
            position:relative;
            color:white;
            text-align:center;
        }

        .hero-content img {
            width:200px;
            height:200px;
            border-radius:90%;
            border:5px solid #7aff65;
            margin-bottom:20px;
            object-fit:cover;
        }

        .hero-content h1 {
            font-size:48px;
            margin-bottom:10px;
        }

        .hero-content p {
            font-size:20px;
            font-weight:500;
            opacity:0.9;
            margin-bottom:20px;
        }

        .btn {
            display:inline-block;
            background:#7aff65;
            color:#0d2c00;
            font-weight:700;
            padding:12px 28px;
            border-radius:8px;
            text-decoration:none;
            transition:0.3s;
        }

        .btn:hover { background:#57d445; transform:scale(1.05); }

        /* GRID DE CARDS DE NOTÍCIAS */
        .news-grid {
            display:grid;
            grid-template-columns:repeat(auto-fill, minmax(280px, 1fr));
            gap:25px;
            padding:40px 20px;
        }

        .news-card {
            background:white;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
            transition:transform 0.3s, box-shadow 0.3s;
        }

        .news-card:hover {
            transform:translateY(-8px);
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        .news-card img {
            width:100%;
            height:180px;
            object-fit:cover;
        }

        .news-content { padding:15px; }

        .news-content h3 { font-size:20px; margin-bottom:8px; }
        .news-content p { font-size:15px; color:#444; line-height:1.5; }
        .news-content a {
            display:inline-block;
            margin-top:12px;
            color:#0d2c00;
            font-weight:bold;
            text-decoration:none;
            transition:0.2s;
        }
        .news-content a:hover { text-decoration:underline; }

        .newsletter-banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: linear-gradient(90deg, #061b3a 0%, #0a2f66 55%, #00ff9c 100%);
  border-radius: 18px;
  padding: 40px 50px;
  max-width: 1200px;
  margin: 60px auto;
  color: #fff;
  overflow: hidden;
}

.newsletter-left {
  max-width: 45%;
}

.newsletter-left h2 {
  color: #00ff9c;
  font-size: 30px;
  margin-bottom: 15px;
  font-weight: 800;
}

.newsletter-left p {
  font-size: 16px;
  color: #dce6ff;
  margin-bottom: 25px;
  line-height: 1.5;
}

.newsletter-btn {
  display: inline-block;
  background: #00ff9c;
  color: #04162f;
  padding: 12px 26px;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
  transition: 0.3s;
}

.newsletter-btn:hover {
  background: #00e68a;
}

.newsletter-right img {
  max-width: 420px;
  transform: rotate(-10deg);
}

/* RESPONSIVO */
@media (max-width: 900px) {
  .newsletter-banner {
    flex-direction: column;
    text-align: center;
  }

  .newsletter-left {
    max-width: 100%;
  }

  .newsletter-right img {
    margin-top: 30px;
    transform: rotate(0);
    max-width: 100%;
  }
}

        /* BOTÃO SCROLL TOP */
        #scrollTop {
            position:fixed;
            bottom:25px;
            right:25px;
            background:#7aff65;
            color:#0d2c00;
            padding:12px 18px;
            border-radius:50px;
            cursor:pointer;
            display:none;
            font-weight:bold;
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
            transition:transform 0.2s;
        }
        #scrollTop:hover { transform:scale(1.1); }

        footer {
            background:#0d2c00;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }
        /* SOCIAL ICONS */
.social-icons {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-top: 15px;
}

.social-icons a {
    width: 46px;
    height: 46px;
    border: 2px solid rgba(255,255,255,0.4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    transform: scale(1.15);
}

/* CORES HOVER */
.social-icons .twitch:hover {
    color: #9146ff;
    border-color: #9146ff;
}

.social-icons .instagram:hover {
    color: #e1306c;
    border-color: #e1306c;
}

.social-icons .youtube:hover {
    color: #ff0000;
    border-color: #ff0000;
}

    </style>
</head>
<body>

<header>
 <h1>
  <img src="logo_liga.png" alt="Logo" style="height:40px; vertical-align:middle; margin-right:10px;">
  Liga à La Tomeiz
</h1>
    <nav>
         <a href="registo.php">Login</a></li>
            <a href="calendario.php">Calendário</a></li>
            <a href="equipas.php">Equipas</a></li>
            <a href="jogadores.php">Jogadores</a></li>
            
    </nav>
</header>

<main>
    <div class="hero">
        <div class="hero-content">
            <h1>A Turma Surpresa Foi Campeã!</h1>
            <p>Não importa o resultado, o importante é a tua energia e diversão no campo!</p>
            <a href="registo.php" class="btn">Junta-te Agora</a>
        </div>
    </div>

    <div class="news-grid">
        <div class="news-card">
            <img src="logo_liga.png" alt="">
            <div class="news-content">
                <h3>Campeonato Incrível</h3>
                <p>Os jogos da semana vão surpreender todos os fãs da liga!</p>
            </div>
        </div>
        <div class="news-card">
            <img src="canelas.png" alt="">
            <div class="news-content">
                <h3>Destaques do torneio</h3>
                <p>As melhores equipas do torneio onde a união torna a vit´ria a ser mais fácil  </p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/400x180.png?text=Notícia+3" alt="">
            <div class="news-content">
                <h3>Jogadores em Destaque</h3>
                <p>Os melhores jogadores da semana e os seus feitos incríveis.</p>
            </div>
        </div>
    </div>
</main>
<button id="scrollTop" onclick="scrollToTop()">Topo</button>
<script>
    // Scroll top
    const scrollBtn = document.getElementById('scrollTop');
    window.onscroll = function() {
        if(window.scrollY > 300) scrollBtn.style.display = 'block';
        else scrollBtn.style.display = 'none';
    }
    function scrollToTop() { window.scrollTo({top:0, behavior:'smooth'}); }

    // Navbar linha animada
    const links = document.querySelectorAll('nav a');
    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
<section class="newsletter-banner">
  <div class="newsletter-left">
    <h2>NEWSLETTER</h2>
    <p>
      Subscreve a newsletter e recebes todas as notícias, entrevistas e muito mais!
    </p>
   <a href="registo.php" class="newsletter-btn">Inscrever-me</a>
  </div>
  <div class="newsletter-right">
    <img src="10c.png" alt="Banner">
  </div>
</section>
<footer>
   <footer>
    <div class="social-icons">
        <a href="#" class="twitch" title="Twitch">
            <i class="fa-brands fa-twitch"></i>
        </a>
        <a href="#" class="instagram" title="Instagram">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="youtube" title="YouTube">
            <i class="fa-brands fa-youtube"></i>
        </a>
    </div>

    <p style="margin-top:12px;">
        © 2026 Liga à La Tomeiz • Todos os direitos reservadosfgdgdgdf
    </p>
</footer>

</footer>

</html>
