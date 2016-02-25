<?php
$db = mysql_connect("localhost","wec","12345");
mysql_select_db("wec.loc",$db);/*Соединяемся с базой*/

if (isset($_GET['id'])) {$id = $_GET['id'];}

$result = mysql_query("SELECT * FROM articles WHERE id='$id'",$db);
$myrow = mysql_fetch_array($result);/*Как массив вытащили*/
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Статьи</title><!-- Название на вкладке -->
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
		<td valign="top" class="news">
      <p class="view_title"><?php print $myrow['title'];?></p>
      <p class="view_date">Дата добавления: <?php print $myrow['date'];?></p>
      <p class="view_date">Автор: <?php print $myrow['author'];?></p>
      <p class="view_date"><?php print $myrow['text'];?></p>
      </td>
           
<!-- Подключаем нижний графический елемент -->
<?php include("blocks/footer_views_news.php");?>
</table>  
      
   </body>
</html>