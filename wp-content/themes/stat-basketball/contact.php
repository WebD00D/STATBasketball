<?php

/**
 * Template Name: Contact Page
 *
 */

?>


<?php get_header(); ?>

<div class="page-wrapper">
  <section id="contact-page">
  	<div class="row">
  		<div class="col s12 ">
  				<h1 >CONTACT</h1>
          <hr class="stat-hr" />
          <h5><span style="color:#D87A23">T</span>: +1 (804) 555-5555</h5>
          <h5><span style="color:#D87A23">E</span>: HELLO@STATBASKETBALL.COM</h5>
  		</div>
      <div class="col s12 contact-form" >
        <h6>Name</h6>
        <input type="text" class="statInput">
        <h6>Phone</h6>
        <input type="text" class="statInput">
        <h6>Email</h6>
        <input type="text" class="statInput">
        <h6>Message</h6>
        <textarea type="text" class="statInput" style="height:150px"></textarea>
      </div>
      <div class="col s12 contact-form" >
          	<a href="#" class="btn stat-btn--black">SUBMIT <i class="material-icons right">arrow_forward</i></a>
      </div>
  	</div>
  </section>

</div>



<?php get_footer(); ?>
