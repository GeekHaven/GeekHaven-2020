<?php
    // include './addmember.php'
    require "../database/member_info.php";    
    session_start();

?>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $des = $_POST['description'];
        $query = "UPDATE geekhavenInfo SET `name`='$name',`description`='$des'";
        $query_run = mysqli_query($connection,$query);
        header('location:../geekhaven/geekhavenData.php');                
    }
?>