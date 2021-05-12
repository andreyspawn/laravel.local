$(document).ready(function ()
{
    $("#example1").DataTable();

    //Initialize Select2 Elements
    $(".select2").select2();

    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal').iCheck({
         checkboxClass: 'icheckbox_minimal-blue'
     });
})
