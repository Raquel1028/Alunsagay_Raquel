<?php
require('db_Portfolio.php');
$recordId = $_POST['recordId'];
$workTitle = $_POST['workTitle'];
$workImage = $_POST['workImage'];
$workRole = $_POST['workRole'];
$workDescription = $_POST['workDescription'];
$workPublished = $_POST['workPublished'];
$addProject= sprintf("INSERT INTO `projects`(`recordId`, `workTitle`, `workImage`, `workRole`, `workDescription`, `workPublished`) VALUES ('$recordId','$workTitle','$workImage','$workRole','$workDescription','$workPublished')");
$addResult = mysqli_query($dbPortfolio, $addProject);
if ($addResult) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>