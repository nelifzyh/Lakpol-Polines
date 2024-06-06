<?php
include 'config.php';

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $username = filter_var($username, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   $select = $conn->prepare("SELECT * FROM `daftar` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'User already exists!';
   } else {
      $insert = $conn->prepare("INSERT INTO `daftar` (username, email, password) VALUES (?, ?, ?)");
      $insert->execute([$username, $email, $password]);
      
      if($insert){
         $message[] = 'Registered successfully!';
         header('location:masuk.php');
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/daftar.css">
</head>

<body>

    <div class="kotak">
        <h1>Sign UP</h1>
        <?php
        if(isset($message)){
            foreach($message as $msg){
                echo '<div class="message"><span>'.$msg.'</span></div>';
            }
        }
        ?>
        <form method="POST" id="signup">
            <input type="text" id="username" placeholder="Username" name="username">
            <input type="text" id="email" placeholder="Email" name="email">
            <input type="password" id="password" placeholder="Password" name="password">
            <input type="password" id="reenter" placeholder="Re-Enter" name="reenter">
            <button type="submit" name="submit" id="submit">Sign UP</button>
        </form>
        <div class="setuju">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">I agree to these
                <a href="#">Term & conditions</a>
            </label>
        </div>
        <div class="anggota">
            Already have an account? <a href="./masuk.php">Login here</a>
        </div>
    </div>

    <script>
    // Add a click event listener to the loginButton
    document.getElementById('submit').addEventListener('click', function() {
        // Redirect to login.php when the button is clicked
        window.location.href = 'masuk.php';
    });
    </script>
</body>

</html>