<!DOCTYPE html>
<html lang="ro">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8" />
	<title>Magazinu de inventii</title>
</head>

<body class="detalii-produs">
  <?php $nume_clasa = "detalii-produs"; include 'header.php'; ?>

  <div class="container">

    <section id="kart1">
      <h2>Kart Sport 250cc - Editie speciala Castelgy</h2>
      <div class="product-detail">
        <div class="product-image">
			<img src="poze/kart_250cc.png">
        </div>
        <div class="product-info">
			<p>Proiectarea si productia acestui kart a fost sponsorizata de Castelgy. Un kart comfortabil si rapid.</p>
			<p class="price">Preț: 2 200 lei</p>
			<button onclick="addToCart('kart1', 'Kart Sport 250cc', 2200)">Adauga in cos</button>
        </div>
      </div>
    </section>

    <section id="kart2">
      <h2>Kart Electric Urban - Editie speciala Whatsapp</h2>
      <div class="product-detail">
        <div class="product-image">
          <img src="poze/cart_electric.png">
        </div>
        <div class="product-info">
          <p>Kart special pentru cei carora le plac senzatiile tari. Editie limitata cu decal Whatasp.</p>
          <p class="price">Preț: 3 700 lei</p>
		  <button onclick="addToCart('kart2', 'Kart Electric Urban', 3700)">Adaugă în coș</button>
        </div>
      </div>
    </section>

  </div>

  <?php include 'footer.php'; ?>
  <script src="cart.js"></script>
</body>
</html>
