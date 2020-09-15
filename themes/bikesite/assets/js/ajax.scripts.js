jQuery(document).ready(function($) {
/*    $(document).on( 'change', '#brand_one', function() {
        var optionVal = $(this).val();
        $.ajax({
            type: 'post',
            url: ajax_user_dependdrop_one_object.ajaxurl,
            data: {
                action: 'dependdrop_one_bike_model',
                nonce: 'yes',
                option: optionVal
            },
            success: function( result ) {
                console.log(result);
                $("#brand-model-one").html(result.substr(result.length-1, 1) === '0'? result.substr(0, result.length-1) : result);
                $('.selectpicker').selectpicker('refresh');
            }
        })
        return false;
    });*/

});

function getBikeModel(txt){
    console.log(txt);
    var optionVal = jQuery("#brand_"+txt).val();
    jQuery.ajax({
        type: 'post',
        url: ajax_user_dependdrop_one_object.ajaxurl,
        data: {
            action: 'dependdrop_one_bike_model',
            nonce: 'yes',
            option: optionVal
        },
        success: function( result ) {
            console.log(result);
            jQuery("#brand-model-"+txt).html(result.substr(result.length-1, 1) === '0'? result.substr(0, result.length-1) : result);
            jQuery('.selectpicker').selectpicker('refresh');
        }
    })
    return false;
}

