<?php 
include('lock.php');
include('blocks/bd.php');
if(isset($_POST['title'])){$title = $_POST['title']; if($title == '') unset($title);}
if(isset($_POST['meta_d'])){$meta_d = $_POST['meta_d']; if($meta_d == '') unset($meta_d);}
if(isset($_POST['meta_k'])){$meta_k = $_POST['meta_k']; if($meta_k == '') unset($meta_k);}
if(isset($_POST['description'])){$description= $_POST['description']; if($description == '') unset($description);}
if(isset($_POST['text'])){$text = $_POST['text']; if($text == '') unset($text);}
if(isset($_POST['author'])){$author = $_POST['author']; if($author == '') unset($author);}
if(isset($_POST['date'])){$date = $_POST['date'];if($date == '') unset($date);}
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
		  if(isset($title) && isset($meta_d) && isset($meta_k) && isset($description) &&
		  isset($text) && isset($author) && isset($date)){
			  $result = mysql_query("insert into lessons(title,meta_d,meta_k,description,date,text,author)
			  values('$title','$meta_d','$meta_k','$description','$date','$text','$author')");
			  
			  if($result = 'true') {echo "<p>Your lesson has been added</p>";}
			  else {echo "<p> An error occured while adding to lessons</p>";}
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