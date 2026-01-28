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

    <section id="tanc1">
      <h2>T 34 85</h2>
      <div class="product-detail">
        <div class="product-image">
          <img src="poze/t-34-85_smecher.png">
        </div>
        <div class="product-info">
          <p>Tanc smecher pentru pasionatii sigma carora le place suspensia cristi.</p>
          <p class="price">Preț: 120 000 lei</p>
		  <button onclick="addToCart('tanc1', 'T 34 85', 120000)">Adauga in cos</button>
        </div>
      </div>
    </section>

    <section id="tanc2">
      <h2>Panzerkampfwagen VI Tiger</h2>
      <div class="product-detail">
        <div class="product-image">
          <img src="poze/tiger_1_waze.png">
        </div>
        <div class="product-info">
          <p>Tanc pentru pasionatii de nebuniile ingineresti de care au avut parte firmele germane in al Doilea Mare Razboi.</p>
          <p class="price">Preț: 320 000 lei</p>
		  <button onclick="addToCart('tanc2', 'Panzerkampfwagen VI Tiger', 320000)">Adauga in cos</button>
        </div>
      </div>
    </section>

  </div>

  <?php include 'footer.php'; ?>
  <script src="cart.js"></script>
</body>
</html>
