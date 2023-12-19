<?php
include('partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br />
    <form action="" method="POST">

        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td>
                    <input type="text" name="full_name" placeholder="Enter your name">
                </td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="username" placeholder="Enter your username">
                </td>
                 </tr>
                 <tr>
                <td>Password:</td>
                <td>
                    <input type="Password" name="password" placeholder="Enter your password">
                </td>
                 </tr>
                 <tr>
                     <td colspan="2">
                         <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                     </td>
                
                 </tr>
        </table>
    </form>
    </div>
</div>
<?php
include('partials/footer.php');
?>

<?php
// if(isset($_POST['submit']))
// {
//   echo  $full_name = $_POST['full_name']  ."<br>"; 
//   echo  $username = $_POST['username']  ."<br>";
//   echo  $password =  md5($_POST['password'] )."<br>";
// $sql = "INSERT INTO tbl_admin SET 
//   full_name = '$full_name',
//   username = '$username',
//   password = '$password' ";


// $conn = mysqli_connect('localhost', 'root', '' , 'onlinefood') or die(mysqli_error());
// $db = mysqli_select_db($conn, 'onlinefood') or die (mysqli_error());
// //$res = mysqli_query($conn , $sql) or die (mysqli_error());
// }
// ?>
<?php
if(isset($_POST['submit']))
{
  echo  $fullname = $_POST['full_name'] ; 
  echo  $user_name = $_POST['username'];
  echo  $pass_word =  md5($_POST['password'] );


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinefood";
    
    $sql = "INSERT INTO `tbl_admin` (`id`,`full_name`, `username`, `password`) VALUES (NULL,'$fullname', '$user_name', '$pass_word')";
    $result = $conn->query($sql);
    if ($result) {
      $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
    } else { 
    echo "Error: " . $sql . "<br>" . $conn->error;
        }
//    $res = mysqli_query($conn , $sql) or die (mysqli_error());
    // Check connection
    
}
?>