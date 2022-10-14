<html>
<head>
<meta charset="UTF-8">
<title>samkdt.se</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
:root {
--storlek: 42.069px;
}
#wrap {
  text-align: center;
}
.icon{
height:calc( var(--storlek) - 5px );
}
.namn{
font-size:var(--storlek);
display:inline;
margin-left:1.61803%;
}
</style>
</head>
<body>
<div id="wrap">
<?PHP
$exc = array_merge(explode("\n", file_get_contents('excludera.txt')),array(".","..","index.php",));
foreach(scandir(".") as $fil){
$icon="fil";
if(in_array($fil,$exc)==false){
if(is_dir($fil)){$icon="mapp";}
echo "<a href=".rawurlencode($fil)."> <img class='icon' src=iconer/".$icon.".svg> <p class='namn'>".$fil."</p></a><br>";
}}
?>
</div>
</body>
</html>
