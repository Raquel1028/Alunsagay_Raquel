<?php
require('db_Portfolio.php');
$recordId = $_POST['recordId'];
$workImage = $_POST['workImage'];
$workTitle = $_POST['workTitle'];
$workRole = $_POST['workRole'];
$workDescription = $_POST['workDescription'];
$workPublished = $_POST['workPublished'];
$query= sprintf("UPDATE `projects` SET `workImage`='$workImage', `workTitle`='$workTitle', `workRole`='$workRole', `workDescription`='$workDescription', `workPublished`='$workPublished' WHERE `recordId`='$recordId'");
$result = mysqli_query($dbPortfolio, $query);
if (!$result) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
else
{
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>