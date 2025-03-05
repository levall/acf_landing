$(document).ready(function () {
    $(".maf_element").on('click', function () {
        let dataRequest = {
            action: 'open_details',
            maf_id: $(this).data('id'),
        };

        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: dataRequest,
            beforeSend: function () {
            },
            success: function (data) {
                if (data.success) {
                    $('#popup-details .content').html(data.html);
                    $('#popup-details').show();
                }
            }
        });
    })

    $("#popup_details .close").on('click', function () {
        $('#popup-details').hide();
    })


    $('.header__burger').click(function (event) {
        $('.header__burger').toggleClass('active');
        $('.header').toggleClass('active');
        $('body').toggleClass('hidden');
        $('.main_nav').slideToggle();
    });

    $("body").on("click", ".link-to", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $(".wpcf7-response-output").hide();

        setTimeout(() => {
            location = '/thank-you';
        }, 10);
    }, false );

    document.addEventListener( 'wpcf7invalid', function( event ) {
      $(".wpcf7-response-output").hide();
    }, false);

    document.querySelectorAll('#menu-header-menu a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            let href =  this.getAttribute('href');

            if( $('body.home').length === 0 ){
                window.location.href = '/' + href;
            }

            document.querySelector(href).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

})