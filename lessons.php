<?php
	include('blocks/bd.php');
	$result = mysql_query("SELECT title, meta_d, meta_k, text from settings WHERE page='lessons'",$connect);
	$row = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $row['meta_d'];?>">
<meta name="keywords" content="<?php echo $row['meta_k'];?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $row['title'];?></title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" align="center" class="main_border">

<!--Подклюяаем шапку сайта-->
  <?php include("blocks/header.php"); ?>
  <tr>
    <td><table width="690" border="0">
      <tr>
      	<!--Подключаем левый меню сайта-->
        <?php include("blocks/lefttd.php"); ?>
        <th align="left" valign="top" scope="col">
        
		  <p>
		    <!-- Содержание страницы -->
		    <?php echo $row['text'];?>
	      </p>
          <?php 
	    $result = mysql_query('select id,title,description,date,author from lessons',$connect);
		$row = mysql_fetch_array($result);
		do {
          printf("<table align='center' class='lesson'>
          <tr><td class='lesson_title'>
		  <p class='lesson_name'><a href='view_lesson.php?id=%s'>%s</a></p> 
		  <p class='lesson_adds'>Дата добавления: %s</p>
		  <p class='lesson_adds'>Автор урока: %s</p>
		  </td></tr>
          <tr><td>%s</td></tr>
          </table>",$row['id'],$row['title'],$row['date'],$row['author'],$row['description']);
		}while($row = mysql_fetch_array($result));
		  ?>
		  </th>
      </tr>
    </table></td>
  </tr>
  
  <!--Подключаем нижний блок сайта.-->
<?php include("blocks/footer.php");?>
</table>
</body>
</html>