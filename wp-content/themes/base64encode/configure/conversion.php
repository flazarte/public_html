<?php

//utf-8 decoding conversion
add_action('wp_ajax_nopriv_utf_8', 'utf_8');
add_action('wp_ajax_utf_8', 'utf_8');
function utf_8(){
    if(isset($_POST["convert_utf_8"]) && !empty($_POST["convert_utf_8"])){
        $base64 = $_POST["convert_utf_8"];
        $str =  base64_decode($base64);
        ?>
        <h3 class="pb-4 mb-4 font-italic border-bottom">
			Result
		</h3>
		<div class="form-group">
        <textarea class="form-control txt1" id="base64value" rows="5"  readonly>Decoded base64 value is : &#13;&#10;--------------------- &#13;&#10;<?php echo $str; ?></textarea>
		</div>
        <?php  
    }
    die;
}

//utf-8 encoding conversion
add_action('wp_ajax_nopriv_utf_8_encode', 'utf_8_encode');
add_action('wp_ajax_utf_8_encode', 'utf_8_encode');
function utf_8_encode(){
    if(isset($_POST["convert_utf_8_text"]) && !empty($_POST["convert_utf_8_text"])){
        $base64 = $_POST["convert_utf_8_text"];
        $str =  base64_encode($base64);
        ?>
        <h3 class="pb-4 mb-4 font-italic border-bottom">
			Result
		</h3>
		<div class="form-group">
        <textarea class="form-control txt1" id="base64value" rows="5"  readonly>Encoded text value is : &#13;&#10;--------------------- &#13;&#10;<?php echo $str; ?></textarea>
		</div>
        <?php  
    }
    die;
}
