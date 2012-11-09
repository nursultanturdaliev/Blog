<?php 
include('lock.php');
include('blocks/bd.php');
if(isset($_POST['id'])){$id = $_POST['id'];}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<title>Add new lesson</title>
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
          <th valign="top" scope="col">
          
          <?php 
		  if(isset($id)){
			  $result = mysql_query(" delete from lessons where id = '$id'");
			  
			  if($result = 'true') {echo "<p>Choosen lesson: $title has successfully been deleted!</p>";}
			  else {echo "<p> An error occured while deleting $title</p>";}
		  }
		  else {
			  echo "<p> You first have to choose a lesson to delete.</p>";
		  }
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