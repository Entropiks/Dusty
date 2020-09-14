<?php
  get_header();
?>

    <article>

      <?php
        // Pull in content from wp-admin > pages > page content
        if( have_posts() ){
          while( have_posts() ) {
            the_post();
            the_content();
          }
        }
      ?>
      <!-- Home Content -->
      <!-- <div class="container mt-4">
        <div class="row">
          <div class="col-sm">
            <h3>Title Two</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
          </div>
        </div>
      </div>
      <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-sm">
            <h3>Title One</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
          </div>
          <div class="col-sm">
            <h3>Title Two</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
          </div>
        </div>
      </div> -->
    </article>


    <?php
    get_footer();
     ?>

    <!-- Load Footer -->
    <?php
      wp_footer();
    ?>
  </body>
</html>
