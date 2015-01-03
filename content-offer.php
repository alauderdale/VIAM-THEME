<?php
/**
 * @package boiler
 */
?>

<section class='offer-section' id='offer'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='text-center'>
          <h2 class="quarter-margin-bottom">
            Find out your local wireless connectivity score
          </h2>
          <p class="lead">
            with a complimentary VIAM Coverage Report
          </p>
        </div>
<!--         <form class='form-inline text-center' role='form'>
          <div class='form-group'>
            <input class='form-control' placeholder='Firat Name'>
          </div>
          <div class='form-group'>
            <input class='form-control' placeholder='Last Name'>
          </div>
          <div class='form-group'>
            <input class='form-control' placeholder='Email'>
          </div>
          <div class='form-group'>
            <input class='form-control' placeholder='Zip Code'>
          </div>
          <button class='btn btn-primary' type='submit'>Submit</button>
        </form> -->
        <?php echo do_shortcode( '[contact-form-7 id="348" title="Contact form 1"]' ) ?>
        <div class='text-center double-margin-top'>
          <img src='<?php bloginfo( 'template_url' ); ?>/images/home/report.png'>
        </div>
      </div>
    </div>
  </div>
</section>