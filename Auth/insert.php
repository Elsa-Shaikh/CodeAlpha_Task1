<?php
include "conn.php";

if(isset($_POST['btn'])){
   // first Step Information
    $email = $_POST['uemail'];
    $name = $_POST['uname'];
    $phone = $_POST['uphone'];
    $gender = $_POST['ugender'];
    $city = $_POST['ucity'];
    $education = $_POST['ueducation'];
    $institute = $_POST['uuni'];
    $department = $_POST['udepart'];
    // Second Step opinion
    $future = $_POST['future'];
    $future_Pak = $_POST['fpak'];
    $integrate = $_POST['integrate'];
    $example = $_POST['example'];
    $idea = $_POST['idea'];
    $revolution = $_POST['revo'];
    $daily = $_POST['daily'];
    $impact = $_POST['impact'];
    $disadvantage = $_POST['dis'];
    $society = $_POST['society'];
    // Third Step Selection
    $select_1 = $_POST['safe'];
    $select_2 = $_POST['usefull'];
    $select_3 = $_POST['rate'];
    $select_4 = $_POST['preferences'];
    $select_5 = $_POST['choose'];
    $select_6 = $_POST['ever'];
    $select_7 = $_POST['leading'];
    
$sql = "INSERT INTO internship_task_1
(Email,Name,Phone,Gender,City,Education,Institute,Department,
Future,Future_Pak,Integration,Examples,Idea,Revolution,Daily_Life,Impact,Disadvantages,Society,
Safe_Human,Usefull,Rate,Preferences,Choice,Ever_Used,Leading_Towards
) 
VALUES(
    '$email','$name','$phone','$gender','$city','$education','$institute','$department',
    '$future','$future_Pak','$integrate','$example','$idea','$revolution','$daily','$impact','$disadvantage','$society',
    '$select_1','$select_2','$select_3','$select_4','$select_5','$select_6','$select_7'
)";  
$run = mysqli_query($conn,$sql);
if($run){
  $_SESSION['status'] = 'Response has been Sent!';
  $_SESSION['status_code'] = 'success';
  header("Location: http://localhost/Internship_Task_1/index.php");
}
else{
    $_SESSION['status'] = 'Failed to Sent!';
    $_SESSION['status_code'] = 'error'; 
    header("Location: http://localhost/Internship_Task_1/index.php");
}

}

mysqli_close();


?>