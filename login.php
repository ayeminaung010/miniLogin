<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <div class="">
                    <a href="login.php">
                        <button class="btn btn-dark text-white w-100 mb-3 ">Log In</button>
                    </a> 
                    <a href="register.php">
                        <button class="btn btn-success text-white w-100 mb-3">Register</button>
                    </a>
                    <!-- <a href="logout.php">
                        <button class="btn btn-danger text-white w-100 mb-3">Log out</button>
                    </a> -->
                </div>
            </div>
            <div class="col-8 bg-white"> 
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="userInputEmail">
                        </div>

                        <div class="card-body">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="userInputPassword">
                        </div>

                        <div class="card-body">
                          <button type="submit" class="btn btn-dark float-end" name="Login">Log In</button>  
                        </div>


                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
    <?php
    session_start();
    if(isset($_POST['Login'])){
        $userInputEmail = $_POST['userInputEmail'];
        $userInputPassword = $_POST['userInputPassword'];
        // echo $_SESSION['email'] .'<br>';
        // echo $_SESSION['password'] .'<br>';
        if($userInputEmail == $_SESSION['email'] && password_verify($userInputPassword, $_SESSION['password'])){
            echo 'Successful Login!';
            header("location:logout.php");
        }else{
            echo 'Something Wrong Try again!';
        }
    }
    ?>
</body>
</html>