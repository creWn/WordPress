<?php get_header(); ?>
<link href="<?php bloginfo('template_directory');?>/css/catalog/catalog.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/css/catalog/catalog_media.css" rel="stylesheet">
<script src="<?php bloginfo('template_directory');?>/js/catalog.js"></script>
    <div class="container-fluid">
      <div class="row">
        <?php get_sidebar(); ?>
        <div class="wrap_content">
        <?php $cats = get_categories(); ?>
          <div class="tab_wrapper">
            <div class="tab_menu clearfix">
              <ul>
                <?php 
                foreach ($cats as $cat) {
                  if ($passed != 1) {
                    echo '<li class="active">'.$cat->category_description.'</li>'; 
                  } else {
                    echo "<li>".$cat->category_description."</li>";
                  }
                  $passed = 1;
                }
                ?>
              </ul>
              <div class="black_line"></div>
            </div>
            <div class="tab_content clearfix">
              <?php $i = 0;
              foreach ($cats as $cat) {
                $catid = $cat->cat_ID;
              ?>
              <div class="knife_item_wrap <?php if ($i == 0) echo ' active'; ?>">
                <div class="knife_item">
                  <?php $i++;
                  $args = array(
                    'category'    => $catid,
                    'numberposts' => -1,
                    'post_type'   => 'knifes'
                  );
                  $posts = get_posts($args);
                  if ($posts) :
                    foreach ($posts as $post) : setup_postdata ($post);
                  ?>
                  <a href="<?php echo get_permalink(); ?>">
                    <div class="knife_wrap clearfix"><img src="<?php the_post_thumbnail_url(); ?>"/>
                      <div class="knife_info">
                        <div><span class="name">марка стали</span><span class="value"><?php echo(get_post_meta($post->ID, 'СТАЛЬ', true)); ?></span></div>
                        <div><span class="name">длина клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ДЛИНА КЛИНКА', true)); ?></span></div>
                        <div><span class="name">общая длина</span><span class="value"><?php echo(get_post_meta($post->ID, 'ОБЩАЯ ДЛИНА', true)); ?></span></div>
                        <div><span class="name">ширина клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ШИРИНА КЛИНКА', true)); ?></span></div>
                        <div><span class="name">толщина обуха</span><span class="value"><?php echo(get_post_meta($post->ID, 'ТОЛЩИНА ОБУХА', true)); ?></span></div>
                        <div><span class="name">длина рукояти</span><span class="value"><?php echo(get_post_meta($post->ID, 'ДЛИНА РУКОЯТИ', true)); ?></span></div>
                        <div><span class="name">материал рукояти</span><span class="value"><?php echo(get_post_meta($post->ID, 'МАТЕРИАЛ', true)); ?></span></div>
                        <div><span class="name">твердость клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ТВЕРДОСТЬ', true)); ?></span></div>
                      </div>
                      <h3><?php echo get_the_title(); ?></h3>
                      <div class="price"><?php echo(get_post_meta($post->ID, 'ЦЕНА', true)); ?>Р</div><a href="https://youtube.com">
                        <div class="youtube active">YouTube</div></a>
                    </div>
                  </a>
                  <?php 
                  endforeach;
                  wp_reset_postdata();
                  endif;
                  ?>
                </div>
              </div>
              <?php 
              } 
              ?>
            </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?> 
  </body>
</html>