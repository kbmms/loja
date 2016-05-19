<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suporte Eventos</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>

<div class="box">
<header class="header-nav">
<div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">A Empresa</a></li>
          <div class="hidden-xs img-topo-logo-centro"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-topo.png" height="240" width="257" alt=""></div>
          <li class="imagem-logo-topo hidden-xs"></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>


 </div>
</header>
<div class="slider-box">

        <div class="owl-carousel">
    <div class="item">
        <div class="text-slider">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mesa-espelhada121.jpg" alt="">

    </div>
    <div class="item">
        <div class="text-slider">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mesa-espelhada121.jpg" alt="">
    </div>
    </div>
</div>


<div class="row">
    <div class="dropdown-search-box container-fluid">
        <div class="dropdown col-md-3 col-md-offset-3 col-sm-2 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <span class="busca-por-produto">Buscar por produto</span>
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Todas as Categorias
            <span class="caret"></span>
          </button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-4 col-md-5 col-md-offset-0  form-search">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>

    </div>
</div>