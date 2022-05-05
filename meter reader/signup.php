<?php
session_start();
    include ("connection.php");
    include ("function.php");
    
    //if(isset($_POST["submit"]))
    //{
        //$username= $_POST["user_name"];
        //$email= $_POST["email"];
        //$password= $_POST["password"];
        //$query= "insert into users(email,user_name,password)
       // values('$email','$username','$password')";
       // mysqli_query($con,$query);
        //header("Location: login.php");
        
        
    //}

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
        $user_name=$_POST['username'];
		$password = $_POST['password'];
        $retype=$_POST['retypepassword'];
            
        $get_email= "select * from users where email = '$email'";
        $email_result = mysqli_query($con, $get_email);
        $num_email=mysqli_num_rows($email_result);
        
        if(!preg_match("/^[a-zA-Z-' ]*$/",$user_name))
           {
               
               echo '<script>alert("Only letters and white space allowed")</script>';
           }
            else if($retype!=$password)
            {
              
              echo '<script>alert("Password must be the same")</script>';
            }
            else if($num_email>1)
            {
                    
                    //save to database
                   echo '<script>alert("Email had been use")</script>';

            }
            else
            {
                   $user_id = random_id(1,100);
                    $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";

                    mysqli_query($con, $query);
                 
                    header("Location: SuccessRegister.php");
                    die;
                
                  
            }
    }

         

            
	   

  
    
    
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
          <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                      <h2 class="text-uppercase text-center mb-5"></h2>
                        <h2 class="text-uppercase text-center mb-5">Create an account For Meter Reader</h2>
                        <form method="post">
                          
                        <div class="form-outline mb-4">
                          <input type="text" name="username" id="user_name" class="form-control form-control-lg" required/>
                          <label for="user_name">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                          <label for="email">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required/>
                          <label for="password">Password</label>
                        </div>
                            
                        <div class="form-outline mb-4">
                          <input type="password" name="retypepassword" id="form3Example4cg" class="form-control form-control-lg" required/>
                          <label for="retypepassword">Retype Password</label>
                        </div>

                        <!--<div class="form-outline mb-4">
                          <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                        </div> -->

                      
                          <div class="d-flex justify-content-center">
                              <button type="submit"
                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                        </div>
                            
                            
                        
                            
    
    
                            
    
                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                            
                            
                         

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </body>


</html>