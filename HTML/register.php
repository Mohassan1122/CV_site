<?php
include('server.php');

$errors = array();

$con = mysqli_connect($server, $username, $password, $database_name);
if ($con) {
    if (isset($_POST['submit'])) {
        // receive all input values from the register.php form
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pword = mysqli_real_escape_string($con, $_POST['pword']);



        //by using array_push() corresponding errors in $errors() which is an array of errors.
        if (empty($fname)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($pword)) {
            array_push($errors, "Password is required");
        }

        //fistly check in database that a user does not already exist with the same username and/or email.
        $get_all = "SELECT * FROM `user` WHERE fname='$fname' OR email='$email' LIMIT 1";
        $result = mysqli_query($con, $get_all);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['fname'] === $fname) {
                array_push($errors, "Username is already existed");
            }

            if ($user['email'] === $email) {
                array_push($errors, "email is already existed");
            }
        }

        // Finally, register user if no error
        if (count($errors) == 0) {
            $pwd = md5($pword); //encrypt the password before inserting in the database

            $register = "INSERT INTO user (fname, email, pword)
                            VALUES('$fname', '$email', '$pwd')";
            mysqli_query($con, $register);

            header('Location: login.php');
        }
    }
}
?>

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

    .error {
        width: 92%;
        margin: 0px auto;
        padding: 10px;
        border: 1px solid #a94442;
        color: #a94442;
        background: #f2dede;
        border-radius: 5px;
        text-align: left;
    }

    .success {
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        margin-bottom: 20px;
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

        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 shadow">
                <form method="post" action="" class="m-3 p-5">
                    <h2 class="text-center pb-3">Register Here</h2>
                    <?php include('errors.php');
                    ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="exampleFormControlInput1"
                            placeholder="Your Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <button type="submit" name="submit"
                        class="btn btn-primary btn-lg justify-items-center">Register</button>
                </form>
            </div>
        </div>

    </div>

    <script src="../CSS/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>