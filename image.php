<!DOCTYPE html> 
<html> 
<head> 
<title>Programming language</title> 
<link rel="stylesheet" type="text/css" href="homework1style.css"> 
</head> 
<body> 


<ul id="menu-bar"> 
<li class="active"><a href="#">Курикулум</a></li> 
<li><a href="#">Другое</a> </li> 
<li><a href="#">О нас</a></li> 
<li><a href="#">Контакты</a></li> 
</ul> 

<h1 style="margin-left: 10%;">Курикулум университета</h3> 

<div class="content-widget"> 
<?php 
// задаем путь до сканируемой папки с изображениями 
$dir = 'image'; 

// Cканируем содержимое директории 

$files = scandir($dir); 
/*scandir — Получает список файлов и каталогов, расположенных по указанному пути. 
Возвращает array, содержащий имена файлов и каталогов, расположенных по пути, переданном в параметре */ 
// если нет ошибок при сканировании 
if ($files !== false) { 
$count = 1; 
echo "<h3>1 Курс</h3>"; 
// Перебираем все файлы 
for ($i = 0; $i < count($files); $i++) { 
// Текущий каталог и родительский пропускаем 
if (($files[$i] != ".") && ($files[$i] != "..")){ 
// Получаем путь к картинке 
$path = $dir.$files[$i]; 
echo "<a href='$path'><img src='$path' alt='Imagine' /></a>"; 

if($i % 6 == 0){ 
$count++; 
echo "</div><div class=\"content-widget\"><h3>$count Курс</h3>"; 
} 
} 
} 
} 
?> 

</div> 


</body> 
</html>
