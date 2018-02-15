<?php
  session_start();
  include "includes/header.php";
  include "includes/navigation.php";

  if (isset($_POST['saveProfile'])) {
    $profilepic = $_FILES['profilepic']['name'];
    $profilepic_temp = $_FILES['profilepic']['tmp_name'];
    move_uploaded_file($profilepic_temp, "img/profilepic/$profilepic");
  }
?>

<div class="content-fluid">
  <div class="row">

    <form class="col-12 col-sm-8 col-lg-4 login" action="settings.php" method="post" enctype="multipart/form-data">
      <div class="custom-file">
        <input type="file" name="profilepic" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Välj fil...</label>
        <div class="invalid-feedback">Något gick snett!</div>
      </div>
      <button type="submit" name="saveProfile" class="col-12 btn2 btn-outline-light">Spara</button>
    </form>

  </div>
</div>



<?php include "includes/footer.php"; ?>