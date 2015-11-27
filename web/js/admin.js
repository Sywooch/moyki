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
});