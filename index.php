<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Sjösektionen Chalmers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="tema.css" />
<style>
.logotyp{ 
	height:50vh;
	width:100%;
}
.meny{
	display: block;
	text-align:center;
	width: 50%;
	margin:auto;
}
.meny p {
	display: inline-block;
	padding: 1.61803%;
}
a{
	padding:1em;
}
.rad{
	display:inline-block;
}
.fot{
	text-align:center;
}

</Style>
</head>
<body>
<div class="context">
<img class="logotyp" src="./Sjosektionenlogo.svg" alt="Sjösectionen chalmesrs loga">

<br>

<div class="meny">
  <div class="rad">
<a href="./flaskpost/"><p>Flaskposten</p></a>
<a href="./foreningar/"><p>Föreningar</p></a>
  </div>
  <div class="rad">
<a href="./dokument/"><p>Dokument</p></a>
<a href="./nysida4"><p>Länkar</p></a>
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
