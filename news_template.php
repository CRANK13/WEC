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
	<tr>
<!-- Подключаем левый блок сайта -->
<?php include ("blocks/lefttd.php");?>			
		<td valign="top"><p>Заводская команда Astron Martin сообщила о заключении нового контракта с шинной компанией Dunlop на сезон-2016, прекратив долговременное сотрудничество с Michelin, а также подписала соглашение с топливной компанией Total.</p>

<!-- Подключение картринки, к новости. -->
<p align="center"><img src="news/23022016/Asron Martin/1.gif" width="452" height="148"></p>

<p>Решение о смене производителя резины было принято после проведения зимних тестов, на которых Astron Martin использовала шины Dunlop.</p>

<p>Подписание нового контракта связано также с заявкой команды на выступление в марафоне "24 часа Нюрбургринга" с двумя экипажами на автомобилях V12.</p>

<p align="center"><img src="news/23022016/Asron Martin/2.gif" width="313" height="154"></p>

<p>Также в команде Aston Martin было объявлено о разрыве контракта с Gulf Oil и последующем подписании соглашения с французской компанией Total.</p>

<p align="center"><img src="news/23022016/Asron Martin/3.gif" width="275" height="182"></p>

<p>В основном классе GTE Pro выступят два экипажа вместо трех.</p>

<p>В машине под номером 95 поедут Даррен Тёрнер, Ники Тим и Марко Соренсен.</p>

<p>Ричи Стэнэвей, Фернандо Рис и Джонни Адам будут представлять автомобиль под номером 97.</p>

<p align="center"><img src="news/23022016/Asron Martin/4.gif" width="400" height="119"></p>

<p>В любительском классе GTE Am Aston Martin будет представлена Педро Лами, Полом Далла Ланой и Маттиасом Лаудой.</p>

<p>На Нюрбургринге поедут два экипажа: Лами присоединится к Тёрнеру, Тиму и Соренсену, а Лауда - к Стэнэвэю, Рису и Адаму.</p>

<p align="center"><img src="news/23022016/Asron Martin/5.gif" width="312" height="98"></p>

</td>
	</tr>
<!-- Подключаем нижний графический елемент -->
<?php include("blocks/footer.php");?>
</table>  
      
   </body>
</html>