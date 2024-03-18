<?php require('db_Portfolio.php'); ?>
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
        h4 {
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
                        Portfolio
                    </h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link">
                            Home
                        </a>
                        <a href="#about" class="nav-item nav-link">
                            About
                        </a>
                        <a href="#skills" class="nav-item nav-link">
                            Skills
                        </a>
                    </div>
                    <a href="#projects" class="btn btn-primary py-2 px-4 ml-lg-3 fw-bold">
                        Projects
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container-fluid p-lg-5 py-5 p-3" style="background: #F8FBFB;" id="home">
        <section class="container mb-5 mt-lg-5 mt-5 pt-lg-4 pt-3">
            <div class="row gap-5 gap-lg-0 gap-md-0 gap-sm-0 align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-12 my-4 mx-auto text-center">
                    <h5 class="fw-semibold text-tertiary lh-1 my-5">
                        Hi, my name is
                    </h5>
                    <h3 class="display-4 fw-bolder lh-1 mb-4">
                        <?php              
                        $getProfile = "Select * from profile where recordId='1';";
                        $getResult = mysqli_query($dbPortfolio, $getProfile);
                        $countResult = mysqli_num_rows($getResult);
                        if ($countResult > 0) {
                            while ($row = mysqli_fetch_assoc($getResult)) {
                                $recordId = $row['recordId'];
                                $name = $row['name'];
                                ?>
                                <?php echo $name;?>
    		            <?php }
                        }?>
                    </h3>
                    <p class="text-lg text-dark">
                        <?php              
                        $getName = "Select * from profile where recordId='1';";
                        $runQuery = mysqli_query($dbPortfolio, $getName);
                        $record = mysqli_num_rows($runQuery);
                        if ($record > 0) {
                            $result = mysqli_fetch_assoc($runQuery);
                                $homeDescription = $result['homeDescription'];
                                ?>
                                <?php echo $homeDescription;?>
                            <?php
                        }?>
                    </p>
                    <div class="col d-flex flex-lg-row flex-column gap-lg-3 justify-content-center mb-5 pb-5">
                        <a class="btn btn-lg w-auto mt-lg-4 mt-3 rounded-2 shadow btn-primary" href="#projects">
                            See my work
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid bg-white py-4 py-lg-5" id="about">
        <section class="container mb-5 mt-5">
            <div class="row justify-content-between g-5 align-items-top mx-auto mb-lg-5 mb-4">
                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                    <?php
                    $getProfile = "Select * from profile where recordId='1';";
                    $getResult = mysqli_query($dbPortfolio, $getProfile);
                    $countResult = mysqli_num_rows($getResult);
                    if ($countResult > 0) {
                        while ($row = mysqli_fetch_assoc($getResult)) {
                            $recordId = $row['recordId'];
                            $profilePhoto = $row['profilePhoto'];
                            ?>
                            <img class="img-fluid rounded-3" data-wow-delay="0.1s" src="<?php echo $row['profilePhoto'];?>">
                        <?php }
                    }?>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-4 fw-semibold">
                        About me
                    </h1>
                    <?php              
                    $getProfile = "Select * from profile where recordId='1';";
                    $getResult = mysqli_query($dbPortfolio, $getProfile);
                    $countResult = mysqli_num_rows($getResult);
                    if ($countResult > 0) {
                        while ($row = mysqli_fetch_assoc($getResult)) {
                            $name = $row['name'];
                            $profilePhoto = $row['profilePhoto'];
                            $address = $row['address'];
                            $zipCode = $row['zipCode'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            ?>
                    <ul class="about-info mt-3 px-0">
                        <li class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column mb-2">
                            <p class="col-12 col-lg-3 m-0 p-0 w-auto">
                                Name:
                            </p>
                            <strong class="col-12 col-lg-9 m-0 p-0 text-left">
                                <p>
                                    <?php echo $row['name'];?>
                                </p>
                            </strong>
                        </li>
		            	<li class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column mb-2">
		            	    <p class="col-12 col-lg-3 m-0 p-0 w-auto">
                                Address:
                            </p>
                            <strong class="col-12 col-lg-9 m-0 p-0 text-left">
                                <p>
                                    <?php echo $row['address'];?>
                                </p>
                            </strong>
		            	</li>
		            	<li class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column mb-2">
		            	    <p class="col-12 col-lg-3 m-0 p-0 w-auto">
                                Zip code:
                            </p>
                            <strong class="col-12 col-lg-9 m-0 p-0 text-left">
                                <p>
                                    <?php echo $row['zipCode'];?>
                                </p>
                            </strong>
		            	</li>
		            	<li class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column mb-2">
		            	    <p class="col-12 col-lg-3 m-0 p-0 w-auto">
                                Email:
                            </p>
                            <strong class="col-12 col-lg-9 m-0 p-0 text-left">
                                <p>
                                    <?php echo $row['email'];?>
                                </p>
                            </strong>
		            	</li>
		            	<li class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
		            	    <p class="col-12 col-lg-3 m-0 p-0 w-auto">
                                Phone:
                            </p>
                            <strong class="col-12 col-lg-9 m-0 p-0 d-flex justify-content-start">
                                <p>
                                    <?php echo $row['phone'];?>
                                </p>
                            </strong>
		            	</li>
		            </ul>
		            <?php }
                    }?>
                    <p class="mb-3">
                        <?php              
                        $getName = "Select * from profile where recordId='1';";
                        $runQuery = mysqli_query($dbPortfolio, $getName);
                        $record = mysqli_num_rows($runQuery);
                        if ($record > 0) {
                            $result = mysqli_fetch_assoc($runQuery);
                                $aboutDescription = $result['aboutDescription'];
                                ?>
                                <?php echo $aboutDescription;?>
                            <?php
                        }?>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid pb-4" style="background: #F8FBFB;" id="skills">
        <section class="container my-5 py-5">
            <div class="col-lg-8 col-md-8 col-sm-8 text-center mx-auto mb-lg-5 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16" style="color: #477A85;">
                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41z"/>
                </svg>
                <h1 class="display-5 my-4 fw-semibold">
                    My skills and unique traits
                </h1>
                <p class="mb-4">
                    <?php              
                    $getName = "Select * from profile where recordId='1';";
                    $runQuery = mysqli_query($dbPortfolio, $getName);
                    $record = mysqli_num_rows($runQuery);
                    if ($record > 0) {
                        $result = mysqli_fetch_assoc($runQuery);
                            $skillSummary = $result['skillSummary'];
                            ?>
                            <?php echo $skillSummary;?>
                        <?php
                    }?>
                    </p>
            </div>
            <div class="row">
                <?php              
                $getSkills = "Select * from skills;";
                $getResult = mysqli_query($dbPortfolio, $getSkills);
                $countResult = mysqli_num_rows($getResult);
                if ($countResult > 0) {
                    while ($row = mysqli_fetch_assoc($getResult)) {
                        $recordId = $row['recordId'];
                        $skillName = $row['skillName'];
                        $skillIcon = $row['skillIcon'];
                        $skillDescription = $row['skillDescription'];
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto mt-4">
                            <div class="card border-0 text-center p-4 rounded-4 h-100 shadow-sm">
                                <div class="card-body">
                                    <img src="<?php echo $row['skillIcon'];?>" alt="<?php echo $row['skillIcon'];?>" class="img-fluid rounded-2 mb-4">
                                    <h5>
                                        <?php echo $row['skillName'];?>
                                    </h5>
                                    <p class="mb-0 mt-4 pb-0">
                                        <?php echo $row['skillDescription'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                }?>
            </div>
        </section>
    </div>
    <div class="container-fluid py-4 py-lg-5" style="background: #ffffffcc;" id="projects">
        <section class="container mb-5 mt-5 pt-5">
            <h6 class="lh-1 mb-0 fw-semibold">
                Recent work
            </h6>
            <div class="row">
                <?php              
                $getWork = "Select * from projects;";
                $getResult = mysqli_query($dbPortfolio, $getWork);
                $countResult = mysqli_num_rows($getResult);
                if ($countResult > 0) {
                    while ($row = mysqli_fetch_assoc($getResult)) {
                        $recordId = $row['recordId'];
                        $workImage = $row['workImage'];
                        $workTitle = $row['workTitle'];
                        $workRole = $row['workRole'];
                        $workDescription = $row['workDescription'];
                        $workPublished = $row['workPublished'];
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4 my-4">
                            <div class="rounded-4 bg-white border-light shadow-sm">
                                <img src="<?php echo $row['workImage'];?>" class="d-block mx-auto img-fluid mb-lg-0 mb-3 border border-light" alt="Bootstrap Themes" width="700" height="500">
                                <div class="pb-5 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-window-sidebar" viewBox="0 0 16 16" style="color: #477A85;">
                                        <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                                        <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1zM1 13V6h4v8H2a1 1 0 0 1-1-1m5 1V6h9v7a1 1 0 0 1-1 1z"/>
                                    </svg>
                                    <h3 class="text-dark fw-bold mt-2 mb-4">
                                        <?php echo $row['workTitle'];?>
                                    </h3>
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
                    <?php }
                }?>
            </div>
        </section>
    </div>
    <div class="container-fluid shadow-sm p-lg-5 py-5 p-3" style="background: #F8FBFB;" id="contact">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>


</html>