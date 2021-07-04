@extends('admin.admin_layout')

@section('content')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <!-- Default box -->
            {{ Form::open(['route' => 'position.store','method' => 'post']) }}
            <div class="box box-solid box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить новую должность</h3>
                </div>
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Должность</label>
                        <div class="input-group" title="Введите наименование должности">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input id="position_name" type="text" class="form-control input" name="position_name" placeholder="Input position name">
                            <small id="HelpBlock"></small>
                        </div>
                        <label class="col-form-label">Оклад</label>
                        <div class="input-group"  title="Введите оклад">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span></span>
                            <input id="salary" type="number" class="form-control input" name="salary" placeholder="Salary">
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
{{--                    <button class="btn btn-default" onclick="history.back();">Назад</button>--}}
                    <a href="{{route('position.index')}}" class="btn btn-info">Назад</a>
                    <button class="btn btn-success pull-right" type="submit">Добавить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{ Form::close() }}

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection('content')
