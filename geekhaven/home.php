<?php
    session_start();
    $cookie_name = $_SESSION['member_id'];
    $t = $_SESSION['time'];
    if(isset($_COOKIE[$cookie_name])){
        if($_COOKIE[$cookie_name]==$t + ($t%2408) + $cookie_name){
            echo "welcome Admin";
        }else if($_COOKIE[$cookie_name]==$t + $cookie_name){
            echo "welcome member";
        }else{
            header('location:login.php');
        }
    }else{
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>WELCOME </h1>
    </head>
    <body>
        <form action='addmember.php'>
            <input type="submit" value="Add/Remove Member">
        </form>
        <br>
        <form action='makeAdmin.php'>
            <input type="submit" value="Add Admin">
        </form>
        <br>
        <form action='makehof.php'>
            <input type="submit" value="Manage HOF">
        </form>
        <br>

        <form action='updateProfile.php'>
            <input type="submit" value="Update My Profile">
        </form>
        <br>

        <form action='wing.php'>
            <input type="submit" value="wings">
        </form>
        <br>
        <form action='project.php'>
            <input type="submit" value="Projects">
        </form>
        <br>
        
        <form action='blog.php'>
            <input type="submit" value="Blogs">
        </form>
        <br>
        
        <form action='announcement.php'>
            <input type="submit" value="Announcements">
        </form>
        <br><br>
        <form action='logout.php'>
            <input type="submit" value="Logout">
        </form>
        
    </body>
</html>