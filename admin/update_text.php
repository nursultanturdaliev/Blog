<?php 
include('lock.php');
include('blocks/bd.php');
if(isset($_POST['title'])){$title = $_POST['title']; if($title == '') unset($title);}
if(isset($_POST['meta_d'])){$meta_d = $_POST['meta_d']; if($meta_d == '') unset($meta_d);}
if(isset($_POST['meta_k'])){$meta_k = $_POST['meta_k']; if($meta_k == '') unset($meta_k);}
if(isset($_POST['text'])){$text = $_POST['text']; if($text == '') unset($text);}
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
		  if(isset($title) && isset($meta_d) && isset($meta_k) &&
		  isset($text)){
			  $result = mysql_query("update settings
			  set title='$title', meta_d='$meta_d',meta_k='$meta_k',
			  text = '$text' where id = '$id'");
			  
			  if($result = 'true') {echo "<p>Your text has been successfully updated!</p>";}
			  else {echo "<p> An error occured while updating texts</p>";}
		  }
		  else {
			  echo "<p> You filled not all fields</p>";
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