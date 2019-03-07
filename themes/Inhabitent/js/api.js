
(function($) {
    console.log('workin00');
    $('#close-comments').on('click', function(event){
        event.preventDefault();
        console.log('workin0');
        //old ajax method is in the course slides
        $.ajax({
            method: 'post',
            url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id ,
            data: {
                comment_status: 'closed'
            },
            beforeSend: function(xhr) {
                console.log('workin');
                xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
            }
        }).done(function(response){
            alert('Success! I am the king of WordPress. Kneel before me.');
        });
    });
})( jQuery );