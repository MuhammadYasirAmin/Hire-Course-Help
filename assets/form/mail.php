<?php
    if(isset($_POST['leads_sbmit_btn'])){
        $host = "premium167.web-hosting.com";
                    $username="cruiwbab_hire_course_helper";
                    $password="&DxHn0aoghWw";
                    $db = "cruiwbab_hire_course_help";
                    
                    $connect = new mysqli($host, $username, $password, $db);
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }
                    
                    // Code For modal Form
                    $c_name = mysqli_real_escape_string($connect, $_REQUEST['Lead_Name']);
                    $c_email = mysqli_real_escape_string($connect, $_REQUEST['Lead_Email']);
                    $c_num = mysqli_real_escape_string($connect, $_REQUEST['Lead_Phone']);
                    $c_sub = mysqli_real_escape_string($connect, $_REQUEST['Lead_Subject']);
                    $c_msg = mysqli_real_escape_string($connect, $_REQUEST['Lead_Message']);
                    
                    $sql = "INSERT INTO banner_form (Name, Email, phone, topic, message) VALUES ('".$c_name."', '".$c_email."', '".$c_num."', '".$c_sub."', '".$c_msg."')";
                    if(mysqli_query($connect, $sql)){
                      mysqli_close($connect);
                		    
                			$hosta = "premium167.web-hosting.com";
                			$usernamea="cruiwbab_CRM_User";
                			$passworda="+P8yl:MmA2o";
                			$dba = "cruiwbab_Cruiser_CRM";
                
                			$connecta = new mysqli($hosta, $usernamea, $passworda, $dba);
                			if ($connecta->connect_error) {
                				die("Connection failed: " . $connecta->connect_error);
                			}
                			date_default_timezone_set("Asia/Karachi");
                			$date = date('F j, Y, g:i a');
                			$username = "From Google";
                            $lead_number = 0;
                			$lead_Numb = "";
                			$abbr = "HCH";
                            $array = array();
                			$querya = "SELECT * FROM Lead_OCG ORDER BY ID DESC LIMIT 1";
                			$resulta = mysqli_query($connecta, $querya);
                			while ($row = mysqli_fetch_array($resulta)){
                				$array[] = $row;
                			}
                			$lead_number = $array[0]['Lead_numb'];
                
                			if (empty($lead_number)) {
                				$lead_number = 1000;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}else {
                				$lead_number = $lead_number + 1;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}
                
                
                			$client_name = $_POST['Lead_Name'];
                			$client_phone = $_POST['Lead_Phone'];
                			$client_email = $_POST['Lead_Email'];
                			$brand_select = "Hire Course Help";
                			$team_select = "From PPC";
                			$description = $_POST['Lead_Message'];
                			
                			$queryaa = "INSERT INTO `Lead_OCG` (Lead_Code, Client_Name, Email_address, Phone_Number, website, Team, description, Created_at, Created_by, Lead_numb) VALUES ('$lead_Numb', '$client_name', '$client_email', '$client_phone', '$brand_select', '$team_select', '$description', '$date', '$username', '$lead_number')";
                		
                		    if(mysqli_query($connecta, $queryaa)){
                		        $ClientName = $_POST["Lead_Name"];
        $PhoneNumber = $_POST["Lead_Phone"];
        $EmailAddress = $_POST["Lead_Email"];
        $SelectedBrand = "Hire Course Help";
        $LeadComments = $_POST["Lead_Message"];
        $UserName = "From PPC";
        
        $url = "https://mmactd.com/assets/php/APIs/api-insert-data.php"; 
        $client = curl_init($url);
        $form_data = array(
                                'ClientName'  => $ClientName,
                                'PhoneNumber' => $PhoneNumber,
                                'EmailAddress'  => $EmailAddress,
                                'SelectedBrand' => $SelectedBrand,
                                'LeadComments'  => $LeadComments,
                                'UserName' => $UserName
                            );
        curl_setopt($client, CURLOPT_POST, true);
                    
        curl_setopt($client, CURLOPT_POSTFIELDS, json_encode($form_data));
                    
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
                    
        $response = curl_exec($client);
                    
        curl_close($client);
                		        header("location: /ASAP-Contact-You.php");
                                exit();
                		    } else{
                		        echo "ERROR: Could not able to execute " .$queryaa. "<br>" . mysqli_error($connecta);
                		    }
                   } else{
                       
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
                   }
    }
?>