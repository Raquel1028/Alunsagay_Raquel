<?php
require('db_Portfolio.php');
$recordId = $_REQUEST['recordId'];
$deleteSkill = sprintf("DELETE FROM `skills` WHERE `recordId`='$recordId'");
$deleteResult = mysqli_query($dbPortfolio, $deleteSkill);
if ($deleteResult) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>