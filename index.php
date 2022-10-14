<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Sjösektionen Chalmers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    position: relative;
    color: white;
}

.logotyp{
    background: #003374;
    height:50vh;
    width:100%;

}

.context{ 
    background-color: #003374;
    font-size:25px;
    padding:2%;
    min-height:90vh;
}

.meny{
    display: block;
    text-align:center;
    margin: 0 auto;
    width: 50%;
}

.meny p{
 display: inline-block;
 text-align: center;
 border-color: #FFF0;
 border-style: solid;
 padding: 1.61803%;
}

.meny a{
    color:white;
    padding:1em;
}

.meny p:hover{
    border-color: #FFFF;
}
.rad{
    display:inline-block;
}
.fot p{
margin: 0 auto;
width: 50%;
font-size: 20;
text-align: center;
}

</style>
</head>
<body>
<div class="context">
<img class="logotyp" src="./Sjosektionenlogo.svg" alt="Sjösectionen chalmesrs loga">
<p> <p>
<div class="meny">

  <div class="rad">
<p><a href="./flaskpost/">Flaskposten äta bajs är inte helt fel</a></p>
<p><a href="./foreningar/">Föreningar</a></p>
  </div>
  <div class="rad">
<p><a href="./dokument/">Dokument</a></p>
<p><a href="./nysida4.html">Länkar</a></p>
  </div>
  
</div>

<br>

<div class="fot">
<?PHP
echo "<p>".file_get_contents("MOTD.txt")."</p>";
?>
</div>


</div>



</body></html>
