<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') : ?>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Registro completado correctamente</strong>
  </div>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Registro fallido, introduce bien los datos</strong>
  </div>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>
<?php while ($prod = $productos->fetch_object()) : ?>

  <div class="product">
    <a href="<?= dir ?>producto/ver&id=<?= $prod->id ?>">
      <?php if ($prod->imagen != null) : ?>
        <img src="<?= dir ?>cargas/<?= $prod->imagen ?>" class="zoom">
      <?php else : ?>
        <img src="<?= dir ?>assets/imgs/fondo.jpg">
      <?php endif; ?>
      <h3><?= $prod->nombre ?></h3>
    </a>
    <h3>$<?= $prod->precio ?></h3>
    <a href="<?= dir ?>carrito/add&id=<?= $prod->id ?>" class="btn">Comprar</a>
    <a href="<?= dir ?>producto/ver&id=<?= $prod->id ?>&idc=<?= $prod->categoria_id ?>" class="btn">Info</a>
  </div>
<?php endwhile; ?>

<div class="anuncios">
  <br>
  <div class="containercar">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="<?=dir?>cargas/camara.jpg" style="width:100%" class="imagencarusel">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="<?=dir?>cargas/camara4.jpg" style="width:100%" class="imagencarusel">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="<?=dir?>cargas/ANRBD200915ABZF2.jpg" style="width:100%" class="imagencarusel">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="<?=dir?>cargas/camara4.jpg" style="width:100%" class="imagencarusel">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="<?=dir?>cargas/camara.jpg" style="width:100%" class="imagencarusel">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="<?=dir?>cargas/ANRBD200915ABZF2.jpg" style="width:100%" class="imagencarusel">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/camara.jpg" style="width:100%" onclick="currentSlide(1)" alt="Camara YI">
      </div>
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/camara4.jpg" style="width:100%" onclick="currentSlide(2)" alt="Camara exterior">
      </div>
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/ANRBD200915ABZF2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Audifonos inalambricos">
      </div>
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/camara4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Camara exterior">
      </div>
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/camara.jpg" style="width:100%" onclick="currentSlide(5)" alt="Camara YI">
      </div>
      <div class="column">
        <img class="demo cursor imagencam" src="<?=dir?>cargas/ANRBD200915ABZF2.jpg" style="width:100%" onclick="currentSlide(6)" alt="Audifonos inalambricos">
      </div>
    </div>
  </div>
  <br>
</div>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>