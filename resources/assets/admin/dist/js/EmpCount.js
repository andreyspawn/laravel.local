$(document).ready(function ()
{
    $.ajax({
        type: "GET",
        url: "lists/" + $(this).attr("value") + "/edit",
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        beforeSend: function() {
            $('#esecond-not-found').remove();
        },
        success: function (data) {
            $("#update-id").val(data['id']);
            $("#update-efirst").val(data['efirst']);
            $("#update-esecond").val(data['esecond']);
            $('#update-form').show();
        },
    });
})
