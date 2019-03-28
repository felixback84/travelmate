// Perform AJAX login/register on form submit

jQuery(document).ready(function ($) {

    $('form#signin, form#signup').on('submit', function (e) {
        if (!$(this).valid()) return false;
        $('p.status', this).show().text(ajax_auth_object.loadingmessage);
             action = 'ajaxsignin';
             email = $('form#signin #email-signin').val();
             password = $('form#signin #password-signin').val();
             security = $('form#signin #security-signin').val();
        if ($(this).attr('id') == 'signup') {
             action = 'ajaxsignup';
             email = $('#email-signup').val();
             username = $('#username-signup').val();
             password = $('#password-signup').val();
             security = $('#security-signup').val(); 
 }  
 ctrl = $(this);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
            data: {
                'action': action,
                'username': username,
                'password': password,
                'email': email,
                'security': security
            },
            success: function (data) {
        $('p.status', ctrl).text(data.message);
        if (data.loggedin == true) {
                    document.location.href = ajax_auth_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });

});