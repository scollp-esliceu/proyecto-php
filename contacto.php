<?php
$pageTitle = "Contacte";
require __DIR__ . "/includes/header.php";

// --------- GESTIÓ DEL MISSATGE D'ÈXIT O ERROR ----------
$missatge_text  = '';
$missatge_tipus = '';   // 'success' o 'error'

if (isset($_GET['status'])) {
    if ($_GET['status'] === 'success') {
        $missatge_text  = $_GET['msg'] ?? 'Gràcies! El teu missatge s\'ha enviat correctament.';
        $missatge_tipus = 'success';
    } elseif ($_GET['status'] === 'error') {
        $missatge_text  = $_GET['msg'] ?? 'Hi ha hagut un error. Torna a intentar-ho.';
        $missatge_tipus = 'error';
    }
}
?>

<link rel="stylesheet" href="/css/missatge.css">

<main>
  <section id="contacte" class="contacte">

    <!-- MISSATGE QUE APAREIX JUST DAMUNT DEL FORMULARI -->
      <?php if (!empty($missatge_text)): ?>
        <div class="missatge-alert missatge-<?= $missatge_tipus ?>">
          <p><?= htmlspecialchars($missatge_text) ?></p>
        </div>
      <?php endif; ?>

    <div class="login wrap">
      <div class="h1">Contacte</div>

      <!-- EL FORMULARI -->
      <form action="create_contact.php" method="POST" novalidate>
        <input 
          type="text" 
          name="nom" 
          id="nom" 
          placeholder="El teu nom" 
          required>

        <input pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="El teu correu electrònic" id="email" name="email" type="text">

        <input 
          type="tel" 
          name="telefon" 
          id="telefon" 
          placeholder="El teu telèfon">

        <textarea 
          name="missatge" 
          id="missatge" 
          cols="30" 
          rows="10" 
          placeholder="Introdueix el teu missatge" 
          class="input" 
          required></textarea>

        <input value="Envia →" class="btn" type="submit">
      </form>
    </div>

  </section>
</main>

<?php require __DIR__ . "/includes/footer.php"; ?>