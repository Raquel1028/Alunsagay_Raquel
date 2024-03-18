<?php
require('db_Portfolio.php');
$recordId = $_POST['recordId'];
$skillName = $_POST['skillName'];
$skillIcon = $_POST['skillIcon'];
$skillDescription = $_POST['skillDescription'];
$updateSkill = sprintf("UPDATE `skills` SET `skillName`='$skillName',`skillIcon`='$skillIcon',`skillDescription`='$skillDescription' WHERE `recordId`='$recordId'");
$updateResult = mysqli_query($dbPortfolio, $updateSkill);
if ($updateResult) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>