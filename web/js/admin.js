$(function(){
   $(' .delete').on('click', function(event){
        event.preventDefault();
       var url = $(this).attr('href');

       var confirm_delete = confirm('Вы действительно хотите удалить элемент?');

       if(confirm_delete) {

           $.post(url).done(function (answer) {
               var data = $.parseJSON(answer);
               console.log(data);
               if (data.status == 'ok') {
                   $('.'+ data.type + '[data-element-id="' + data.element_id +'"]').fadeOut(2000);
               } else {
                   alert(data.msg);
               }
           }).fail(function (answer) {
               alert('error');
           });
       }
   });

    $('#create-carwash').on('click', function(e){
        e.preventDefault();
        var url = $(this).closest('form').attr('action');
        var form = $('#create-carwash-form').serialize();
        $.post(url, form).done(function(response){
            var data = $.parseJSON(response);
            console.log(data);
        });
    })

    //add carwash owner row
    $('.add-carwash-owner').on('click', function(){
        var clone_element = $('.one-owner:first').clone();
        console.log(clone_element);
        $('.one-owner:last').after(clone_element);
        clone_element.find('input').attr('id', Math.random()*10000+Date.now().toString()).val('');
    });
});