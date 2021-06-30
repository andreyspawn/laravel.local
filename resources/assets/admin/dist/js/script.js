$(document).ready(function ()
{
    $("#example1").DataTable();

    //Initialize Select2 Elements
    $(".select2").select2();

    //Date picker
    $('#datepicker1').datepicker({
        autoclose: true
    });

    $('#datepicker2').datepicker({
        autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal').iCheck({
         checkboxClass: 'icheckbox_minimal-blue'
     });

    $(".fa-remove").mouseenter(function () {
        $(this).css("border","solid 2px blue")
    });
    $(".fa-remove").mouseleave(function () {
        $(this).css("border","none")
    });

    $(".content-wrapper").on("click",".emp",function (event) {
        $.ajax({
            method: "POST",
            url: "/employee/delete/" + id,
            data:
        });
    });
})


// function deletePost(id, csrfToken) {
//     let answer = confirm('Are you sure?');
//     if (answer === true)
//         $.ajax({
//             type: "DELETE",
//             url: "/admin/posts/" + id,
//             data: {
//                 "_token": csrfToken,
//                 "id": id
//             }
//         }).done(
//             $('#PostsTable tbody').on('click', '.delete', function () {
//                 $('#PostsTable').DataTable().row($(this).parents('tr') ).remove().draw();
//             }))
// }
