<?php
	include('blocks/bd.php');
	if(isset($_GET['id'])){$id = $_GET['id'];}
	$result = mysql_query("SELECT * from lessons WHERE id='$id'",$connect);
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
        <p class="view_title"><?php echo $row['title'];?></p>
        <p class="view_date"><?php echo $row['date'];?></p>
        <p class="view_date"><?php echo $row['author'];?></p>
		  <p>
		    <!-- Содержание страницы -->
		    <?php echo $row['text'];?>
	      </p>
		  </th>
      </tr>
    </table></td>
  </tr>
  
  <!--Подключаем нижний блок сайта.-->
<?php include("blocks/footer.php");?>
</table>
</body>
</html>