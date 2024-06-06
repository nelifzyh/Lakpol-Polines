<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:masuk.php');
}

if (isset($_POST['update'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $update_profile = $conn->prepare("UPDATE `daftar` SET username = ?, email = ? WHERE id = ?");
   $update_profile->execute([$name, $email, $user_id]);

   $old_image = $_POST['old_image'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/' . $image;

   if (!empty($image)) {

      if ($image_size > 2000000) {
         $message[] = 'Image size is too large';
      } else {
         $update_image = $conn->prepare("UPDATE `daftar` SET image = ? WHERE id = ?");
         $update_image->execute([$image, $user_id]);

         if ($update_image) {
            move_uploaded_file($image_tmp_name, $image_folder);
            unlink('uploaded_img/' . $old_image);
            $message[] = 'Image has been updated!';
         }
      }
   }

   $old_pass = $_POST['old_pass'];
   $previous_pass = $_POST['previous_pass'];
   $new_pass = $_POST['new_pass'];
   $confirm_pass = $_POST['confirm_pass'];

   if (!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)) {
      $select_password = $conn->prepare("SELECT password FROM `daftar` WHERE id = ?");
      $select_password->execute([$user_id]);
      $row = $select_password->fetch(PDO::FETCH_ASSOC);
      $hashed_password = $row['password'];

      if (!password_verify($old_pass, $hashed_password)) {
         $message[] = 'Old password not matched!';
      } elseif ($new_pass != $confirm_pass) {
         $message[] = 'Confirm password not matched!';
      } else {
         $hashed_new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
         $update_password = $conn->prepare("UPDATE `daftar` SET password = ? WHERE id = ?");
         $update_password->execute([$hashed_new_pass, $user_id]);
         $message[] = 'Password has been updated!';
      }
   }
}

$select_profile = $conn->prepare("SELECT * FROM `daftar` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>user profile update</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

    <h1 class="title">Update <span>user</span> profile</h1>

    <section class="update-profile-container">

        <form action="" method="post" enctype="multipart/form-data">
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            <div class="flex">
                <div class="inputBox">
                    <span>Username :</span>
                    <input type="text" name="name" required class="box" placeholder="Enter your name"
                        value="<?= $fetch_profile['username']; ?>">
                    <span>Email :</span>
                    <input type="email" name="email" required class="box" placeholder="Enter your email"
                        value="<?= $fetch_profile['email']; ?>">
                    <span>Profile pic :</span>
                    <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
                    <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
                </div>
                <div class="inputBox">
                    <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
                    <span>Old password :</span>
                    <input type="password" class="box" name="previous_pass" placeholder="Enter previous password">
                    <span>New password :</span>
                    <input type="password" class="box" name="new_pass" placeholder="Enter new password">
                    <span>Confirm password :</span>
                    <input type="password" class="box" name="confirm_pass" placeholder="Confirm new password">
                </div>
            </div>
            <div class="flex-btn">
                <input type="submit" value="Update Profile" name="update" class="btn">
                <a href="user_page.php" class="option-btn">Go back</a>
            </div>
        </form>

    </section>

</body>

</html>