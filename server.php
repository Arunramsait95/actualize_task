<?php
    // Database include
    include_once('config/database.php');

    //************** Sign in ****************
    if (isset($_POST['login'])) {
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);

        if ($email == "" || $password == ""){
            $_SESSION['message'] = "Please check your inputs!";   
        }else {
        $sql = mysqli_query($con,"SELECT * FROM users WHERE email='$email' ");
        if ($sql->num_rows > 0) {
                    $data = $sql->fetch_array();
                    if (md5($password) == $data['password']) {
                                session_start();
                                $_SESSION['email']= $email;
                                header('location: admin_dashboard.php');
                    }else{
                        $_SESSION['message'] = "Please enter a valid Email  & password";
                    }
        }else {
            $_SESSION['message'] ="Please enter a valid Email!";
        }
        }
    }

    if(isset($_POST['data'])){
        // Convert the JSON String into PHP Array
        $array = json_decode($_POST['data'], true);
        $query = '';
        // Extracting row by row
        foreach($array['BOM w Example'] as $row) {
            if(count($row) == 3){
                $row["item reference number"] = NULL;
            }
            // Insert Query 
            $query .= "INSERT INTO bomdata (part_no, part_desc, ref_no, qty) VALUES 
                ('".$row['Child Part Number']."', '".$row['Child Part Description']."', 
                '".$row['item reference number']."', '".$row['quantity production']."'); "; 
        }

        mysqli_multi_query($con, $query);


    }
?>