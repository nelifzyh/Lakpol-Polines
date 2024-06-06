<?php
include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $username = filter_var($username, FILTER_SANITIZE_STRING);
   $password = $_POST['password'];

   $select = $conn->prepare("SELECT * FROM `daftar` WHERE username = ?");
   $select->execute([$username]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if(password_verify($password, $row['password'])){

         $_SESSION['user_id'] = $row['id'];

         // Adjust based on your application needs, for example:
         if($row['user_type'] == 'admin'){
            header('location: admin_page.php');
         } else {
            header('location: homeprofile.php');
         }

      } else {
         $message[] = 'Incorrect username or password!';
      }
      
   } else {
      $message[] = 'User not found!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/daftar.css" />
</head>

<body>
    <div class="kotak">
        <h1>Login</h1>
        <?php
        if(isset($message)){
            foreach($message as $msg){
                echo '<div class="message"><span>'.$msg.'</span></div>';
            }
        }
        ?>
        <form id="loginForm" method="post" action="">
            <input type="text" name="username" id="usernameInput" placeholder="Username" />
            <input type="password" name="password" id="passwordInput" placeholder="Password" />
            <div class="lupa">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-light">Login</button>
            <div class="anggota">Not have an account? <a href="./signup.php"> Sign Up here </a></div>
        </form>
    </div>
</body>

</html>