<?php
$fristname='';
$lastname='';
$email='';

$errors =array(
    'fristNameError'=>'',
    'lastNameError'=>'',
    'emailError'   =>'',
);

if(isset($_POST['submit'])){

     $fristname=$_POST['fristname'];
     $lastname=$_POST['lastname'];
     $email=$_POST['email'];

       if(empty($fristname)){
        $errors['fristNameError']='please enter frist name';
       }
       elseif(empty($lastname)){
         $errors['lastNameError']='please enter last name';
       }elseif(empty($email)){
        $errors['emailError']='please enter email';
       }
       elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         $errors['emailError']='please enter correct email';
       }
//no errors
       if(!array_filter($errors)){
        //no code into input
        $fristname = mysqli_real_escape_string($conn,$_POST['fristname']);
        $lastname  = mysqli_real_escape_string($conn,$_POST['lastname']);
        $email     = mysqli_real_escape_string($conn,$_POST['email']);

  //query  in sql
        $sql="INSERT INTO USERS(fristname,lastname,email)
       VALUES ('$fristname','$lastname','$email')";

      if(mysqli_query($conn,$sql) ){

        header('location: index.php');
        }else{
              echo 'Error:' .mysqli_errno($conn);
        }
       }
    }
  
?>