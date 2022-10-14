<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Sjösektionen Chalmers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    hight: 10em;
    position: relative;
    font-size:1.6em;
}


.context{ 
	background-color: #003374;
	color:#ffffff;
	display:grid;
	grid-template-columns: 25% 25% 25% 25%;
}


@media (max-width: 1300px){
.context{  grid-template-columns: 33.33% 33.33% 33.33%;}
}
@media (max-width: 1000px){
.context{  grid-template-columns: 50% 50%;}
}
@media (max-width: 700px){
.context{  grid-template-columns: 100%;}
}



.forening{
    padding:1.61803em;
}

.namn{
    text-align:center;
}
.loga{
width:100%;
background-image: url(Sjosektionenlogo.svg);
background-size: contain;
background-repeat: no-repeat;
background-position:center;
}


</style>
</head>
<body>
<a href=".."><p style="margin-bottom: 0;width: 100%;">⇐ Tillbaka</p></a>
<div class="context">
  <?PHP
   foreach(scandir("./forening") as $fil){
   if($fil != "." && $fil != ".." && $fil != "index.php"){
   

   echo "<div class='forening'> <img class='loga' src='./forening/".rawurlencode($fil)."/bild.jpg' onerror=this.src='Sjosektionenlogo.svg';> <h2 class='namn'>".$fil."</h2> </div>";

}}
?>


</div>

</body></html>
