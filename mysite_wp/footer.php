<footer>
  <!-- footer-nav -->
<nav class="footer-nav">
<?php
wp_nav_menu(
array(
'depth' => 1,
'theme_location' => 'footer', 
'container' => 'nav',
'menu_class' => 'footer-nav-items',
)
);
?>
</nav><!-- header-nav -->

    <div class="footer-social" >
      <ul class="footer-social-items">
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
      </ul>  
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="./js/main.js"></script>
</body>
</html>
