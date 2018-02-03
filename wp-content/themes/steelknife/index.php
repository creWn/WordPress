    <?php get_header(); ?>
   
    <div class="container-fluid">
      <div class="row">
        <?php get_sidebar(); ?>
        <div class="wrap_content">
          <?php get_template_part( 'content', get_post_format() ); ?>
          
        </div>
      </div>
    </div>
    <?php wp_footer(); ?> 

  </body>
</html>