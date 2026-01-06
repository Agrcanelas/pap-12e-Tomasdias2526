<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jogadores - Liga à La Tomeiz</title>

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
    max-width: 1200px;
    width: 95%;
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
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
.player-card, .coach-card {
    background: rgba(19,49,5,0.85);
    border: 3px solid #00ff40;
    border-radius: 15px;
    padding: 15px;
    text-align: center;
    color: #00ff40;
    cursor: pointer;
    transition: 0.3s;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.player-card:hover, .coach-card:hover {
    background: #00ff4088;
    color: #000;
    transform: scale(1.05);
}

.player-card h3, .coach-card h3 {
    margin: 5px 0;
    font-size: 18px;
}

.player-card p, .coach-card p {
    margin: 0;
    font-size: 14px;
}
.team-players {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 20px;
}
@media (max-width: 900px) {
    .container {
        flex-direction: column;
        align-items: center;
    }
    .team-players {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 600px) {
    .team-players {
        grid-template-columns: 1fr;
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
    const col = document.createElement('div');
    col.className = 'year-column';
    col.innerHTML = `<h2>${ano}º Ano</h2>`;

    letras.forEach(letra => {
        const teamDiv = document.createElement('div');
        teamDiv.className = 'team-section';
        
        const title = document.createElement('h3');
        title.style.color = '#00ff40';
        title.style.textAlign = 'center';
        title.innerText = `${ano}º${letra}`;
        teamDiv.appendChild(title);

        const coach = document.createElement('div');
        coach.className = 'coach-card';
        coach.innerHTML = `<h3>Treinador</h3><p>--</p>`;
        teamDiv.appendChild(coach);

        const playersGrid = document.createElement('div');
        playersGrid.className = 'team-players';

        for(let i=1;i<=6  ;i++){
            const player = document.createElement('div');
            player.className = 'player-card';
            player.innerHTML = `<h3>Jogador ${i}</p>`;
            playersGrid.appendChild(player);
        }

        teamDiv.appendChild(playersGrid);
        col.appendChild(teamDiv);
    });

    container.appendChild(col);
</script>
</div>
</body>
</html>
