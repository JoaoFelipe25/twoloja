<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?> <?php wp_title('|'); ?> </title>
  <?php wp_head(); ?>
</head>
<body  <?php body_class() ?>>

<?php
// url da pasta img
$img_url = get_stylesheet_directory_uri() . "/img";
// total de itens no carrinho
$cart_count = WC()->cart->get_cart_contents_count();
?>

<header class="header container">
  <a href="/">  <img src="<?= $img_url; ?>/handel.svg"  alt="handel" />  </a>

  <div class="busca">
 
    <form action="<?php bloginfo('url'); ?>" method="get">
      <input type="text" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>">
      <input type="text" name="post_type" value="product" class="hidden">
      <input type="submit" id="searchbutton" value="Buscar">
    </form>

  </div>

  <nav class="conta">
    <a href="/minha-conta" class="minha-conta">Minha Conta</a>
    <a href="/carrinho" class="carrinho">Carrinho
        <?php if($cart_count){ ?>
      <span class="carrinho-count"> <?= $cart_count;?> </span>
        <?php } ?>
    </a>

  </nav>
</header>

<?php 
  wp_nav_menu([
    'menu' => 'categorias',
    'container' => 'nav',
    'container_class' => 'menu-categorias'

  ])
  
?>