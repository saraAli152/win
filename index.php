<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
 include './inc/db_close.php';

?>

<?php include_once './parts/header.php' ?>
    

 

        <div class="frist  position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
       
        <div class="col-md-5 p-lg-5 mx-auto my-5 ">
        <img src="images/win.png"class=" w-50" alt="win img">
        <h1 class="display-4 fw-normal ">Win with sara</h1>
        <h3 id="countdown"></h3>
        <p class="lead fw-normal">Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        
        </div>
      <h2>Follow these steps</h2>
        <div class="container">
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Enter  your frist name</li>
  <li class="list-group-item">Enter  your last name</li>
  <li class="list-group-item">Enter  your  E-mail</li>
 
</ul>
</div>
</div>
<div class="position-relative  text-center ">

<div class="col-md-5 p-lg-5 mx-auto my-5">
<form   action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="mb-3">
    <label for="fristname"   class="form-label">Frist name</label>
    <input type="text"name="fristname" class="form-control" id="fristname" value="<?php echo $fristname?>" aria-describedby="emailHelp">
    <div  class="form-text error"> <?php echo $errors['fristNameError']?></div>
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" name="lastname" class="form-control" id="lastname"value="<?php echo $lastname?>" aria-describedby="emailHelp">
    <div  class="form-text error"><?php echo $errors['lastNameError']?></div>
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email?>"aria-describedby="emailHelp">
    <div class="form-text error"><?php echo $errors['emailError']?></div>
  </div>

  <button type="submit" name="submit" value="send" class="btn btn-primary">Submit</button>
</form>
</div>
        </div>
      
  
   <div class="loader-con">
   <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
   <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary">
Choice A Winner
</button>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel"> Winner</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) :?>
        <h5 class="display-3 text-center card-title "><?php echo htmlspecialchars($user['fristname']).' '.htmlspecialchars($user['lastname'])?></h5>
    </div>
  </div>
  <?php endforeach?>
       
      </div>
   
    </div>

</div>

</div>
<?php include_once './parts/footer.php' ?>