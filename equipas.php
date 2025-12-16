<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Equipas - Liga à La Tomeiz</title>

<style>
body {
    margin: 0;
    font-family: 'Arial Black', sans-serif;
    background: url("10c.png") no-repeat center center/cover;
    background-color: #000;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 50px;
}

.overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.55);
    z-index: 1;
}

.container {
    position: relative;
    z-index: 2;
    display: flex;
    gap: 30px;
    max-width: 1000px;
    width: 95%;
    justify-content: center;
}

.year-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
    flex: 1;
}

.year-column h2 {
    color: #00ff40;
    text-align: center;
    margin-bottom: 10px;
    font-size: 24px;
}

.team-box {
    background: rgba(19,49,5,0.85);
    border: 3px solid #00ff40;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    color: #00ff40;
    cursor: pointer;
    transition: 0.3s;
}

.team-box:hover {
    background: #00ff4088;
    color: #000;
    transform: scale(1.05);
}

.team-box h3 {
    margin: 0;
    font-size: 20px;
}

.team-box p {
    margin-top: 5px;
    font-size: 14px;
}

/* RESPONSIVO */
@media (max-width: 900px) {
    .container {
        flex-direction: column;
        align-items: center;
    }
}
</style>
</head>
<body>

<div class="overlay"></div>

<div class="container">

<script>
const anos = [10,11,12];
const letras = ['A','B','C'];
const container = document.currentScript.parentNode;

anos.forEach(ano => {
    // Criar coluna para cada ano
    const col = document.createElement('div');
    col.className = 'year-column';
    col.innerHTML = `<h2>${ano}º Ano</h2>`;

    letras.forEach(letra => {
        const div = document.createElement('div');
        div.className = 'team-box';
        div.innerHTML = `<h3>${ano}º${letra}</h3><p>Clique para detalhes</p>`;
        div.onclick = ()=>alert(`Equipa ${ano}º${letra} - Detalhes do jogo`);
        col.appendChild(div);
    });

    container.appendChild(col);
});
</script>

</div>
</body>
</html>
