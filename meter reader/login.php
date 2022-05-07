<?php
session_start();
    include ("connection.php");
    include ("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];
        $role = $_POST['role'];
    if(empty($email))
    {
      echo "<script>alert('Email/User Id need to be filled')</script>";
    }elseif(empty($password))
    {
      echo "<script>alert('Password need to be filled')</script>";
    }elseif(empty($password) && empty($email))
    {
      echo "<script>alert('Email/User Id and Password need to be filled')</script>";
    }else
    {
      //read from database
            if($role==="user")
            {
                $cus_query="select * from customer where email = '$email' limit 1";
                $results = mysqli_query($con,  $cus_query);
                if($results)
			     {
                    if($results && mysqli_num_rows($results) > 0)
                    {

                        $user_data = mysqli_fetch_assoc($results);

                        if($user_data['password'] === $password)
                        {

                            $_SESSION['role'] = $role;
                            header("Location: index.php");
                            die;
                        }
                        else
                        {
                          echo '<script>alert("Invalid pass")</script>'; 
                        }
                    }
                    else{
                    echo '<script>alert("Email cant be found")</script>'; 
                    
                    }
			     }
                
                
            
                
            }else
            {
               	$query = "select * from users where email = '$email' limit 1";
            
                $result = mysqli_query($con, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {

                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['password'] === $password)
                        {

                            $_SESSION['user_id'] = $user_data['user_id'];
                            $_SESSION['role'] = $role;
                            header("Location: index.php");
                            die;
                        }
                    }
                } 
            }
		
            
            
    }
		/*if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "<script>alert('Email/User Id and Password need to be filled')</script>";
		}*/
	}


    
    
?>

<!DOCTYPE html>
<html>
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
       
        <section >
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                  <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                      
                      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                      <p class="text-white-50 mb-5">Please enter your Username Id or Email and Password!</p>
                      
                      <form method="post">
                        <div class="form-outline form-white mb-4">
                         
                             <input type="text" id="useremail" name="email" class="form-control form-control-lg"/>
                            <label class="form-label" for="useremail">Email/User Id</label>
                         
                       
                      </div>

                          <div class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password"/>
                            <label class="form-label" for="typePasswordX">Password</label>
                          </div>

                          <select class="form-select mb-3"
                              name="role" 
                              aria-label="Default select example">
                          <option selected value="user">User</option>
                          <option value="Meter Reader">Meter Reader</option>
                          </select>

                          <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                          
                          <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        
                          <!--<input id="button" type="submit" value="Login">-->
                        
                      </form>
                      
                    
                        

                     

                    </div>

            
                      
                      <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </body>


</html>