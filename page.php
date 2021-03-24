<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="mt-4"><?php the_title(); ?></h1>
        <p class="lead">        
          Publicado <?php the_date();?> 
        </p>
        <hr>
        <div class="mx-auto w-50">
          <?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
        </div>
        <hr>
        <!-- Post Content -->
        <?php the_content(); ?>
        <hr>
        <?php endwhile; else : ?>
            <p>Lo siento, no hemos encontrado ningún post.</p>
        <?php endif; ?>
      </div>
      <!-- Sidebar Widgets Column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>