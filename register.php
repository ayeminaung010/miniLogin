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
                <form action="" method="post">
                    <div class="card">
                        <div class="card-body">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="userInputFirstName" require>
                        </div>

                        <div class="card-body">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="userInputLastName" require>
                        </div>

                        <div class="card-body">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="userInputEmail" require>
                        </div>

                        <div class="card-body">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="userInputPassword1" require>
                        </div>

                        <div class="card-body">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="userInputPassword2" require>
                        </div>

                        <div class="card-body">
                          <button type="submit" class="btn btn-dark float-end" name="register">Register</button>  
                        </div>


                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>

    <?php
    session_start();
    function checkStrongPassword($userPassword2){
        $upperstatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if(preg_match('/[A-Z]/',$userPassword2)){
            $upperstatus = true;
        };
        if(preg_match('/[a-z]/',$userPassword2)){
            $lowerStatus = true;
        };
        if(preg_match('/[0-9]/',$userPassword2)){
            $numberStatus = true;
        };
        if(preg_match('/[!@#$%^&*()]/',$userPassword2)){
            $specialStatus = true;
        };
        if($upperstatus  && $lowerStatus  && $numberStatus && $specialStatus ){
            return true;
        }else{
            return false;
        }
        
    }
   
    if(isset($_POST['register'])){
        $name = $_POST['userInputFirstName'] . $_POST['userInputLastName'];
        $userEmail = $_POST['userInputEmail'];
        $userPassword1 = $_POST['userInputPassword1'];
        $userPassword2 = $_POST['userInputPassword2'];
        
        if(strlen($userPassword1) >= 6 && strlen($userPassword2) >= 6){
            if($userPassword1 == $userPassword2){
                 
                // echo 'Successfull Register!';

                $status = checkStrongPassword($userPassword2);
                // var_dump($status);
                // echo $userPassword2;
                // Ayeminaung110@#$

                if($status){
                 $_SESSION['name'] = $name;
                 $_SESSION['email'] = $userEmail;
                 $_SESSION['password'] = password_hash($userPassword2 , PASSWORD_BCRYPT);
                 echo 'Register Success!';
                }else{
                    echo 'your password is not strong (eg. must contain A_Z , a-z ,@#$$#%%$!!)';
                }
                
            }else{
                echo 'your password must be same!';
            }
        }else{
            echo "Your password must be";
        }
    }else{
        echo "need to fill";
    }
    ?>
</body>
</html>