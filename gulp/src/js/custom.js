$(document).ready(function (){
    $(".open_details").on('click', function (){
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

})