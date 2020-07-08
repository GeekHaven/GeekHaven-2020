<?php
    require "../database/wingsdb.php";    
    session_start();

?>

<?php
            if(isset($_POST['add_blog'])){
                $wingID = $_POST['wings'];
                $member_id = $_SESSION['member_id'];
                if($wingID!=''&$member_id!=''){
                    $blog_title = $_POST['blog_title'];
                    $blog_link = $_POST['blog_link'];
                    $des = $_POST['description'];
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $query = " INSERT INTO blogs VALUES('$wingID','$member_id','$blog_title','$des','$blog_link','$image')";
                    $query_run = mysqli_query($connection,$query);
                    header('location:../geekhaven/blog.php');
                }
            }
            if(isset($_POST['select_blog_btn'])){
                $name = $_POST['blogs'];
                $query = "SELECT * FROM blogs WHERE `blog_title`='$name'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    $query = "DELETE FROM blogs WHERE `blog_title`='$name'";
                    $query_run = mysqli_query($connection,$query);
                    header('location:../geekhaven/blog.php');
                }else{
                    echo "error : CANNOT REMOVE";
                }
            }
?>