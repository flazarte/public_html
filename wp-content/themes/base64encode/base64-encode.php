<?php
/** 
 * Template Name: Encode Base64 Template
 */
get_header();
?>
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark bg-green">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Encode Base64 Format </h1>
      <p class="lead my-3">Lets encode "BASE64" format for security encryption.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <h2 class="pb-4 mb-4 font-italic border-bottom">
        Base64 Encoder
      </h2>
      <div class="form-group">
        <textarea class="form-control txt1" id="base64" rows="5" placeholder="Input text here..."></textarea>
        <br>
         <!-- dropdown -->
			<div class="btn-group">
			<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				UTF-8
			</button>
			<div class="dropdown-menu">
			<a class="dropdown-item" id="utf_8">UTF-8</a>
			</div>
			</div>
			<label>Set of  characters.</label>
		<!-- end dropdown -->
        <br><br>
		<button type="button" class="w-10 btn btn-lg btn-primary bg-green" id="encode">Encode!</button>
	  </div>
	  <br>
	  <!-- Result is Here -->
	  <div class="abc"></div>
	  <br>
       <!-- Content Page Area -->
       <?php echo the_content(); ?>
    <!-- End Content Page Area -->
    </div>

    <div class="col-md-4">
  
      <!-- tools area -->
      <?php get_template_part( 'template/tools' ); ?>

    </div>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php
get_footer();
?>
