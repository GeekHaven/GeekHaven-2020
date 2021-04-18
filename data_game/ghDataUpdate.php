<?php
    // include './addmember.php'
    require "../database/member_info.php";    
    session_start();
?>

/*
    as per the last commit for the file - './geekhaven/geekhavenData.php'
    only the admin can read this data
    I think, in that file - there is no check performed for the 'admin'

    here, it looks like anyone can run this SQL query
*/

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $des = $_POST['description'];
        $query = "UPDATE geekhavenInfo SET `name`='$name',`description`='$des'";
        $query_run = mysqli_query($connection,$query);
        header('location:../geekhaven/geekhavenData.php');             
    }
?>