<?php
/*
Template Name: blog
*/
?>


<?php get_header(); ?>

<div id="background-blog"></div>   

<div class="container" id="blog">

  <div id="content">

    <div id="posts">
      
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      query_posts('cat=-' .$id .'&paged='.$paged); ?>
      <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

      <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

      <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

      <div class="posts-info">
        <ul>
          <li class="autor"><i class="fa fa-user"><?php the_author(); ?></i></li>
          <li class="views"><i class="fa fa-eye"><?php if(function_exists('the_views')) { the_views(); } ?></i></li>
          <li class="coment"><i class="fa fa-comment"><?php comments_number('0','1','%'); ?>comments</i></li>
        </ul>
      </div>
      <!-- FIM DE POST-INFO -->
      <div class="entry-excerpt">
        <?php the_excerpt(); ?>
      </div>
      <!-- FIM DE ENTRY-EXCERPT -->  
      <?php endwhile; else: ?>
      <?php endif; ?>
      <div class="list-post">
        <?php echo paginate_links( $args ); ?>
      </div> 
      <!-- FIM DE LIST POST -->
    </div>
    <!-- FIM DE POSTS -->
  </div>
  <!-- FIM DE CONTENT -->
  <?php get_sidebar(); ?>
</div>
<!-- FIM DE CONTAINER BLOG -->
<?php get_footer(); ?>