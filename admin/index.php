<!DOCTYPE html>
<html>
   <head>
      <title>Админка</title><!-- Название на вкладке -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Обязательно должно присутствовать -->
      <link href="style.css" rel="stylesheet" type="text/css"><!-- Подключение к файлу сss -->
   </head>
   <body>
   <!-- Создается табличка с параметрами -->
<table width="690px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
<!-- Подключаем шапку сайта -->
<?php include("blocks/header.php");?>	

<!-- Подключаем левый блок сайта -->
<?php include ("blocks/lefttd.php");?>
		<td valign="top"></td>
		<tr>
         <td></td>
      </tr>
      <tr>
         <td></td>
      </tr>
<!-- Подключаем нижний графический елемент -->
<?php include("blocks/footer.php");?>	
</table>  
      
   </body>
</html>