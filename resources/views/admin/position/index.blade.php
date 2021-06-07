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
                <table id="example1" class="table table-bordered table-hover">
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
                        <td class="col-lg-1"><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
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


