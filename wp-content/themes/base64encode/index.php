<?php
/** 
 * Template Name: Home Page
 */
get_header();
?>
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark bg-green">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Decode Base64 Format </h1>
      <p class="lead my-3">Lets decode "BASE64" text format into text for readability.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Base64 Decoder
      </h3>
      <div class="form-group">
		<textarea class="form-control txt1" id="base64" rows="5" placeholder="Input base64 here..."></textarea>
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
		<button type="button" class="w-10 btn btn-lg btn-primary bg-green" id="decode">Decode!</button>
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
