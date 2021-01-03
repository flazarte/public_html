
$(document).ready(function() {
    // $(document).on('click', '.show_more_featured_posts', function() {
    //     var ID = $(this).attr('id');
    //     $('.show_more_featured_posts').hide();
    //     $('.ajax-loading').show();
    //     $.ajax({
    //         type: 'POST',
    //         url: memecustom.ajax_url,
    //         data: { action: 'memes_load_more', id: ID },
    //         success: function(html) {
    //             $(ID).remove();
    //             $('.view-more').remove();
    //             $('.abc').append(html);
    //             inito();
    //             $('.ajax-loading').hide();
    //         }
    //     });
    // });

//base65 decode
$(document).on('click', '#decode', function() {
    var base64 = $('textarea#base64').val();
          $.ajax({
            type: 'POST',
            url: base64custom.ajax_url,
            data: { 
                action: 'utf_8', 
                convert_utf_8: base64 
            },
            success: function(html) {
               // $('.abc').append(html);
               $('.abc').html(html);
            }
        });       
});

//base64 encode
$(document).on('click', '#encode', function() {
    var text = $('textarea#base64').val();
          $.ajax({
            type: 'POST',
            url: base64custom.ajax_url,
            data: { 
                action: 'utf_8_encode', 
                convert_utf_8_text: text 
            },
            success: function(html) {
               $('.abc').html(html);
            }
        });
       
    });
    
});