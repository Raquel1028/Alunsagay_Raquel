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
                        Login
                    </h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header">
                    <div class="ml-auto">
                        <a href="index.php" class="btn btn-primary py-2 px-4 ml-lg-3 fw-bold">
                            Visit portfolio
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container-fluid p-lg-5 py-5 p-3 bg-white" id="home">
        <section class="container mb-5 mt-lg-5 mt-5 pt-lg-4 pt-3">
            <div class="row gap-5 gap-lg-0 gap-md-0 gap-sm-0 align-items-center">
                <div class="col-lg-4 col-md-8 col-sm-12 my-4 mx-auto text-center rounded-4 border-3 shadow-sm p-4">
                    <h5 class="fw-semibold text-tertiary lh-1 mb-2">
                        Content management system
                    </h5>
                    <p class="text-lg text-dark mb-3">
                        Login with your account credentials to access your content management settings.
                    </p>
                    <form action="cmsLogin.php" class="d-flex flex-column w-100 d-flex flex-lg-row mt-lg-4 mt-3 gap-3" method="post">
                        <div class="col col-lg-12 col-md-6 col-sm-6 col-12 p-0 mx-auto">
                            <div class="d-flex flex-column w-100">
                                <small class="text-dark mb-2 text-lg-left text-md-left text-sm-left text-left">
                                    Username
                                </small>
                                <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" placeholder="Enter your username" name="username">
                                            
                                <small class="text-dark mb-2 text-lg-left text-md-left text-sm-left text-left">
                                    Password
                                </small>
                                <input type="text" class="p-3 rounded-3 bg-white text-dark border border-2 border-light shadow-sm mb-4" placeholder="Enter your password" name="password">
                                            
                                <input input type="submit" name="submit" class="btn btn-lg w-auto mt-lg-4 mt-3 rounded-2 shadow btn-primary" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    
    <div class="container-fluid shadow-sm p-lg-5 py-5" style="background: #F8FBFB;" id="contact">
        <footer class="container mt-5 mb-3 text-center">
            <div class="col-12 col-lg-8 col-md-8 col-sm-8 mx-auto">
                <div class="col-12 col-lg-8 col-md-8 col-sm-8 d-flex flex-row gap-5 justify-content-center mx-auto my-3">
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