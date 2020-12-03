<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= dir ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= dir ?>assets/css/bootstrap.min.css">
  <script type="text/javascript" src="<?= dir ?>assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= dir ?>cargas/">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" src="<?= dir ?>assets/js/jquery.min.js"></script>
</head>

<body>
  <div id="container">
    <header id="header">
      <div id="logo">
        <a href="<?= dir ?>" class="inicio"><img src="<?= dir ?>assets/css/imgs/Logo.gif" alt="fire_countries" id="logotipo"></a>
      </div>
    </header>
  </div>
  <div id="content">
  <?php $categorias = Utils::showCategorias(); ?>
  <nav id="menu">
    <ul>
      <li>
        <a href="<?= dir ?>">Inicio</a>
      </li>
      <?php while ($cat = $categorias->fetch_object()) : ?>
        <li>
          <a href="<?= dir ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
        </li>
      <?php endwhile; ?>
      <input type="text" class="trep" placeholder="Buscar" class="espacio-texto">
    </ul>
  </nav>

  