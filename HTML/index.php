<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start UP</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
    .blog-header {
        line-height: 1;
        border-bottom: 1px solid #e5e5e5;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
    }

    .blog-header-logo {
        font-family: Georgia, "Times New Roman", serif
            /*rtl:Amiri, Georgia, "Times New Roman", serif*/
        ;
        font-size: 2.25rem;
    }

    .blog-header-logo2 {
        font-family: Georgia, "Times New Roman", serif
            /*rtl:Amiri, Georgia, "Times New Roman", serif*/
        ;
        font-size: 3.5rem;
    }

    .blog-header-logo:hover {
        text-decoration: none;
    }

    .img2 {
        position: absolute;
        left: 900px;
        top: 550px;
        z-index: -0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ms-5">
            <a class="navbar-brand ms-5" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">World</a>
                <a class="p-2 link-secondary" href="#">U.S.</a>
                <a class="p-2 link-secondary" href="#">Technology</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Culture</a>
                <a class="p-2 link-secondary" href="#">Business</a>
                <a class="p-2 link-secondary" href="#">Politics</a>
                <a class="p-2 link-secondary" href="#">Opinion</a>
                <a class="p-2 link-secondary" href="#">Science</a>
                <a class="p-2 link-secondary" href="#">Health</a>
                <a class="p-2 link-secondary" href="#">Style</a>
                <a class="p-2 link-secondary" href="#">Travel</a>
            </nav>
        </div>

        <img src="../IMAGES/timothy-barlin-FKT0rzwhUsM-unsplash.jpg" width="300" class="img2" height="400" alt=""
            srcset="">
        <div class="row mt-4 bg-success rounded">

            <div class="col-md-5 offset-md-1 p-5 text-white ">
                <h1 class="blog-header-logo2" style="text-shadow: 2px 2px white;">BECOME PROFESSIONAL IN YOUR EITHIC
                </h1>
                <p>And yet, here you are, still persevering in reading this placeholder text, hoping for some more
                    insights,
                    or some hidden easter egg of content..</p>
                <a href="../HTML/register.php" class="btn btn-info btn-large" type="submit">Get Started</a>
                <a class="btn btn-primary m-3 btn-large" type="submit">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="../IMAGES/pngfind.com-happy-people-png-6778769.png" alt="" width="500" height="400" srcset="">
            </div>
        </div>


    </div>

    <script src="../CSS/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>