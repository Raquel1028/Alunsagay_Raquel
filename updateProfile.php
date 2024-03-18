<?php
require('db_Portfolio.php');
$recordId = $_POST['recordId'];
$name = $_POST['name'];
$address = $_POST['address'];
$zipCode = $_POST['zipCode'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fb = $_POST['fb'];
$linkedin = $_POST['linkedin'];
$homeDescription = $_POST['homeDescription'];
$aboutDescription = $_POST['aboutDescription'];
$footerDescription = $_POST['footerDescription'];
$skillSummary = $_POST['skillSummary'];

$profile = sprintf("UPDATE `profile` SET `name`='$name', `address`='$address', `zipCode`='$zipCode', `email`='$email', `phone`='$phone', `fb`='$fb', `linkedin`='$linkedin', `homeDescription`='$homeDescription', `aboutDescription`='$aboutDescription', `footerDescription`='$footerDescription', `skillSummary`='$skillSummary' WHERE `recordId`='$recordId'");
$output = mysqli_query($dbPortfolio, $profile);
if ($output) {
echo '<script type="text/javascript">
window.location.href = "contentManagementSystem.php";
</script>';
}
?>