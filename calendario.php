<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendário - Liga à La Tomeiz</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="overlay"></div>

<div class="calendar-container">
    <div class="calendar-header">
        <button onclick="prevMonth()">&#8592;</button>
        <h2 id="monthYear"></h2>
        <button onclick="nextMonth()">&#8594;</button>
    </div>
    <div class="calendar-grid" id="calendar"></div>
</div>

<script src="script.js"></script>
</body>
</html>
