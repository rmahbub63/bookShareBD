
$(document).ready(function() {
           //Change in continent dropdown list will trigger this function and
           //generate dropdown options for subcategory dropdown
           $(document).on('change','#category', function() {
            var category_id = $(this).val();
            if(category_id != "") {
             $.ajax({
              url:"../functions/ajax_functions.php",
              type:'POST',
              data:{category_id:category_id},
              success:function(response) {
                   // var resp = $.trim(response);
                   if(response != '') {
                     $("#subcategory").removeAttr('disabled','disabled').html(response);
                   } else {
                     $("#subcategory").attr('disabled','disabled').html(response);
                   }
                 }
               });
           } else {
             $("#subcategory").attr('disabled','disabled').html(response);
           }
         });
         });