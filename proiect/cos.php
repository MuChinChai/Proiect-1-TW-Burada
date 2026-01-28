<!DOCTYPE html>
<html lang="ro">
<head>
<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8" />
  <title>Coș de Cumpărături - Magazinu de inventii</title>
</head>

<body class="cos">
  <?php $nume_clasa = "detalii-produs"; include 'header.php'; ?>

  <div class="container">
    <section id="cart-details">
      <h2>Produsele din coș</h2>
      
      <div id="cart-items-container">
        </div>

      <div id="cart-summary">
        <p class="cart-total">Total General: <span id="cart-total-price">0</span> lei</p>
        <button onclick="clearCart()" class="clear-cart">Golește Coșul</button>
      </div>

    </section>
  </div>

  <?php include 'footer.php'; ?>

  <script src="cart.js"></script>


</body>
</html>