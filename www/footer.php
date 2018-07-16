     
      <?php if(!is_front_page()) : ?>

      <!-- Sidebar -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')) : ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
<?php endif; ?> 
    </div><!-- /.container --> 

<footer class="blog-footer">
      <p>&copy; <?php Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
  </body>
</html>