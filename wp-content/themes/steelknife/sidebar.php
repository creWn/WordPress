<div class="col-md-3">
          <aside><a href="<?php bloginfo( 'wpurl' );?>">
              <div class="rotate_logo">
                <h1>steel</h1>
                <h1><span>knife</span></h1>
                <div class="logo_wrap"><img src="<?php bloginfo('template_directory');?>/img/logo.svg"></div>
                <div class="clearfix"></div>
              </div></a>
            <nav>
              <ul>
                <li id="catalog"><a href="\knifes\">каталог</a><span></span>
                  <?php $cats = get_categories(); ?>
                  <nav>
                  <?php
                  foreach ($cats as $cat) {
                    echo "<ul>".$cat->cat_name; 
                    $catid = $cat->cat_ID;
                    $args = array(
                      'category'    => $catid,
                      'numberposts' => -1,
                      'post_type'   => 'knifes'
                    ); 
                    $posts = get_posts($args);
                    if ($posts) :
                      foreach ($posts as $post) : setup_postdata ($post);
                        echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                      endforeach;
                      wp_reset_postdata();
                    endif;
                    echo "</ul>"; 
                  }

                  ?>
                  </nav>
                </li>
                <li><a href="#">доставка и оплата</a><span></span></li>
                <li><a href="#">контакты</a><span></span></li>
              </ul>
            </nav>
            <ul class="mobile_numbers">
              <li>+7(952)839 76 84</li>
              <li>+7(952)839 76 44</li>
              <li>+7(952)839 76 30</li>
            </ul>
            <button id="write_us">напишите нам</button>
            <nav class="social_network">
              <ul>
                <li><a href="#">instagram</a><span></span></li>
                <li><a href="#">vk</a><span></span></li>
                <li><a href="#">youtube</a><span></span></li>
                <li><a href="#">ok</a><span></span></li>
              </ul>
            </nav>
          </aside>
        </div>
