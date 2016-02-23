<?php
$db = mysql_connect("localhost","wec","12345");
mysql_select_db("wec.loc",$db);/*Соединяемся с базой*/
$result = mysql_query("SELECT title, meta_d, meta_k, text FROM settings WHERE page='news'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Новости</title><!-- Название на вкладке -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Обязательно должно присутствовать -->
      <link href="style.css" rel="stylesheet" type="text/css"><!-- Подключение к файлу сss -->
      <meta name="description" content="<?php print $myrow ['meta_d']; ?>">
      <meta name="keywords" content="<?php print $myrow ['meta_k']; ?>">
   </head>
   <body>
   <!-- Создается табличка с параметрами -->
<table width="690px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
<!-- Подключаем шапку сайта -->
<?php include("blocks/header.php");?>

<!-- Подключаем левый блок сайта -->
<?php include ("blocks/lefttd.php");?>			
		<td valign="top"><p><?php print $myrow['text'];?></p></td>
      <tr>
         <td>1</td>
      </tr>
      <tr>
         <td>2</td>
      </tr>     
<!-- Подключаем нижний графический елемент -->
<?php include("blocks/footer.php");?>
</table>  
      
   </body>
</html>