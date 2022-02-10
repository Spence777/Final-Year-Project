<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final year project</title>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="mine/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Sign Up -->

  <!-- nav -->
    <div class="header">

    <?php 
    if (isset($_POST['register'])) {
          $names = $_POST['names'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

          // echo"<pre>"; print_r($password); echo"</pre>"; die;
          $sql = ("SELECT *FROM users WHERE email='$email'");
          $result = $conn->query($sql);
          if ($result->num_rows >0) {
              echo "<div class='alert alert-danger text-center'>The Email Already Exists</div>";
					    header('Location'. $_SERVER["HTTP_REFERER"]);
          }else{
            $insert = "INSERT INTO users(names, email, phone, password) VALUES('".$names."', '".$email."', '".$phone."', '".$password."')";
            if ($conn->query($insert) === TRUE) {
              $get = ("SELECT *FROM users WHERE email='$email'");
							$res = $conn->query($get);
							$row = $res->fetch_assoc();

              $_SESSION['userid'] = $row['userid'];
              $_SESSION['role'] = $row['role'];


              switch ($_SESSION['role']) {
								case 'admin':
									header("location:$base_url"."admin.php");
									break;
								case 'user':
									header("location:$base_url"."index.php");
									break;
								
								default:
									session_destroy();
									header("location:$base_url"."index.php");
									break;
							}
            }else{
              echo "<div class='alert alert-danger text-center'>Error: ".$insert." <br> ".$conn->error."</div>";
						  header($_SERVER["HTTP_REFERER"]);
            }
          }
    }
?>

<?php 

if (isset($_POST['login'])) {
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = ("SELECT *FROM users WHERE email='$email'");

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  if ($result->num_rows > 0) {
    $passwordcheck = password_verify($password, $row['password']);

    if ($passwordcheck) {
        
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['role'] = $row['role'];


      switch ($_SESSION['role']) {
        case 'admin':
          header("location:$base_url"."admin.php");
          break;
        case 'user':
          header("location:$base_url"."index.php");
          break;
        
        default:
          session_destroy();
          header("location:$base_url"."index.php");
          break;
      }

    }else{
      echo "<div class='alert alert-danger text-center'>The Password Is Incorrect</div>";
      header('Location'. $_SERVER["HTTP_REFERER"]);
    }

  }else{
    echo "<div class='alert alert-danger text-center'>The email Does Not Exist</div>";
    header('Location'. $_SERVER["HTTP_REFERER"]);
  }
}
?>



        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">CCMES</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"  aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#trending">Monitored Projects</a>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Report anonymously</a> -->
                    <!-- <button class="btn btn-primary">button</button> -->
                    <a href="monitor.php"><button class="btn btn-outline-primary">Monitor</button> </a>
                    

                    <!-- <button class="btn btn-outline-primary" href="#monitor.php" >Monitor</button> -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About Us</a>
                  </li>
                  <?php if(empty($_SESSION['userid'])){ ?>
                  <li class="nav-item">
                    <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                  </li>
                  <?php }else{ ?>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                    <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
    </div>
      <!-- nav -->