<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js"></script>
<script src="script.js"></script>
<link href="style.css" rel="stylesheet" /> 
<title>Affichage code et liens</title>
</head>

<body>
<div id="curlstyle">
<?php

$site=$_GET["txtsite"];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $site);
$result = curl_exec($curl);
curl_close($curl);
?>
</div>
<div id="txtstyle">
 <label id="txtaffichage" >Phase d'affichage des liens</label>

<input type="button" value="afficher les liens" onclick="affich_href()" /> 
</div>
<div id="liens">
</div>
</body>

</html>