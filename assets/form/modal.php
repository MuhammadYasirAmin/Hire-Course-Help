<?php
                    $flag;
                    // Connection with Data Base
                    $host = "premium167.web-hosting.com";
                    $username="cruiwbab_hire_course_helper";
                    $password="&DxHn0aoghWw";
                    $db = "cruiwbab_hire_course_help";
                    
                    $connect = new mysqli($host, $username, $password, $db);
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }
                    
                    // Code For modal Form
                    $c_name = mysqli_real_escape_string($connect, $_REQUEST['modal_name']);
                    $c_email = mysqli_real_escape_string($connect, $_REQUEST['modal_email']);
                    $c_num = mysqli_real_escape_string($connect, $_REQUEST['modal_number']);
                    $c_sub = mysqli_real_escape_string($connect, $_REQUEST['modal_subject']);
                    $c_msg = mysqli_real_escape_string($connect, $_REQUEST['modal_msg']);
                    
                    $sql = "INSERT INTO modal_form (Name, Email, phone, topic, message) VALUES ('".$c_name."', '".$c_email."', '".$c_num."', '".$c_sub."', '".$c_msg."')";
                    if(mysqli_query($connect, $sql)){
                      $flag=true;
                   } else{
                       $flag=false;
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
                   }
                     
                    // close connection
                    mysqli_close($connect);
                    
                        $name = $_POST['modal_name'];
                        $email = $_POST['modal_email'];
                        $numb = $_POST['modal_number'];
                        $sub = $_POST['modal_subject'];
                        $message = $_POST['modal_msg'];
                        header('Content-Type: application/json');
                        
                        $content="From: $name \nEmail: $email \nPhone Number: $numb \nSubject: $sub \nMessage: $message \n\nInformation Get From Modal Form";
                        $recipient = "info@takeyourcourses.com";
                        $mailheader = "From: $email \r\n";
                        mail($recipient, $subject, $content, $mailheader) or die("Error!");
                        exit();
?>