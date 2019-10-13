$(document).ready(function() {

    $('.remove').click(function() {

        var element = $(this);

        $.ajax({
            url:"/admin/company/block/"+$(this).parent().attr('data-company'),
            success: function(data) {
                $(element).parent().parent().remove();
            }
        });
    });

});