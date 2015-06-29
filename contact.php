<?php include 'template/head.php'; ?>
<?php include 'includes/mail.php'; ?>

<div class="jumbotron computingHeader">
  <div class="container center topContainer">
    <h1>Meer informatie of een offerte nodig?</h1>
    <p>Neem contact op via het onderstaande contact formulier.</p>
  </div>
</div>

<div class="computingAbout">
  <div class="container">

    <form class="form-horizontal" role="form" method="post" action="contact.php">
      <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Naam</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Voor en achternaam" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mailprovider.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Bericht</label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="12" name="message" placeholder="Typ hier uw bericht"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="human" name="human" placeholder="Het antwoord">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Verstuur bericht" class="btn btn-primary">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>
          </div>
      </div>
  </form>

  </div>
</div>

<?php include 'template/footer.php' ?>
