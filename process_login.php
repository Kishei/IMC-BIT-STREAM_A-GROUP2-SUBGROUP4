<?php
include("conn.php");
// capture data
$email = $_POST['email'];
$password = $_POST['password'];

// simple login
//if($email == 'lydiamdyongolo2@gmail.com' && $password == 'juli'){
  //  header("location: feed.php")
    //} else {
    //echo "Invalid email or password.";
//}
    // take a data from form data
    $email = $_POST['email'];

    // select user by email
   // $sql =
    $stmt = $conn->prepare("SELECT * FROM USERS WHERE email = ?");
    $stmt->bind_param("s", $email);
    $email = ($_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();

    // to check if user exist
    if ($result->num_rows > 0){
        $email =$result->fetch_assoc();

        // check password
       // if (password_verify($password, $email['password'])){
            header("location: feed.php");
      //  } else{
       //     echo "Invalid password";
       // }
    }else {
        header("location: form_login.php?error=Invalid email"); 
    }
?>