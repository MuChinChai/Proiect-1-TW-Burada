<!DOCTYPE html>
<html lang="ro">
<head>
<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8" />
  <title>Magazinu de inventii</title>
</head>

<body class="acasa">

<?php $nume_clasa = "acasa"; include 'header.php'; ?>

  <main>
    <aside>
      <h2>Promoții & Noutăți</h2>
      <p>- Reducere 10% la toate karturile electrice!</p>
      <p>- Modele noi de tancuri radio disponibile din decembrie.</p>
    </aside>

    <div>
      <section id="karturi">
        <h2>Karturi populare</h2>
        <div class="products">
          <div class="product-card">
            <a href="karturi.php#kart1"><h3>Kart Sport 250cc</h3></a>
            <p>Viteză, control și distracție pentru toate vârstele.</p>
          </div>
          <div class="product-card">
            <a href="karturi.php#kart2"><h3>Kart Electric Urban</h3></a>
            <p>Silentios, ecologic și perfect pentru începători.</p>
          </div>
        </div>
      </section>

      <section id="tancuri">
        <h2>Tancuri pentru colecționari</h2>
        <div class="products">
          <div class="product-card">
            <a href="tancuri.php#tanc1"><h3>Tanc T 34 85</h3></a>
            <p>Radiocomandă, sunete și mișcare realistă.</p>
          </div>
          <div class="product-card">
            <a href="tancuri.php#tanc2"><h3>Tanc Panzerkampfwagen VI Tiger</h3></a>
            <p>Trage bile și are turela rotativă 360°.</p>
          </div>
        </div>
      </section>

      <section id="despre">
        <h2>Despre noi</h2>
        <p>Suntem pasionați de suspensii, roți și tancuri. Importăm și vindem produse de calitate pentru pasionați și colecționari.</p>
      </section>

      <section id="contact">
        <h2>Contact</h2>
        <p>Email: contact@karttanks.ro</p>
        <p>Telefon: 0723 123 456</p>
      </section>
    </div>
  </main>
	
  <?php include 'footer.php'; ?>
	<script src="cart.js"></script>
</body>
</html>
