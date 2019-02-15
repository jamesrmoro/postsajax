<?php

function loadAjax( $atts ){
	return "<div class='list-posts-js'></div><div class='scroll-js' style='display: block;border:1px solid red;position: fixed;right:50px;bottom: 50px;height:20px;width: 100px;'></div>";
}
add_shortcode( 'ajaxPosts', 'loadAjax' );

add_action( 'wp_ajax_nopriv_postsList', 'postsList' );

function postsList(){ ?>
  <?php
  include (TEMPLATEPATH . '/modules/ajaxPosts/config.php');
  $page = $_GET['page'];
  $args = [
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'paged' => $page
  ];
  $posts = new WP_Query($args);
  $totalPages = $posts->max_num_pages;?>

    <?php if ($posts->have_posts()): ?>
      <?php while($posts->have_posts()) : $posts->the_post(); ?>
      <div class="item">
      	<?php include (TEMPLATEPATH . '/modules/ajaxPosts/content.php'); ?>
      </div>
  <?php endwhile; ?>
    <?php else: ?>
      <p class="posts-notfound">Nenhum post</p>
    <?php endif ?>

    <!-- <?php if ($totalPages > 0) { ?>
      <ul>
        <?php for ($i=1; $i <= $totalPages; $i++) { ?>
          <li class="page-item"><?php echo $i; ?></li>
        <?php } ?>
      </ul>
    <?php } ?> -->
<?php die();
}