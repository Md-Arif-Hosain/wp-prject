<!-- Header Link -->
<?php 
include_once 'header.php';
?>

<!-- End Page -->

<!-- Contact Form -->
<section class="popup pt-60 d-flex justify-content-center">
  <div class="container justify-content-center">
    <div class="row">
    <div class="form-popup" id="myForm">
      <div class="col-md-12 col-12 form-container">
      <button type="button" class="btn cancel float-end" onclick="closeForm()"> <i class="bi bi-x-lg fs-1"></i></button>
        <h2 class="text-center">Let’s talk</h2>
        <p class="text-center pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita,quas ab adipisci.</p>

  <div class="row pt-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="Name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" aria-label="Last name">
  </div>
</div>
<div class="row">
  <div class="col-12 pt-3">
    <input type="text" class="form-control" placeholder="Subject" aria-label="First name">
  </div>
  <div class="col-12 mb-3 mt-3">
      <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Message*"></textarea>
  </div>

  <div class="col-12 text-center pb-5">
    <button type="submit" class="btn btn-primary">Send Mail</button>
  </div>
</div>
      </div>
      </div>
    </div>
  </div>
</section>



<!-- Footer Link -->
<?php 
include_once 'footer.php';

?>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>