<!DOCTYPE html>
<html>
<head>
<title>Calcolo stipendi Loiacono Tamma</title>
</head>
<body>
<link rel="stylesheet" href="style.css">    
            <div class="sfondo">
            <div class="rettangolo">
    </div>
        <span class="titolo">Quanto sarai povero?</span>
            <div class="box1">
            <div class="spazi">
    </div>
        <span class="obbligatorio">Campo obbligatorio</span>
        <span>G
        <span class="duratagiorni"><input type="number" value="Quanti giorni durerà il lavoro"></span>
    </div>
            <div class="box2"><div class="spazi">
    </div>
        <span class="obbligatorio">Campo obbligatorio</span>
        <span>Ore giornaliere di lavoro</span>
        <span class="orelavoro"><input type="number" value="Quanto lavori al giorno?"></span>
    </div>
            <div class="box3"><div class="spazi">
    </div>
        <span class="obbligatorio">Campo obbligatorio</span>
        <span>Compenso orario</span>
        <span class="compenso"><input type="number" value="Quanto verrai pagato all'ora?"></span>
    </div>
            <div class="calcola">
            </div>
            <input type="button" value="CALCOLA" class="calcola">
        <span class="risultato">Guadagnerai 300€ lavorando 3 giorni al compenso di 30€/h</span>
    </div>
</body>
</html> 
    
<br/><br/> iorni</span>

<?php
if (isset($_GET[“calcola”]))
{
   $giorni = $_GET[“giorni”];
   $ore_giornaliere = $_GET[“ore_giornaliere”];
   $compenso_orario = $_GET[“compenso_orario”];

    $guadagno = $giorni*$ore_giornaliere*$compenso_orario;

    if ($ore_giornaliere == 0 | | $compenso_orario == 0)
    {
      echo “<script> alert (‘Attenzione, inserire un numero maggiore di 0!’); </script>”;
    }

    else
    {
      echo “Guadagnerai $guadagno€ lavorando $giorni giorni al compenso di $compenso_orario€/h”;
    }
}
?>