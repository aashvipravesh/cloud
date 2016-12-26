<?php
 // establish the database connection
  
 require_once('config.php');
 
 if (!empty($_GET["delete"]) && $_GET["delete"]>0) {
    $mysqli->query("DELETE FROM businesses where business_id=".$_GET["delete"]); 
 }

 $result = $mysqli->query("SELECT * 
    FROM businesses");

?>

<!DOCTYPE html>
<html>
<head>
<title>A Sample Application</title>
</head>
<body>
<h1>Businesses</h1>
  
<table style="width:600px;" border="1" cellpadding="2px">
<tr>
  <td valign="top"><b>Business ID</b></td>
  <td valign="top"><b>Business Name</b></td>
  <td valign="top"><b>Business City</b></td>
  <td valign="top"><b>Action</b></td>
</tr>
<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
<tr>
  <td valign="top"><?= $row["business_id"] ?></td>
  <td valign="top"><?= $row["name"] ?></td>
  <td valign="top"><?= $row["city"] ?></td>
  <td valign="top"><a href="./?delete=<?= $row["business_id"] ?>">delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
