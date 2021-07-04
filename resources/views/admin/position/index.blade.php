@extends('admin.admin_layout')


@section('content')
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
{{--    <section class="content-header">--}}
{{--        <h1>--}}
{{--            Blank page--}}
{{--            <small>it all starts here</small>--}}
{{--        </h1>--}}
{{--        <ol class="breadcrumb">--}}
{{--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--            <li><a href="#">Examples</a></li>--}}
{{--            <li class="active">Blank page</li>--}}
{{--        </ol>--}}
{{--    </section>--}}

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-solid box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Список должностей</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{ route('position.create') }}" class="btn btn-success">Добавить</a>
                </div>
                <table id="posTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Должность</th>
                        <th>Зарплата</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($positions as $position)
                    <tr>
                        <td class="col-lg-1">{{$position->id}}</td>
                        <td>{{$position->position_name}}</td>
                        <td class="col-lg-1">{{$position->salary}}</td>
                        <td class="col-lg-1">
                            <a href="edit.html" class="fa fa-pencil"></a>
{{--                            <a href="{{route('position.delete',$position->id)}}" class="fa fa-remove"></a>--}}
                            <a href="#!" id="{{$position->id}}" onclick="deletePost({{$position->id}});" class="fa fa-remove pos"></a>
                        </td>
                    </tr>
                    @endforeach
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection('content')

<script type="text/javascript">
    function deletePost(id) {
        $.ajax({
            method: "GET",
            url: "/admin/position/ajaxdelete/" + id,
            data: {
                "id": id
            }
        })
            .done( function (data,textStatus,jqXHR){
                    console.log(data);
                    console.log(textStatus);
                    console.log(jqXHR);
                },
                // $('#empTable1 tbody').on('click', '.emp', function () {
                //  $('#empTable1').DataTable().row($(this).parents('tr') ).remove().draw();
                //          alert("Wont delete" + id);
                //          }
                $('#posTable').on('click','.pos',function() {
                    $('#posTable').DataTable().row($(this).parents('tr')).remove().draw()
                    //alert("Wont delete" + id)
                })

            )
            .fail (function () {
                alert('Error!!!')
            })
        // .always( function () {
        //     alert("Я отработал идентификатор id " + id)
        // })
    }
</script>
