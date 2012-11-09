<?php 
include('lock.php');
include('blocks/bd.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<title>Edit lesson</title>
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
          <p>&nbsp;</p>
          <?php 
		  
		  if(!isset($_GET['id']))
		  {
			  $result = mysql_query('select title,id from lessons');
			  $row = mysql_fetch_array($result);
			  do
			  {
				  $id = $row['id'];
				  $title = $row['title'];
				  echo "<p><a href='edit_lesson.php?id=$id'>$title</a></p>";
			  }while($row = mysql_fetch_array($result));
		  }
		  else
		  {
			  $id = $_GET['id'];
$result = mysql_query("select * from lessons where id=$id");
$row = mysql_fetch_array($result);			  
print<<<_END

			  <form name="form1" method="post" action="update_lesson.php">
              <p align="left">
                <label for="title">Enter the name of an article</label>
                <br>
                <input type="text" name="title" id="title" value="$row[title]">
                <br>
              </p>
              <p align="left">
                <label for="meta_d">Enter short description of a lesson<br>
                </label>
                <input type="text" name="meta_d" id="meta_d" value="$row[meta_d]">
              </p>
              <p align="left">
                <label for="meta_k">Enter keywords</label>
                <br>
                <input type="text" name="meta_k" id="meta_k" value="$row[title]">
              </p>
              <p align="left">
                <label for="date">Enter todays date</label>
                <br>
                <input name="date" type="text" id="date" value="$row[date]">
              </p>
              <p align="left">
                <label for="description">Enter short description of a lesson with tags</label>
                <textarea name="description" id="description" cols="40" rows="5" >$row[description]
				</textarea>
              </p>
              <p align="left">
                <label for="text">Enter full text with tags</label>
                <br>
                <textarea name="text" id="text" cols="40" rows="20">$row[text]</textarea>
              </p>
              <p align="left">
                <label for="author">Enter author of a lesson</label>
                <br>
                <input type="text" name="author" id="author" value = "$row[author]">
              </p>
			  <input name="id" type="hidden" value="$id">
              <p align="left">
                <input type="submit" name="button" id="button" value="Apply edited lesson">
              </p>
            </form>
_END;
		  }
		  ?>
          
          </th>
        </tr>
        <tr>
          <th align="center" valign="top" class="left" scope="col">&nbsp;</th>
          <th align="left" valign="top" scope="col">&nbsp;</th>
        </tr>
      </table></td>
  </tr>
  
  <!--Подключаем нижний блок сайта.-->
  <?php include("blocks/footer.php");?>
</table>
</body>
</html>