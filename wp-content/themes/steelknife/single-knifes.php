    <?php get_header(); ?>
    <link href="<?php bloginfo('template_directory');?>/css/goods/goods.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/goods/goods_media.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory');?>/js/goods.js"></script>
    <div class="container-fluid">
      <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_sidebar(); ?>
        <div class="wrap_content">
          <div class="row">
            <div class="col-md-7 col-sm-6">
              <div class="goods"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
            </div>
            <div class="col-md-5 col-sm-6">
              <div class="description">
                <h1><?php the_title(); ?></h1>
                <div class="buttons">
                  <button class="buy"><?php echo(get_post_meta($post->ID, 'ЦЕНА', true)); ?>Р</button>
                  <button class="youtube active">смотреть обзор на youtube</button>
                </div>
                <div class="property">
                  <div><span class="name">марка стали</span><span class="value"><?php echo(get_post_meta($post->ID, 'СТАЛЬ', true)); ?></span></div>
                  <div><span class="name">длина клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ДЛИНА КЛИНКА', true)); ?></span></div>
                  <div><span class="name">общая длина</span><span class="value"><?php echo(get_post_meta($post->ID, 'ОБЩАЯ ДЛИНА', true)); ?></span></div>
                  <div><span class="name">ширина клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ШИРИНА КЛИНКА', true)); ?></span></div>
                  <div><span class="name">толщина обуха</span><span class="value"><?php echo(get_post_meta($post->ID, 'ТОЛЩИНА ОБУХА', true)); ?></span></div>
                  <div><span class="name">длина рукояти</span><span class="value"><?php echo(get_post_meta($post->ID, 'ДЛИНА РУКОЯТИ', true)); ?></span></div>
                  <div><span class="name">материал рукояти</span><span class="value"><?php echo(get_post_meta($post->ID, 'МАТЕРИАЛ', true)); ?></span></div>
                  <div><span class="name">твердость клинка</span><span class="value"><?php echo(get_post_meta($post->ID, 'ТВЕРДОСТЬ', true)); ?></span></div>
                </div>
                <div class="about_knife">
                <?php the_content(); ?>
                </div>
                <div class="mailto">
                  <button>напишете нам</button>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="see_also_wrap">
              <h2>Смотрите также</h2>
              <div class="knife_item">
                <?php 
                $args = array(
                  'post_type' => 'knifes',
                  'orderby' => 'rand',
                  'posts_per_page' => 4, 
                );
                $posts = get_posts($args);
                if ($posts) {
                  foreach ($posts as $post) : 
                    setup_postdata ($post); ?>
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
                      <div class="price"><?php echo(get_post_meta($post->ID, 'ЦЕНА', true)); ?>Р</div>
                      <a href="https://youtube.com"><div class="youtube">YouTube</div></a>
                    </div>
                  </a>
                  <?php
                  endforeach;
                  wp_reset_postdata();
                }
                ?>
              </div>
            </div>
          </div>
          	<?php endwhile; ?>
			<?php endif; ?>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?> 
  </body>
</html>