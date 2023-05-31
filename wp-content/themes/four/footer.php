<footer class="containerp">
  <div class="footer_list_container container">
    <?php
    get_template_part('partials/footer/_footer-col1');
    get_template_part('partials/footer/_footer-col2');
    get_template_part('partials/footer/_footer-col3')
    ?>
  </div>
  <?php
  get_template_part('partials/footer/_footer-icons');
  ?>
</footer>
<?php wp_footer() ?>
</body>

</html>