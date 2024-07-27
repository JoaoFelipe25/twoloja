<footer class="footer">
  <img src="<?= get_stylesheet_directory_uri(); ?>/img/handel-white.svg" alt="handel">

  <div class="container footer-info">
      <section>
        <h3>Páginas</h3>
        <?php
          wp_nav_menu([
            'menu' => 'footer',
            'container' => 'nav',
            'container_class' => 'footer-menu'
          ])
        ?>
      </section>

      <section>
        <h3>Redes Sociais</h3>
        <?php
          wp_nav_menu([
            'menu' => 'redes',
            'container' => 'nav',
            'container_class' => 'footer-redes'
          ])
        ?>
      </section>

      <section>
        <h3>Pagamentos</h3>
        <ul>
          <li>Cartão de Credito</li>
          <li>Boleto Bancario</li>
          <li>pague seguro</li>
        </ul>
      </section>
  </div>

  <?php 
    $countries = wc() -> countries;
    $base_address = $countries -> get_base_address();
    $base_city = $countries -> get_base_city();
    $base_state = $countries -> get_base_state();
    $complete_address = "$base_address, $base_city, $base_state";
  ?>
  <small class="footer-copy">handel &copy; <?= date('y'); ?> - <?= $complete_address; ?> </small>
</footer>




<?php wp_footer(); ?>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/slide.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>