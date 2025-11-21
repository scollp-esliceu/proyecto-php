<?php
$pageTitle = "Acerca";
require __DIR__ . "/includes/header.php";
?>
<main>
<section id="contacte" class="contacte">
 
<div class="login wrap">
  <div class="h1">Contacte</div>
    <form action="create_contact.php" method="POST">
      <input placeholder="El teu nom" id="nom" name="nom" type="text">
      <input pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="El teu correu electrònic" id="email" name="email" type="text">
      <input placeholder="El teu telèfon" id="telefon" name="telefon" type="tel">
      <textarea class="input" name="missatge" cols="30" rows="10" id="missatge" placeholder="Introdueix el teu missatge"></textarea>
      <input value="Envia →" class="btn" type="submit">
    </form>
  </div>
</section>
</main>
<?php
require __DIR__ . "/includes/footer.php";