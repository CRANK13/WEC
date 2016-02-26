<!DOCTYPE html>
<html>
   <head>
      <title>Добавление новости</title><!-- Название на вкладке -->
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
            <form name="form1" method="post" action="add_news.php">
      <p>
         <label>Введите название новости<br>
         <input type="text" name="title" id="title">
         </label>
      </p>
      <p>
         <label>Введите ключевые слова новости<br>
         <input type="text" name="meta_k" id="meta_k">   
         </label>
      </p>
      <p>
         <label>Введите дату добавления новости<br>
         <input name="date" type="text" id="date" value="2016-02-26">
         </label>
      </p>
      <p>
         <label>Введите краткое описание новости с тэгами
         <textarea name="description" id="description" cols="60"
         rows="5"></textarea>   
         </label>
      </p>
      <p>
         <label>Введите полный текст новости с тэгами
         <textarea name="text" id="text" cols="60" rows="20">
         </textarea>   
         </label>
      </p>
      <p>
         <label>Введите автора новости<br>
         <input type="text" name="author" id="author">   
         </label>
      </p>
      <p>
         <label>
            <input type="submit" name="submit" id="submit"
            value="Занести новость в базу">
         </label>
      </p>
      </form>
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