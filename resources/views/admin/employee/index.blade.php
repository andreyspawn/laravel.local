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
        <div class="box box-solid box-default"">
            <div class="box-header with-border">
                <h3 class="box-title">Список сотрудников</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{ route('employee.create') }}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table-hover table-bordered table-striped">
                    <thead class="table-light">
                    <tr>
                        <th class="col-lg-1">ID сотрудника</th>
                        <th>Фото</th>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Подразделение</th>
                        <th>Дата приема</th>
                        <th class="col-lg-1">Действия</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <?php $num = '/images/user'.rand(1,8).'.jpg';?>
                        <td><img style="border-radius : 20% " src="{{ URL::asset($num) }}"  alt="" width="70"></td>
                        <td>{{$employee->last_name}} {{$employee->name}} {{$employee->fathers_name}}
                        </td>
                        <td>{{$employee->position->position_name}}</td>
                        <td>{{$employee->department->getlistLevel()}}</td>
                        <td>{{$employee->date_in}}</td>
                        <td><a href="edit.html" class="fa fa-pencil"></a> <a href="{{route('employee.delete',$employee->id)}}" class="fa fa-remove"></a></td>
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


