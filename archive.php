<?php
get_header();
get_template_part('parts/template/mainvisual/archive');
get_template_part('parts/breadcrumb');
?>


<main class="content_area">
  <div class="inner">
    <div class="contents_box">
      <?php
      if (have_posts()) :
      ?>
        <div class="contents_list">
          <?php
          while (have_posts()) :
            the_post();

            get_template_part('template/content/archive');

          endwhile;
          ?>
        </div><!-- /.p-entries -->

        <?php get_template_part('parts/pagenation', 'archive'); ?>
      <?php
      endif;
      ?>
    </div>
  </div>
</main>



<?php get_footer(); ?>