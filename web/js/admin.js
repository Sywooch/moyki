$(function(){
   $('.one-instance .delete').on('click', function(event){
        event.preventDefault();
       var url = $(this).attr('href');

       var confirm_delete = confirm('Are you sure?');

       if(confirm_delete) {

           $.post(url).done(function (answer) {
               var data = $.parseJSON(answer);
               console.log(data);
               if (data.status == 'ok') {
                   $('.each-row[data-service-id="' + data.service_id + '"]').fadeOut(2000);
               } else {
                   alert(data.msg);
               }
           }).fail(function (answer) {
               alert('error');
           });
       }
   });
});