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
                <form action="" method="POST">
                    <div class="" >
                        <a href="login.php">
                            <button class="btn btn-dark text-white w-100 mb-3 ">Log In</button>
                        </a> 
                        <a href="register.php">
                            <button class="btn btn-success text-white w-100 mb-3">Register</button>
                        </a>
                        <a href="logout.php">
                            <button class="btn btn-danger text-white w-100 mb-3" name="LogOut">Log out</button>
                        </a>
                        <a href="logout.php">
                            <button class="btn btn-secondary text-white w-100 mb-3" name="Delete">Delete Account!</button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-8 bg-white"> 
                <!-- <form action="">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="bg-success text-white text-center">Log Out Successful!</h1>
                        </div>

                    </div>
                    
                    
                </form> -->
            </div>
        </div>
    </div>
    <?php
    session_start();

    if(isset($_POST['LogOut'])){
        // session_destroy();
        
        header("location:logout2.php");
    };
    if(isset($_POST['Delete'])){
        session_destroy();
        header("location:delete.php");
    }
    ?>
</body>
</html>