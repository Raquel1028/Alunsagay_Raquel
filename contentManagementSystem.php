<?php
require('db_Portfolio.php');
session_start();
if(time()-$_SESSION["login_time_stamp"] >7200) 
    {
        session_unset();
        session_destroy();
        header("Location:index.php");
    }
else  
{  
    $_SESSION['last_login_timestamp'] = time();
    $sessionID = $_SESSION['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?php           
        $getName = "Select name from profile where recordId='1';";
        $runQuery = mysqli_query($dbPortfolio, $getName);
        $record = mysqli_num_rows($runQuery);
        if ($record > 0) {
            $result = mysqli_fetch_assoc($runQuery);
            $name = $result['name'];
            ?>
            <?php echo $name;?>
            <?php
        }?>
    </title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
        h1,
        h2,
        h3,
        h4
         {
            font-family: 'Tilt Warp', cursive;
        }
        a,
        p,
        small,
        strong,
        span,
        h5,
        h6 {
            font-family: 'Lato', sans-serif;
        }
        .primary-bg-light {
            background: #DEEBED;
        }
        
        .btn-primary {
            background: #477A85;
            border: none;
        }
        
        .primary {
            color: #477A85;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg mb-lg-5 fixed-top navbar-light shadow-sm" style="background: #F8FBFB;">
            <div class="container">
                <a href="index.php" class="navbar-brand p-0">
                    <h4 class="m-0 fw-bold">
                        Content Management System
                    </h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header">
                    <div class="navbar-nav ml-auto py-0 gap-3">
                        <a href="logout.php" class="btn btn-outline-secondary py-2 px-4 fw-bold">
                            Logout
                        </a>

                        <a href="index.php" class="btn btn-primary py-2 px-4 fw-bold">
                            Visit portfolio
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container-fluid p-lg-5 py-5 p-3 bg-white">
        <section class="container py-lg-5 py-4 my-lg-0 my-4">
            <div class="row">
                <div class="col-12 my-4 mx-auto text-left">
                    <div class="bg-white p-4 rounded-3 border border-light mb-5">
                        <strong>
                            Profile and portfolio information
                        </strong>
                        <form action="updateProfile.php" class="d-flex flex-column w-100 d-flex flex-lg-row flex-md-row flex-sm-row mt-lg-4 mt-3 gap-3" method="post">
                            <?php
                            $getProfile = "Select * from profile where recordId='1';";
                            $getResult = mysqli_query($dbPortfolio, $getProfile);
                            $countResult = mysqli_num_rows($getResult);
                            if ($countResult > 0) {
                                while ($row = mysqli_fetch_assoc($getResult)) {
                                    $recordId = $row['recordId'];
                                    $name = $row['name'];
                                    $profilePhoto = $row['profilePhoto'];
                                    $address = $row['address'];
                                    $zipCode = $row['zipCode'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $fb = $row['fb'];
                                    $linkedin = $row['linkedin'];
                                    $homeDescription = $row['homeDescription'];
                                    $aboutDescription = $row['aboutDescription'];
                                    $footerDescription = $row['footerDescription'];
                                    $skillSummary = $row['skillSummary'];
                                    ?>
                                    <div class="col col-md-6 col-sm-6 col-12 p-0">
                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Full Name
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="name" placeholder="Full name" value="<?php echo $row['name'];?>" required>
                                        </div>
                                        
                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Address
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="address" placeholder="Residential address" value="<?php echo $row['address'];?>" required>
                                        </div>
                                        
                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 mb-lg-0 text-left">
                                                Zip code
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="zipCode" placeholder="Zip code" value="<?php echo $row['zipCode'];?>" required>
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 mb-lg-0 text-left">
                                                Linkedin account link
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="linkedin" placeholder="Enter your linkedin profilelink" value="<?php echo $row['linkedin'];?>">
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 mb-lg-0 text-left">
                                                Introduction
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="homeDescription" placeholder="Enter your linkedin profilelink" value="<?php echo $row['homeDescription'];?>">
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 mb-lg-0 text-left">
                                                About me
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="aboutDescription" placeholder="Enter your career objectives and summary" value="<?php echo $row['aboutDescription'];?>">
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 mb-lg-0 text-left">
                                                Skills section summary
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="skillSummary" placeholder="Enter your career objectives and summary" value="<?php echo $row['skillSummary'];?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col col-md-6 col-sm-6 col-12 p-0">
                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Phone number
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="phone" placeholder="Phone number" value="<?php echo $row['phone'];?>" required>
                                        </div>
                                        
                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Email address
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="email" placeholder="Email address" value="<?php echo $row['email'];?>" required>
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Facebook account link
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="fb" placeholder="Enter your fb link" value="<?php echo $row['fb'];?>">
                                        </div>

                                        <div class="d-flex flex-column w-100">
                                            <small class="text-dark mb-2 text-left">
                                                Footer description
                                            </small>
                                            <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" name="footerDescription" placeholder="Enter your description" value="<?php echo $row['footerDescription'];?>">
                                        </div>
                                        
                                        <div class="d-flex flex-row w-100">
                                            <input type="text" class="d-none" name="recordId" value="<?php echo $row['recordId'];?>">
                                            <div class="col col-12 d-flex flex-lg-row flex-column gap-lg-2 justify-content-lg-start m-0 mt-3 p-0">
                                                <input input type="submit" name="submit" class="btn btn-primary py-2 px-4 fw-bold" value="Save changes">
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }?>
                        </form>
                    </div>
                    
                    <div class="bg-white p-4 rounded-3 border border-light mb-5">
                        <strong>
                            Profile photo
                        </strong>
                        <div class="row g-3 mb-3 mt-lg-3">
                            <?php
                            $getProfile = "Select * from profile where recordId='1';";
                            $getResult = mysqli_query($dbPortfolio, $getProfile);
                            $countResult = mysqli_num_rows($getResult);
                            if ($countResult > 0) {
                                while ($row = mysqli_fetch_assoc($getResult)) {
                                    $recordId = $row['recordId'];
                                    $profilePhoto = $row['profilePhoto'];
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-4">
                                        <div class="rounded-4 bg-white border">
                                            <img src="<?php echo $row['profilePhoto'];?>" class="d-block mx-auto img-fluid mb-lg-0 mb-3 border border-light" alt="Bootstrap Themes" width="700" height="500">
                                            <div class="py-2 px-2">
                                                <div class="d-flex flex-row justify-content-between">
                                                <div class=" col col-12 d-flex flex-lg-row flex-column justify-content-end m-0 p-0 ">
                                                        <button class="d-flex justify-content-center btn px-2 py-2 btn-outline-secondary w-auto rounded-3 fw-semibold align-items-center shadow-sm border-0" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                            </svg>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end p-3 border-0 shadow">
                                                            <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#profilePhoto<?php echo $recordId;?>">
                                                                Upload image
                                                            </a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="profilePhoto<?php echo $recordId;?>" aria-hidden="true" aria-labelledby="profilePhoto<?php echo $recordId;?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="modal-content rounded-3">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">
                                                            Upload your profile photo
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body py-0">
                                                        <label for="image1" class="border mt-3 rounded-2 p-5 w-100 text-center"
                                                            style="cursor: pointer;">
                                                            Select an image here&nbsp;
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload text-secondary" viewBox="0 0 16 16">
                                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                            </svg>
                                                            <input id="image1" name="profilePhoto" style="display: none;" type="file" accept="image/png, image/jpg, image/svg, image/jpeg" required>
                                                        </label>
                                                        <input type="text" name="recordId" value="<?php echo $recordId;?>" class="d-none" required>
                                                    </div>
                                                    <div class="modal-footer flex-column border-top-0">
                                                        <button type="submit" name="uploadprofilePhoto" class="btn btn-sm btn-primary w-100 mx-0">
                                                            Upload photo
                                                        </button>
                                
                                                        <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php
                                                require('db_Portfolio.php');
                                                if(isset($_POST['uploadprofilePhoto'])){
                                                    $recordId = isset($_POST['recordId'])?$_POST['recordId']:"";
                                                    $profilePhoto = $_FILES['profilePhoto']['name'];
                                                    $visualsNameTemp = $_FILES['profilePhoto']['tmp_name'];
                                                    move_uploaded_file($visualsNameTemp,"$profilePhoto");
                                                    $profilePhotoUpload = sprintf("UPDATE profile SET `profilePhoto`='$profilePhoto' WHERE `recordId`='$recordId'");
                                                    $uploadprofilePhoto = mysqli_query($dbPortfolio,$profilePhotoUpload);
                                                    if($uploadprofilePhoto){
                                                        echo '<script type="text/javascript">
                                                        window.location.href = "contentManagementSystem.php";
                                                        </script>';
                                                    }
                                                } ?>
                                            </form>
                                        </div>
                                    </div>
                                <?php }
                            }?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <strong>
                            Projects
                        </strong>
                        <button class="mb-2 btn btn-primary d-flex py-2 px-3 rounded-2" type="button" data-bs-toggle="modal" data-bs-target="#addproject">
                            <small class="fw-semibold">
                                Add a new project
                            </small>
                        </button>
                    </div>
                    <div class="modal fade" id="addproject" aria-hidden="true" aria-labelledby="addproject" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                            <form action="addProject.php" method="post">
                                <div class="modal-content rounded-3">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">
                                            Add a new project
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <?php
                                    $getProject = "Select * from projects;";
                                    $getResult = mysqli_query($dbPortfolio, $getProject);
                                    $countResult = mysqli_num_rows($getResult);
                                    if ($countResult > 0) {
                                        while ($row = mysqli_fetch_assoc($getResult)) {
                                            $recordId = $row['recordId'];
                                            $workTitle = $row['workTitle'];
                                            $workImage = $row['workImage'];
                                            $workRole = $row['workRole'];
                                            $workDescription = $row['workDescription'];
                                            $workPublished = $row['workPublished'];
                                            ?>
                                        <?php }
                                    }?>
                                    <div class="modal-body py-0">
                                        <small class="text-dark mb-2 text-left">
                                            Name your project
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workTitle" placeholder="" required>
                                        <br>
                                        <small class="text-dark mb-2 text-left">
                                            Describe your project
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workDescription" placeholder="" required>
                                        <br>
                                        <small class="text-dark mb-2 text-left">
                                            Date accomplished
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workPublished" placeholder="" required>
                                        <br>
                                        <small class="text-dark mb-2 text-left">
                                            Main language used
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workRole" placeholder="" required>
                                        <br>
                                                
                                        <input type="text" class="d-none" name="workImage" value="temp.svg">
                                        <input type="text" class="d-none" name="projectID" value="<?php echo $countResult += 2;?>">
                                    </div>
                                    <div class="modal-footer flex-column border-top-0">
                                        <button type="submit" name="submit" class="btn btn-sm btn-primary w-100 mx-0">
                                            Continue
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row g-3 mb-3 mt-lg-3">
                        <?php
                        $getProject = "Select * from projects;";
                        $getResult = mysqli_query($dbPortfolio, $getProject);
                        $countResult = mysqli_num_rows($getResult);
                        if ($countResult > 0) {
                            while ($row = mysqli_fetch_assoc($getResult)) {
                                $recordId = $row['recordId'];
                                $workTitle = $row['workTitle'];
                                $workImage = $row['workImage'];
                                $workRole = $row['workRole'];
                                $workDescription = $row['workDescription'];
                                $workPublished = $row['workPublished'];
                                ?>
                                <div class="col-lg-6 col-md-4 col-sm-12 col-12 mt-4">
                                    <div class="rounded-4 bg-white border-light shadow-sm">
                                        <img src="<?php echo $row['workImage'];?>" class="d-block mx-auto img-fluid mb-lg-0 mb-3 border border-light" alt="Bootstrap Themes" width="700" height="500">
                                        <div class="pb-5 px-5">
                                            <div class="d-flex flex-row justify-content-between">
                                                <div>
                                                    <h4 class="mb-1">
                                                        <strong>
                                                            <?php echo $row['workTitle'];?>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div>
                                                    <div class=" col col-12 d-flex flex-lg-row flex-column justify-content-end m-0 p-0 ">
                                                        <button class="d-flex justify-content-center btn px-2 py-2 btn-outline-secondary w-auto rounded-3 fw-semibold align-items-center shadow-sm border-0" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                            </svg>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end p-3 border-0 shadow">
                                                            <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#updatework<?php echo $row['recordId'];?>">
                                                                Edit details
                                                            </a>
    
                                                            <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#imagework<?php echo $recordId;?>">
                                                                Upload image
                                                            </a>
    
                                                            <a class="text-decoration-none text-dark" href="deleteProject.php?recordId=<?php echo $recordId;?>">
                                                                Delete project
                                                            </a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-dark mb-3">
                                                My role: 
                                                <span class="fw-bold primary">
                                                    <?php echo $row['workRole'];?>
                                                </span>
                                            </p>
                                            <p class="text-dark mb-5">
                                                <?php echo $row['workDescription'];?>
                                            </p>
                                            <small class="text-secondary mb-0">
                                                <?php echo $row['workPublished'];?>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="updatework<?php echo $row['recordId'];?>" aria-hidden="true" aria-labelledby="updatework<?php echo $row['recordId'];?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                                        <form action="updateProject.php" method="post">
                                            <div class="modal-content rounded-3">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">
                                                        Update project details for
                                                        <span class="primary">
                                                            "<?php echo $workTitle;?>"
                                                        </span>
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body py-0">
                                                    <small class="text-dark mb-2 ">
                                                        Name
                                                    </small>
                                                    <br>
                                                    <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workTitle" value="<?php echo $row['workTitle'];?>" required>
                                                    <br>
                                                    <small class="text-dark mb-2 ">
                                                        Description
                                                    </small>
                                                    <br>
                                                    <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workRole" value="<?php echo $row['workRole'];?>" required>
                                                    <br>
                                                    <small class="text-dark mb-2 text-left">
                                                        Languages used
                                                    </small>
                                                    <br>
                                                    <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workDescription" value="<?php echo $row['workDescription'];?>" required>
                                                    <br>
                                                    <small class="text-dark mb-2 text-left">
                                                        Date Accomplished
                                                    </small>
                                                    <br>
                                                    <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="workPublished" value="<?php echo $row['workPublished'];?>" required>
                                                    <input type="text" class="d-none" name="workImage" value="<?php echo $workImage;?>">
                                                    <input type="text" class="d-none" name="recordId" value="<?php echo $recordId;?>">
                                                </div>
                                                <div class="modal-footer flex-column border-top-0">
                                                    <button type="submit" name="submit" class="btn btn-sm btn-primary w-100 mx-0">
                                                        Save changes
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="imagework<?php echo $recordId;?>" aria-hidden="true" aria-labelledby="imagework<?php echo $recordId;?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="modal-content rounded-3">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">
                                                        Upload your project visuals
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body py-0">
                                                    <label for="image2" class="border mt-3 rounded-2 p-5 w-100 text-center"
                                                        style="cursor: pointer;">
                                                        Select an image here&nbsp;
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload text-secondary" viewBox="0 0 16 16">
                                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                        </svg>
                                                        <input id="image2" name="projectVisuals" style="display: none;" type="file" accept="image/png, image/jpg, image/svg, image/jpeg" required>
                                                    </label>
                                                    <input type="text" name="recordId" value="<?php echo $recordId;?>" class="d-none" required>
                                                </div>
                                                <div class="modal-footer flex-column border-top-0">
                                                    <button type="submit" name="uploadProjectVisuals" class="btn btn-sm btn-primary w-100 mx-0">
                                                        Upload photo
                                                    </button>
                            
                                                    <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                            require('db_Portfolio.php');
                                            if(isset($_POST['uploadProjectVisuals'])){
                                                $recordId = isset($_POST['recordId'])?$_POST['recordId']:"";
                                                $projectVisuals = $_FILES['projectVisuals']['name'];
                                                $visualsNameTemp = $_FILES['projectVisuals']['tmp_name'];
                                                move_uploaded_file($visualsNameTemp,"$projectVisuals");
                                                $projectVisualsUpload = sprintf("UPDATE projects SET `workImage`='$projectVisuals' WHERE `recordId`='$recordId'");
                                                $uploadprojectVisuals = mysqli_query($dbPortfolio,$projectVisualsUpload);
                                                if($uploadprojectVisuals){
                                                    echo '<script type="text/javascript">
                                                    window.location.href = "contentManagementSystem.php";
                                                    </script>';
                                                }
                                            } ?>
                                        </form>
                                    </div>
                                </div>
                            <?php }
                        }?>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>
                            Skills
                        </strong>
                        <button class="mb-2 btn btn-primary d-flex py-2 px-3 rounded-2" type="button" data-bs-toggle="modal" data-bs-target="#addskill">
                            <small class="fw-semibold">
                                Add a new skill
                            </small>
                        </button>
                    </div>
                    <div class="modal fade" id="addskill" aria-hidden="true" aria-labelledby="addskill" tabindex="-1">
                        <div class="modal-dialog mx-auto" role="document" style="width: 480px;">
                            <form action="addSkill.php" method="post">
                                <div class="modal-content rounded-3">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">
                                            Add a new skill
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <?php
                                    $getSkills = "Select * from skills;";
                                    $getResult = mysqli_query($dbPortfolio, $getSkills);
                                    $countrecord = mysqli_num_rows($getResult);
                                    if ($countrecord > 0) {
                                        while ($row = mysqli_fetch_assoc($getResult)) {
                                            $recordId = $row['recordId'];
                                            $skillName = $row['skillName'];
                                            $skillIcon = $row['skillIcon'];
                                            $skillDescription = $row['skillDescription'];
                                            ?>
                                        <?php }
                                    }?>
                                    <div class="modal-body py-0">
                                        <small class="text-dark mb-2 text-left">
                                            Skill name
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="skillName" placeholder="" required>
                                        <br>
                                        <small class="text-dark mb-2 text-left">
                                            Description
                                        </small>
                                        <br>
                                        <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="skillDescription" placeholder="" required>
                                        <input type="text" class="d-none" name="skillIcon" value="logo_temp.svg">
                                        <input type="text" class="d-none" name="educationID" value="<?php echo $countrecord += 2;?>">
                                    </div>
                                    <div class="modal-footer flex-column border-top-0">
                                        <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 mx-0">
                                            Continue
                                        </button>
                                        <button type="button" class="btn btn-lg btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row g-3 mb-3 mt-lg-3">
                        <?php
                        $getSkills = "Select * from skills;";
                        $getResult = mysqli_query($dbPortfolio, $getSkills);
                        $countrecord = mysqli_num_rows($getResult);
                        if ($countrecord > 0) {
                            while ($row = mysqli_fetch_assoc($getResult)) {
                                $recordId = $row['recordId'];
                                $skillName = $row['skillName'];
                                $skillIcon = $row['skillIcon'];
                                $skillDescription = $row['skillDescription'];
                                ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3 rounded-3 shadow-sm bg-white border border-light">
                                    <img src="<?php echo $row['skillIcon'];?>" alt="<?php echo $row['skillIcon'];?>" class="img-fluid rounded-2 mb-4">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div>
                                            <h4 class=" mb-1 ">
                                                <strong>
                                                    <?php echo $row['skillName'];?>
                                                </strong>
                                            </h4>
                                        </div>
                                        <div>
                                            <div class=" col col-12 d-flex flex-lg-row flex-column justify-content-end m-0 p-0 ">
                                                <button class="d-flex justify-content-center btn px-2 py-2 btn-outline-secondary w-auto rounded-3 fw-semibold align-items-center shadow-sm border-0" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-3 border-0 shadow" aria-labelledby="profile">
                                                    <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#updateskill<?php echo $recordId;?>">
                                                        Edit details
                                                    </a>
                                                    <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#imageskill<?php echo $recordId;?>">
                                                        Upload image
                                                    </a>
                                                    <a class="text-decoration-none text-dark" href="deleteSkill.php?recordId=<?php echo $row['recordId'];?>">
                                                        Delete
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo $skillDescription;?>
                                    </p>
                                </div>
                            </div>

                            <div class="modal fade" id="updateskill<?php echo $recordId;?>" aria-hidden="true" aria-labelledby="updateskill<?php echo $recordId;?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                                    <form action="updateSkill.php" method="post">
                                        <div class="modal-content rounded-3">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5">
                                                    Update record details for
                                                    <span class="primary">
                                                        "<?php echo $skillName;?>"
                                                    </span>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-0">
                                                <small class="text-dark mb-2 text-left">
                                                    Skill name
                                                </small>
                                                <br>
                                                <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="skillName" value="<?php echo $row['skillName'];?>" required>
                                                <br>
                                                <small class="text-dark mb-2 text-left">
                                                    Description
                                                </small>
                                                <br>
                                                <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4 w-100" name="skillDescription" value="<?php echo $row['skillDescription'];?>" required>
                                                <input type="text" class="d-none" name="skillIcon" value="<?php echo $skillIcon;?>">
                                                <input type="text" class="d-none" name="recordId" value="<?php echo $recordId;?>">
                                            </div>
                                            <div class="modal-footer flex-column border-top-0">
                                                <button type="submit" name="submit" class="btn btn-sm btn-primary w-100 mx-0">
                                                    Save changes
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="imageskill<?php echo $recordId;?>" aria-hidden="true" aria-labelledby="imageskill<?php echo $recordId;?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered mx-auto my-auto" role="document">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="modal-content rounded-3">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5">
                                                    Upload your skill icon
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-0">
                                                <label for="image1" class="border mt-3 rounded-2 p-5 w-100 text-center" style="cursor: pointer;">
                                                    Select an image here&nbsp;
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload text-secondary" viewBox="0 0 16 16">
                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                                    </svg>
                                                    <input id="image1" name="skillIcon" type="file" accept="image/png, image/jpg, image/svg, image/jpeg" required>
                                                </label>
                                                <input type="text" name="recordId" value="<?php echo $recordId;?>" class="d-none" required>
                                            </div>
                                            <div class="modal-footer flex-column border-top-0">
                                                <button type="submit" name="uploadSkill" class="btn btn-sm btn-primary w-100 mx-0">
                                                    Upload photo
                                                </button>
                        
                                                <button type="button" class="btn btn-sm btn-light w-100 mx-0 mb-2" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                        <?php
                                        if(isset($_POST['uploadSkill'])){
                                            $recordId = isset($_POST['recordId'])?$_POST['recordId']:"";
                                            $skillIcon = $_FILES['skillIcon']['name'];
                                            $iconNameTemp = $_FILES['skillIcon']['tmp_name'];
                                            move_uploaded_file($iconNameTemp,"$skillIcon");
                                            $skillIconUpload = sprintf("UPDATE skills SET `skillIcon`='$skillIcon' WHERE `recordId`='$recordId'");
                                            $uploadIcon = mysqli_query($dbPortfolio,$skillIconUpload);
                                            if($uploadIcon){
                                                echo '<script type="text/javascript">
                                                window.location.href = "contentManagementSystem.php";
                                                </script>';
                                            }
                                        } ?>
                                    </form>
                                </div>
                            </div>
                        <?php }
                        }?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid shadow-sm p-lg-5 py-5 p-3" style="background: #F8FBFB;">
    <footer class="container mt-5 mb-3 text-center">
            <div class="col-12 col-lg-8 col-md-8 col-sm-8 mx-auto">
                <h5 class="text-dark">
                    Get in touch
                </h5>
                <h4 class="display-5 fw-semibold mb-3 text-dark">
                    Let's work together
                </h4>
                <p class="text-lg text-dark mb-4">
                    <?php              
                    $getName = "Select * from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getName);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $name = $result['name'];
                            $footerDescription = $result['footerDescription'];
                            ?>
                            <?php echo $footerDescription;?>
                        <?php
                    }?>
                </p>
                <div class="col d-flex flex-lg-row flex-column gap-lg-3 justify-content-center m-0 p-0">
                    <?php              
                    $getEmail = "Select email from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getEmail);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $email = $result['email'];
                            ?>
                            <a class="btn btn-lg w-auto d-inline-block mt-lg-4 mt-3 rounded-2 shadow btn-primary" href="mailto:<?php echo $email;?>">
                                Contact me
                            </a>
                        <?php
                    }?>
                </div>
                <div class="col-12 col-lg-8 col-md-8 col-sm-8 d-flex flex-row gap-5 justify-content-center mx-auto mb-3 mt-5">
                    <?php              
                    $getFb = "Select fb from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getFb);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $fb = $result['fb'];
                            ?>
                            <a href="<?php echo $fb;?>" class="text-decoration-none text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
    		           <?php
                    }?>

                    <?php              
                    $getLinkedin = "Select linkedin from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getLinkedin);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $linkedin = $result['linkedin'];
                            ?>
                            <a href="<?php echo $linkedin;?>" class="text-decoration-none text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
    		           <?php
                    }?>
                </div>
                <cite class="text-dark">
                    © 
                    <?php              
                    $getName = "Select name from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getName);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $name = $result['name'];
                            ?>
                            <?php echo $name;?>
    		           <?php
                    }?>
                    . All rights reserved.
                </cite>
            </div>
        </footer>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
</body>


</html>