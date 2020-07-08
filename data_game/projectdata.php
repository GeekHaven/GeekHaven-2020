<?php
    require "../database/wingsdb.php";    
    session_start();

?>

<?php
            if(isset($_POST['add_project'])){
                $wingID = $_POST['wings'];
                $member_id = $_SESSION['member_id'];
                if($wingID!=''&$member_id!=''){
                    $project_name = $_POST['project_name'];
                    $pro_link = $_POST['pro_link'];
                    $blog_link = $_POST['blog_link'];
                    $src_code = $_POST['source_code'];
                    $des = $_POST['description'];
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $query = " INSERT INTO Projects VALUES('$wingID','$member_id','$project_name','$pro_link','$blog_link','$src_code','$des','$image')";
                    $query_run = mysqli_query($connection,$query);
                    
                    header('location:../geekhaven/project.php');   
                }
            }
            if(isset($_POST['select_pro_btn'])){
                $name = $_POST['projects'];
                $query = "SELECT * FROM Projects WHERE `project_name`='$name'";
                $query_run = mysqli_query($connection,$query);
                $ex = mysqli_num_rows($query_run);
                echo $ex;
                if(mysqli_num_rows($query_run)>0){
                    $query = "DELETE FROM Projects WHERE `project_name`='$name'";
                    $query_run = mysqli_query($connection,$query);
                    
                    header('location:../geekhaven/project.php');                
                }else{
                    echo "error : CANNOT REMOVE";
                }
            }
?>