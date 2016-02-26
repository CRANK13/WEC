<?php
$db = mysql_connect("localhost","wec","12345");
if (isset($_POST['title']))       {$title = $_POST['title'];}
if (isset($_POST['meta_d']))      {$meta_d = $_POST['meta_d'];}
if (isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k'];}
if (isset($_POST['date']))        {$date = $_POST['date'];}
if (isset($_POST['description'])) {$description = $_POST['                                description'];}
if (isset($_POST['text']))        {$text = $_POST['text'];}
if (isset($_POST['author']))      {$author = $_POST['author'];}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Обработчик</title><!-- Название на вкладке -->
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
         <td>
            <?php
            if (isset($title) && isset($meta_d) && isset($meta_k)
               && isset($date) && isset($description) 
               && isset($text) && isset($author)) 
            {
               $result = mysql_query("INSERT INTO news (title,meta_d,
                  meta_k,date,description,text,author)
                  VALUES ('$title','$meta_d','$meta_k'
                  ,'$date','$description','$text','$author')");
               if ($result == 'true')
                  {print "<p>Новость добавлена!</p>";}
               else {print "<p>Новость не добавлена!</p>";}
            }
            ?>
         </td>
      </tr>
      <tr>
         <td></td>
      </tr>
<!-- Подключаем нижний графический елемент -->
<?php include("blocks/footer.php");?>	
</table>  
      
   </body>
</html>