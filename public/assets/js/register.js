/**
 * Created by root on 08/05/18.
 */
$(function(){

    // verifier si ya espace
    function hasWhiteSpace(s) {
        return s.indexOf(' ') >= 0;
    }

    // verifie email
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    // valider le data tag
    function dataTagValidate() {
        $(this).attr('data-tag', '1');
    }

    // verification du nom & prenom

    $('#user-name').on('keyup', function() {
        $('.error-name-block').html('<span class="warning"><i class="fa fa-spinner fa-spin"></i></span>');
    });

    $('#user-name').on('focusout', function() {

        if ($(this).val().length > 5){
            if (hasWhiteSpace($(this).val())) {
                $('.error-name-block').html('<span class="success"><i class="fa fa-check"></i></span>');
                $(this).attr('data-tag', '1');
            } else {
                $('.error-name-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
            }
        }else{
            $('.error-name-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        }

    });

    // verification du numero de telephone

    $('#user-mobile-view').on('keyup', function() {
        $('.error-mobile-block').html('<span class="warning"><i class="fa fa-spinner fa-spin"></i></span>');
    });

    $('#user-mobile-view').on('focusout', function() {

        var data = $(this).val();
        var url = $(this).attr('data-content') +'?phone='+data;

        console.log(url)

        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function(response){
                if(response.code == 500){
                    $('.error-mobile-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
                }else{
                    $('.error-mobile-block').html('<span class="success"><i class="fa fa-check"></i></span>');

                    $('#user-mobile').val($('#user-mobile-view').val());

                    $('#user-mobile').attr('data-tag', '1');
                }
            }
        })

        // if ($(this).val().length > 5){
        //     if (hasWhiteSpace($(this).val())) {
        //         $('.error-name-block').html('<span class="success"><i class="fa fa-check"></i></span>');
        //     } else {
        //         $('.error-name-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        //     }
        // }else{
        //     $('.error-name-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        // }

    });

    // verification du email entre par le user
    $('#user-email').on('keyup', function() {
        $('.error-email-block').html('<span class="warning"><i class="fa fa-spinner fa-spin"></i></span>');
    });

    $('#user-email').on('focusout', function() {

        if (validateEmail($(this).val())){
            $('.error-email-block').html('<span class="success"><i class="fa fa-check"></i></span>');
            $(this).attr('data-tag', '1');
        }else{
            $('.error-email-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        }

    });

    // verification du password entre par le user
    $('#user-password').on('keyup', function() {
        $('.error-password-block').html('<span class="warning"><i class="fa fa-spinner fa-spin"></i></span>');
    });

    $('#user-password').on('focusout', function() {

        if ($(this).val().length > 6){
            $('.error-password-block').html('<span class="success"><i class="fa fa-check"></i></span>');
            $(this).attr('data-tag', '1');
        }else{
            $('.error-password-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        }

    });

    // verification du password-confirm entre par le user
    $('#user-password_confirmation').on('keyup', function() {
        $('.error-password-confirm-block').html('<span class="warning"><i class="fa fa-spinner fa-spin"></i></span>');
    });

    $('#user-password_confirmation').on('focusout', function() {

        if ($(this).val().length > 6){
            if($(this).val() === $('#user-password').val()){
                $('.error-password-confirm-block').html('<span class="success"><i class="fa fa-check"></i></span>');
                $(this).attr('data-tag', '1');
            }else {
                $('.error-password-confirm-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
            }
        }else{
            $('.error-password-confirm-block').html('<span class="danger"><i class="fa fa-close"></i></span>');
        }

    });

    if ($('#user-name').attr('data-tag') == '1'){// && $('#user-mobile').attr('data-tag') == 1 && $('#user-email').attr('data-tag') == 1 && $('#user-password').attr('data-tag') == 1 && $('#user-password_confirmation').attr('data-tag') == 1){
        // $('.educa-button-register').fadeIn(100);
        console.log('ok')
    }
    // else{
    //     console.log('non ok')
    //     $('.educa-button-register').fadeOut(100);
    // }

});