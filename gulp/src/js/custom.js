$(document).ready(function (){
    $(".catalog_element").on('click', function (){
        let dataRequest = {
            action: 'open_details',
            maf_id: $(this).data('id'),
        };

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: dataRequest,
                beforeSend : function(){
                },
                success: function (data) {
                    if (data.success) {
                       $('#popup-details .content').html(data.html);
                       $('#popup-details').show();
                    }
                }
            });
    })

    $("#popup_details .close").on('click', function (){
        $('#popup-details').hide();
    })



    $('.header__burger').click(function(event) {
        $('.header__burger').toggleClass('active'); 
        $('.header').toggleClass('active'); 
        $('body').toggleClass('hidden'); 
        $('.main_nav').slideToggle();  
    });

    $("body").on("click",".link-to", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
      });
})