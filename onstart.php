<?php
    $server = "sql208.epizy.com";
    $username = "epiz_26360820";
    $password = "jJABjoAiW6OqP";
    $dbname = "epiz_26360820_geekhav";
    $connection = mysqli_connect($server,$username,$password,$dbname);
    mysqli_select_db($connection,$dbname);
    echo $connection;
    $query = "CREATE TABLE social_handles (
        `social_handles_id` varchar(255),
        `github` varchar(255),
        `mail` varchar(255),
        `facebook`varchar(255),
        `instagram` varchar(255),
        `codechef` varchar(255),
        `codeforces` varchar(255),
        `linkedin` varchar(255),
        `hackerrank` varchar(255),
        `hackerearth` varchar(255),
        `twitter` varchar(255),
        PRIMARY KEY (social_handles_id)       
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE member (
        `name` varchar(255),
        `roll_no` varchar(255),
        `image` longblob,
        `description`varchar(12000),
        `member_id` varchar(255),
        `hof` varchar(255),
        `social_handles` varchar(255),
        `cred_id` varchar(255),
        `post` varchar(255),
        `wing` varchar(255),
        `session` varchar(255),
        PRIMARY KEY (member_id),
        FOREIGN KEY (social_handles) REFERENCES social_handles(social_handles_id)   
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE past_members (
        `name` varchar(255),
        `roll_no` varchar(255),
        `image` longblob,
        `description`varchar(12000),
        `member_id` varchar(255),
        `hof` varchar(255),
        `social_handles` varchar(255),
        `post` varchar(255),
        `wing` varchar(255),
        `session` varchar(255),
        PRIMARY KEY (member_id),
        FOREIGN KEY (social_handles) REFERENCES social_handles(social_handles_id)   
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE credentials (
        `credentialsID` varchar(255),
        `username` varchar(255),
        `password` varchar(255),
        `admin_value`varchar(255),
        `member_id` varchar(255),
        PRIMARY KEY (credentialsID),
        FOREIGN KEY (member_id) REFERENCES member(member_id)   
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE wings (
        `wing_id` varchar(255),
        `wing` varchar(255),
        `info` varchar(12000),
        `logo` longblob,
        `image` longblob,                
        PRIMARY KEY (wing_id)
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE Projects (
        `wing_id` varchar(255),
        `member_id` varchar(255),
        `project_name` varchar(255),
        `project_link`varchar(255),
        `blog_link`varchar(255),
        `source_code_link`varchar(255),
        `description`varchar(12000),
        `image` longblob,        
        FOREIGN KEY (wing_id) REFERENCES wings(wing_id),
        FOREIGN KEY (member_id) REFERENCES member(member_id)
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE blogs (
        `wing_id` varchar(255),
        `member_id` varchar(255),
        `blog_title` varchar(255),
        `description`varchar(12000),
        `blog_link`varchar(255),        
        `image` longblob,        
        FOREIGN KEY (member_id) REFERENCES member(member_id),
        FOREIGN KEY (wing_id) REFERENCES wings(wing_id)        
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE announcements (
        `member_id` varchar(255),
        `name` varchar(255),
        `organizer`varchar(255),
        `venue`varchar(255),        
        `date`varchar(255),        
        `time`varchar(255),        
        `topic`varchar(255),        
        `details`varchar(12000),        
        `link`varchar(255),        
        `attachment`varchar(255),        
        `image` longblob,        
        FOREIGN KEY (member_id) REFERENCES member(member_id)
    );";

    mysqli_query($connection,$query) ;

    $query = "CREATE TABLE contact (
        `made_on` varchar(255),
        `first_name` varchar(255),
        `last_name`varchar(255),
        `description`varchar(12000),        
        `email`varchar(255),        
        `mobile`varchar(255),        
        `gender`varchar(255)               
    );";

    mysqli_query($connection,$query) ;
    
    $query = "INSERT INTO social_handles VALUES('00000','','','','','','','','','','')";
    $query_run = mysqli_query($connection,$query);                             
    $query = "INSERT INTO member VALUES ('', '', '', '', '22222', '', '00000', '11111', 'coordinator', 'exWing', '2020')";
    $query_run = mysqli_query($connection,$query);     
    $query = "INSERT INTO credentials VALUES('11111','exUser','exPass','1','22222')";
    $query_run = mysqli_query($connection,$query);
    $query = "INSERT INTO wings VALUES('33333','X','Only for Overall coordinators','','')";
    $query_run = mysqli_query($connection,$query);

    echo "Database created";

?>
