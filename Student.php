<!------START DON'T CHANGE ORDER HEAD,MANU,FOOTER----->
<!---BLOCK 01--->
<?php 
   
include_once("config.php");

$title ="STUDENT INFORMATION | SLGTI"; //YOUR HEAD TITLE CREATE VARIABLE BEFORE FILE NAME
include_once("head.php");
include_once("menu.php");

?>
<!----END DON'T CHANGE THE ORDER---->


<!---BLOCK 02--->
<!---START YOUR CODER HERE----->


<!-----END YOUR CODE----->
<!-- form start---->
<?php
//$stid = $_SESSION['user_name'];
$stid = $title = $fname = $ininame = $gender = $civil = $email = $nic = $dob = $phone = $address = $zip = $district = $division = $province = $blood = $mode =
$ename = $eaddress = $ephone = $erelation = $enstatus = $coid = $year = $enroll = $exit = $qutype = $index = $yoe = $subject = $results = null;

?>
<br>
<div class="form-row shadow p-5 mb-5 bg-white rounded">
<h1 style="text-align:center"> SLGTI STUDENTS' INFORMATION </h1>
</div>
<form method="GET">
<div class="form-row ">
    <div class="col-md-3 mb-3">
          <input type="text" class="form-control" placeholder="Student Id"  name="stid">
    </div>
    <div class="col-md-1 mb-3">
          <button  type="submit" class="btn btn-primary btn-block" name="search" ><i class="fas fa-search"></i></button>
    </div>
  
    <div class="col-md-5 mb-3"></div>

    <div class="col-md-3 mb-3" style="float:right;">
      <a href="AddStudent.php"><button type="button" class="btn btn-outline-primary"> ADD NEW STUDENT </button><a> 
    </div>
</div><br>
</form>
<div class="form-row">
<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" width="8%"> Student Id </th>
      <th scope="col" width="18%"> Student Full Name </th>
      <th scope="col" width="10%"> Email </th>
      <th scope="col" width="5%"> NIC </th>
      <th scope="col" width="5%"> Phone No </th>
      <th scope="col" width="20%"> Address </th>
      <th scope="col" width="8%"> Action </th>
    </tr>
  </thead>
  <tbody>
  <?php

  if (isset($_GET['search'])) 
  {
  $id= $_GET['stid'];
  $sql="SELECT `student_id`, `student_title`, `student_fullname`, `student_ininame`, `student_gender`, `student_civil`, `student_email`, `student_nic`, `student_profile_img`, `student_dob`, `student_phone`, `student_address`, `student_zip`, `student_district`, `student_divisions`, `student_provice`, `student_blood`, `student_em_name`, `student_em_address`, `student_em_phone`, `student_em_relation`, `student_status` FROM `student` WHERE student_id='$id'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result)==1)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo '
      <tr style="text-align:left";>
         <td>'. $row["student_id"]."<br>".'</td>
         <td>'. $row["student_fullname"]."<br>".'</td>
         <td>'. $row["student_email"]."<br>".'</td>
         <td>'. $row["student_nic"]."<br>".'</td>
         <td>'. $row["student_phone"]."<br>".'</td>
         <td>'. $row["student_address"]."<br>".'</td>
         <td>
         <a href="AddStudent.php?edit='.$row["student_id"].'" class="btn btn-sm btn-success""><i class="far fa-edit"></i></a> |
         <a href="Student_profile.php?Sid='.$row["student_id"].'" class="btn btn-info"> <i class="fas fa-angle-double-right"></i>
         </td>
      </tr> ';
    }
  }
  else
  {
    echo "0 results";
  }
  }
  else
  {
   $sql ="SELECT s.student_id,student_title,student_fullname,student_ininame,student_gender,student_email,student_nic,student_dob,student_phone,student_address 
   FROM student s inner join student_enroll e on s.student_id=e.student_id and student_status='Active' and student_enroll_status='Following'";
   $result = mysqli_query($con, $sql);
   if (mysqli_num_rows($result)>0)
   {
     while($row = mysqli_fetch_assoc($result))
     {
       echo '
       <tr style="text-align:left";>
          <td>'. $row["student_id"]."<br>".'</td>
          <td>'. $row["student_fullname"]."<br>".'</td>
          <td>'. $row["student_email"]."<br>".'</td>
          <td>'. $row["student_nic"]."<br>".'</td>
          <td>'. $row["student_phone"]."<br>".'</td>
          <td>'. $row["student_address"]."<br>".'</td>
          <td>
          <a href="AddStudent.php?edit='.$row["student_id"].'" class="btn btn-sm btn-success""><i class="far fa-edit"></i></a> |
          <a href="Student_profile.php?Sid='.$row["student_id"].'" class="btn btn-info"> <i class="fas fa-angle-double-right"></i>
          </td>
       </tr> ';
     }
   }
   else
   {
     echo "0 results";
   }
  } 
  ?>
  </tbody>
</table>
</div>
</div>


<!---BLOCK 03--->
<!----DON'T CHANGE THE ORDER--->
<?php 
include_once("FOOTER.PHP"); 
?>