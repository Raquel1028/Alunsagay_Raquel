<?php
require('db_Portfolio.php');
$recordId = $_POST['recordId'];
$skillName = $_POST['skillName'];
$skillIcon = $_POST['skillIcon'];
$skillDescription = $_POST['skillDescription'];
$addSkill = sprintf("INSERT INTO `skills`(`recordId`, `skillName`, `skillIcon`, `skillDescription`) VALUES ('$recordId','$skillName','$skillIcon','$skillDescription')");
$addResult = mysqli_query($dbPortfolio, $addSkill);
if ($addResult) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>