<?php include('lock.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<title>Main page of Administrator</title>

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
        Admin's page.
        </th>
      </tr>
    </table></td>
  </tr>
  
  <!--Подключаем нижний блок сайта.-->
<?php include("blocks/footer.php");?>
</table>
</body>
</html>