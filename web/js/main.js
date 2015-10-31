$(function(){
    //open dropdown
    $('[data-toggle=dropdown]').dropdown();

    //switch popup
    $('[data-toggle="modal"]').on('click', function(e){
        e.preventDefault();
        var popup = $(this).attr('data-target');
        //before open
        $(popup).on('show.bs.modal', function (e) {
            $('.modal').not($(popup)).modal('hide');
            $('body').removeAttr('style');
        });
    });

    //sign-up AJAX
    $('#sign-up-btn').on('click', function(e){
        e.preventDefault();
        var _this = $('#registration-form');
        var form_data = _this.serialize();
        var url = _this.attr('action');
        $.post(url, form_data).done(function(response){
            var data = $.parseJSON(response);
            $('.form-group').removeClass('has-error');
            if(data.status == 'ok'){
                $('.sign-up.success-msg').text(data.message);
                setTimeout(function() {
                    window.location.href = data.url;
                }, 1000);
            }else{
                for(var i in data.errors){
                    $('.field-registrationform-'+i).addClass('has-error');
                    $('.field-registrationform-'+i+' .help-block').text(data.errors[i]);
                }
            }
        });
    });

    //login AJAX
    $('#login-btn').on('click', function(e){
        e.preventDefault();
        var _this = $('#login-form')
        var form_data = _this.serialize();
        var url = _this.attr('action');
        $.post(url, form_data).done(function(response){
            var data = $.parseJSON(response);
            $('.form-group').removeClass('has-error');
            if(data.status == 'ok'){
                $('.login.success-msg').text(data.message);
                setTimeout(function() {
                    window.location.href = data.url;
                }, 1000);
            }else{
                for(var i in data.errors){
                    $('.field-loginform-'+i).addClass('has-error');
                    $('.field-loginform-'+i+' .help-block').text(data.errors[i]);
                }
            }
        });
    });
});