
<!------START DON'T CHANGE ORDER HEAD,MANU,FOOTER----->
<!---BLOCK 01--->
<?php 
   
include_once("config.php");

$title ="STUDENT COURSEREENROLL | SLGTI"; //YOUR HEAD TITLE CREATE VARIABLE BEFORE FILE NAME
include_once("head.php");
include_once("menu.php");

?>
<!----END DON'T CHANGE THE ORDER---->


<!---BLOCK 02--->
<!---START YOUR CODER HERE----->


<!-----END YOUR CODE----->
<!-- form start---->
<?php
    $stid = $coid = $year = $enroll = $exit = null;

    // edit coding

    // update coding

    // insert coding

?>

<div class="ROW">
        <div class="col text-center">
            <h2>StudentReEnrollment</h2>   
        </div>
    </div><BR>

    <form class="needs-validation" novalidate action="">

    <div class="form-row">
          <div class class="col-md-1"></div>
          <div class="col">
          <p style="font-size: 20px; font-weight: 700; border-bottom: 2px solid #aaa;">ENTROLLMENT</p>
          </div>  
    </div><BR>

    <div class="form-row">
          <div class="col-md-6 mb-3"></div>
          <div class="col-md-3 mb-3">
          <p>STUDENT_ID</p>
          </div>  
    </div>
                     
    <div class="form-row">

        <div class="col-md-5 mb-3">
          <div class="form-row">
          <label for="stid"> Student_Id : </label>
          <input type="text" class="form-control" id="stid" name="stid" value="" placeholder="" aria-describedby="stidPrepend" required>
          </div>

          <div class="form-row">
          <label for="coid"> Course_Id : </label>
          <input type="text"  class="form-control" id="coid" name="coid" value="" placeholder="" aria-describedby="coidPrepend" required>
          </div>

          <div class="form-row">
          <label for="type"> Course Type : </label>
          <input type="text" class="form-control" id="type" name="type" value="" placeholder="" aria-describedby="eryearPrepend" required>
          </div>

          <div class="form-row">
          <label for="eyear"> Entroll Year : </label>
          <input type="text" class="form-control" id="eryear" name="eyear" value="" placeholder="" aria-describedby="eryearPrepend" required>
          </div>

          <div class="form-row">
          <label for="edate"> ReEntroll Date : </label>
          <input type="text" class="form-control" id="edate" name="edate" value="" placeholder="" aria-describedby="eryearPrepend" required>
          </div>

          <div class="form-row">
          <label for="Exdate"> ReExit Date : </label>
          <input type="text" class="form-control" id="Exdate" name="Exdate" value="" placeholder="" aria-describedby="eryearPrepend" required>
          </div>

        </div>
        
        <div class="col-md-3 mb-3"></div>
    </div><BR><BR><BR>



 <div class="table-row">
    <div class="col-md-09 mb-3">
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">student Id</th>
            <th scope="col">Course Id</th>
            <th scope="col">Course Type</th>
            <th scope="col">Accademic Year</th>
            <th scope="col">ReEnroll Date </th>
            <th scope="col">ReExit Date </th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div>


<!---BLOCK 03--->
<!----DON'T CHANGE THE ORDER--->
<?php 
include_once("FOOTER.PHP"); 
?>