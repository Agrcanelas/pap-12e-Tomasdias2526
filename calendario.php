<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendário - Liga à La Tomeiz</title>
<style>
body {
    margin: 0;
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
    background: rgba(0,0,0,0.55);
    z-index: 1;
}

.calendar-container {
    position: relative;
    z-index: 2;
    background: rgba(19,49,5,0.85);
    border: 3px solid #00ff40;
    border-radius: 15px;
    padding: 20px;
    width: 400px;
    color: #00ff40;
    text-align: center;
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.calendar-header button {
    background: #00ff40;
    color: #000;
    border: none;
    border-radius: 8px;
    padding: 10px 10px;
    cursor: pointer;
    font-weight: bold;
}

.calendar-header h2 {
    margin: 0;
    font-size: 20px;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 25px;
}

.calendar-grid div {
    padding: 10px 0;
    border-radius: 5px;
    cursor: pointer;
}

.calendar-grid div:hover {
    background: #00ff4088;
    color: #000;
}

.day-header {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 12px;
}
</style>
</head>
<body>

<div class="overlay"></div>

<div class="calendar-container">
    <div class="calendar-header">
        <button onclick="prevMonth()">&#8592;</button>
        <h2 id="monthYear"></h2>
        <button onclick="nextMonth()">&#8594;</button>
    </div>
    <div class="calendar-grid" id="calendar">
        <!-- Dias serão inseridos pelo JS -->
    </div>
</div>

<script>
const months = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho",
                "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
const days = ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"];

let date = new Date();
let currentMonth = date.getMonth();
let currentYear = date.getFullYear();

function renderCalendar(month=currentMonth, year=currentYear){
    const calendar = document.getElementById('calendar');
    calendar.innerHTML = '';

    // Cabeçalho dias da semana
    days.forEach(d=>{
        const dayDiv = document.createElement('div');
        dayDiv.innerText = d;
        dayDiv.classList.add('day-header');
        calendar.appendChild(dayDiv);
    });

    const firstDay = new Date(year, month, 1).getDay();
    const totalDays = new Date(year, month+1,0).getDate();

    // Espaços em branco antes do 1º dia
    for(let i=0;i<firstDay;i++){
        const empty = document.createElement('div');
        calendar.appendChild(empty);
    }

    // Dias
    for(let d=1;d<=totalDays;d++){
        const dayDiv = document.createElement('div');
        dayDiv.innerText = d;
        dayDiv.onclick = ()=>alert("Dia: "+d+"/"+(month+1)+"/"+year);
        calendar.appendChild(dayDiv);
    }

    document.getElementById('monthYear').innerText = months[month] + " " + year;
}

function prevMonth(){
    currentMonth--;
    if(currentMonth<0){
        currentMonth=11;
        currentYear--;
    }
    renderCalendar(currentMonth,currentYear);
}

function nextMonth(){
    currentMonth++;
    if(currentMonth>11){
        currentMonth=0;
        currentYear++;
    }
    renderCalendar(currentMonth,currentYear);
}

renderCalendar();
</script>

</body>
</html>
