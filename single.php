<?php
get_header();
get_template_part('parts/template/mainvisual/single');
get_template_part('parts/breadcrumb');
?>

<main>
  <div class="inner">
    <div class="content_single_box">
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();

          get_template_part('template/content/single');
          get_template_part('parts/pagenation', 'page');
        endwhile;
      endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>