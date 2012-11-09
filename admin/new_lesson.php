<?php include('lock.php'); ?>
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
          <th valign="top" scope="col"><form name="form1" method="post" action="add_lesson.php">
              <p align="left">
                <label for="title">Enter the name of an article</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
              </p>
              <p align="left">
                <label for="meta_d">Enter short description of a lesson<br>
                </label>
                <input type="text" name="meta_d" id="meta_d">
              </p>
              <p align="left">
                <label for="meta_k">Enter keywords</label>
                <br>
                <input type="text" name="meta_k" id="meta_k">
              </p>
              <p align="left">
                <label for="date">Enter today's date</label>
                <br>
                <input name="date" type="text" id="date" value="2012-09-18">
              </p>
              <p align="left">
                <label for="description">Enter short description of a lesson with tags</label>
                <textarea name="description" id="description" cols="40" rows="5"></textarea>
              </p>
              <p align="left">
                <label for="text">Enter full text with tags</label>
                <br>
                <textarea name="text" id="text" cols="40" rows="20"></textarea>
              </p>
              <p align="left">
                <label for="author">Enter author of a lesson</label>
                <br>
                <input type="text" name="author" id="author">
              </p>
              <p align="left">
                <input type="submit" name="button" id="button" value="Add lesson to database">
              </p>
            </form>
          </th>
        </tr>
      </table></td>
  </tr>
  
  <!--Подключаем нижний блок сайта.-->
  <?php include("blocks/footer.php");?>
</table>
</body>
</html>