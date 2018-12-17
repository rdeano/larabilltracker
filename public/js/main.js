$(document).ready(function() {


    $(document).on("click","#btnAddAmountdue", function() {
          var monthid = $(this).data('id');

          $("#monthid").val(monthid);
    })

})
