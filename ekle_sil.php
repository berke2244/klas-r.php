<html>
<head>
</head>
<body>
	<?php
function klasor_ekle($klasor_adi){ 
if(!is_dir($klasor_adi)){ 
@mkdir($klasor_adi);
echo "Klasör eklendi.<br>";
}
}
function klasor_sil($klasor_adi){
 if(is_dir($klasor_adi)){ // Klasör ise
rmdir($klasor_adi);
echo "Klasör silindi.<br>";
}
}
?>
</body>
</html>