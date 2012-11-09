<?php 
include('lock.php');
include('blocks/bd.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<title>Delete lesson</title>
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
          <p><strong>Choose a lesson to delete</strong></p>
          <form method="post" action="drop_lesson.php">
          <?php 
		  
			  $result = mysql_query('select title,id from lessons');
			  $row = mysql_fetch_array($result);
			  do
			  {
				  $id = $row['id'];
				  $title = $row['title'];
				  echo "<p><input name='id' type='radio' value='$id'><label>$title</label></p>";
			  }while($row = mysql_fetch_array($result));
			  
		  ?>
          <p><input name="delete" type="submit" value="Delete"></p>
          </form>
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