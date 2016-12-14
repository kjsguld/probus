  <!-- footer start -->
  <footer class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <p class="col-xs-12 col-sm-4">
          <?php bloginfo('name'); ?> &copy; <?php echo (date('Y')<2015) ? '2015 - '.date('Y') : date('Y') ; ?>
        </p>
        <address class="col-xs-12 col-sm-4">
          <a href="https://www.google.dk/maps/place/Hollufgårds+Allé+6,+5220+Odense+SØ/@55.354862,10.4390862,17z/">Hollufgårds Alle 6</a>
          5220 Odense SØ <br>
          <strong>Telefon:</strong> 31 63 38 00<br>
          <strong>E-mail:</strong> <a href="mailto:#">info@probusfyn.dk</a><br>
          CVR: 31886716
        </address>
        <a href="https://ejendomsforeningen.dk/om-os/administratorliste/fyn" class="col-xs-12 col-sm-4">
          <img src="<?php echo get_template_directory_uri() . '/assets/efd_logo.png'; ?>" alt="ejendomsforening danmark" id="edf_logo" class="img-responsive">
        </a>
      </div>
    </div>
  </footer>
  <!-- footer end -->
  <?php wp_footer();?>
  </body>
</html>
