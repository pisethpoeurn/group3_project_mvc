<?php
     function m_view() {
        include "connection.php";
        $query="SELECT * FROM tbl_users";
        $result=mysqli_query($conn,$query);
        $rows=[];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $recode){
                $rows[] = $recode;
            }
        }
        return $rows ;
    }
    function m_add($data) {
        $fullname = $_POST['name'];
        $gender = $_POST['sex'];
        $email = $_POST['email'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        include "connection.php";
        $query = "INSERT INTO student(name,gender,email,startDate,endDate)
                    VALUES('$fullname','$gender','$email','$startDate','$endDate')";
                // var_dump($query);die();
        $result = mysqli_query($conn,$query);
        var_dump($result);die();
        
        return $result;
    }

    function m_delete() {
        include "connection.php";
        $id = $_GET['id'];
        $query = " DELETE FROM tbl_users WHERE user_id = '$id'";
        // var_dump($query);die();
        $result = mysqli_query( $conn,$query);
        return $result;
    }

    function m_detail(){
        include "connection.php";
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user_id=$id");
        return $query;
    
    }
?>