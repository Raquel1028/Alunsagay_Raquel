<?php
require('db_Portfolio.php');
$recordId = $_REQUEST['recordId'];
$deleteProject= sprintf("DELETE FROM `projects` WHERE `recordId`='$recordId'");
$deleteResult = mysqli_query($dbPortfolio, $deleteProject);
if ($deleteResult) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>