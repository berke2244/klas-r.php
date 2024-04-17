<html>
<head>
</head>
<body>
	<?php
function klasor_listele($konum){
$klasor = opendir($konum);
echo "<b>Klasörler Listeleniyor...</b><br>";
while($dosya = readdir($klasor)){
 if (!is_dir($dosya)){ 
 echo $dosya.'<br>'; 
 }
 }
}
?>
</body>
</html>