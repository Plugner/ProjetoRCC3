<?php
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php include("view/head.php"); ?>

<body>
  <!-- Header -->
  <?php include("view/header.php"); ?>
  <!-- Banners -->
  <div class="banners">
    <div class="banner" id="banner-1">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Promoção de Notebooks</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="banner" id="banner-2">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Lançamento de Acessórios</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="banner" id="banner-3">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Câmeras Potentes</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- Products -->
  <div class="products-grid">
    <h2>Produtos Novos</h2>
    <div class="products-grid-container">
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-1.jpg" alt="Produto 1">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-2.jpg" alt="Produto 2">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-3.jpg" alt="Produto 3">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-4.jpg" alt="Produto 4">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
    </div>
  </div>

  <button class="btn-prev" onclick="prevSlide()">❮</button>
  <button class="btn-next" onclick="nextSlide()">❯</button>

  <!-- Deal -->
  <div class="deal-container">
    <div class="deal-container-content">
      <div class="deal-container-content-timer">
        <div id="days" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Dias</span>
        </div>
        <div id="hours" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Horas</span>
        </div>
        <div id="minutes" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Minutos</span>
        </div>
        <div id="seconds" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Segundos</span>
        </div>
      </div>
      <h2 class="deal-container-content-title">Promoção de Fone Gamer</h2>
      <p class="deal-container-content-subtitle">Toda a linha gamer com 50% de desconto</p>
      <button class="btn">Comprar Agora</button>
    </div>
  </div>

  <!-- Mais Vendidos -->
  <div class="products-grid">
    <h2>Mais Vendidos</h2>
    <div class="products-grid-container">
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-5.jpg" alt="Produto 5">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-6.jpg" alt="Produto 6">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-7.jpg" alt="Produto 7">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-8.jpg" alt="Produto 8">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
    </div>
  </div>
  <!-- Newsletter -->
  <div class="newsletter-container">
    <h2>Assine a nossa <span>Newsletter</span></h2>
    <form action="">
      <input type="email" name="email" id="email" placeholder="Digite o seu e-mail">
      <input type="submit" class="btn btn-half" value="Assinar">
    </form>
    <div class="social-media">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-pinterest-p"></i>
    </div>
  </div>
  <!-- Footer -->
  <? include_once "view/footer.php"; ?>
  <script src="js/carrosel.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/contador.js"></script>
</body>

</html>