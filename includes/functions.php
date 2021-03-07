<?php
class Login{
  public function LoginSystem(){
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])){
      if (empty($_POST['email']) || empty($_POST['password'])){
        $error = "Username or Password is invalid";
      }
      else{
        include 'connect.php';
        // Define $username and $password
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        // SQL query to fetch information of registerd users and finds user match.
        
        $query = "SELECT email, userpassword FROM users_tbl WHERE email='$email' AND userpassword='$password' ";

        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if($stmt->fetch()) { //fetching the contents of the row 
          $_SESSION['email'] = $username; // Initializing Session
        }
        
      mysqli_close($conn); // Closing Connection
      }
    } 
  }
  public function SessionCheck(){
    global $conn;
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['email'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT * FROM users_tbl WHERE email = '$user_check';";
    
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["user_id"] = $row["user_id"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["type"] = $row["type"];
    //keking addition
    $_SESSION["userpassword"] = $row["userpassword"];
    $_SESSION["status"] = $row["status"];
    
    if (empty($_POST['email']) || empty($_POST['password'])){
      $error = "Username or Password is invalid";
    }
  }

  public function UserType(){
    //if user role is 1, redirect to admin page
    if ($_SESSION["type"] == 'admin') {
      header("Location:../user/admin/");
    }
    //if user role is 0, redirect to student page
    if ($_SESSION["type"] == 'student') {
      //header("Location:../user/student/studentSideBarMenu/adviserRating.php");
      header("Location:../user/student/");
      //header("Location:../user/student/dashboard.php");

    }
    //if user role is 2, redirect to faculty page
    if ($_SESSION["type"] == 'faculty') {
      header("Location:../user/faculty/");
    }
    //if user role is 3, redirect to secretary page
    if ($_SESSION["type"] == 'secretary') {
      header("Location:../user/secretary/");
    }
  }
  public function SessionVerify(){
    if(isset($_SESSION['email'])){
      header("location: includes/checkuser.php"); // Check user session and role
    }
  }
}

class UserFunctions{
  public function UserName(){
    $username = $_SESSION["name"];
    echo $username;
  }
  /*keking addition*/
  public function id(){
    $id = $_SESSION["user_id"];
    echo $id;
  }
  public function email(){
    $email = $_SESSION["email"];
    echo $email;
  }
  public function role(){
    $role = $_SESSION["type"];
    echo $role;
  }
  public function password(){
    $password = $_SESSION["userpassword"];
    echo $password;
  }
}
?>
