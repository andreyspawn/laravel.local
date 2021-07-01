$(document).ready(function ()
{
    $("#empTable").DataTable();
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

    function deletePost111(id) {
        $.ajax({
            method: "GET",
            url: "/employee/ajaxdelete/" + this.id,
            data: {
                "id": this.id
            }
        })
            .done(function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
                $('#empTable1 tbody').on('click', '.delete', function () {
//                 $('#empTable1').DataTable().row($(this).parents('tr') ).remove().draw();

                })
                    .fail(function () {
                        alert(error);
                    })
                    .always(function () {
                        alert("Я отработал идентификатор id " + this.id);
                    })
            });
    }
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
