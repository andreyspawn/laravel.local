@extends('admin.admin_layout')

@section('content')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <!-- Default box -->
            {{ Form::open(['route' => 'department.store','method' => 'post']) }}
            <div class="box box-solid box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить новое подразделение</h3>
                </div>
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Подразделение хозяин</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            {{Form::select('parent_id',$departments,null,['class'=>'form-control select2',
                                    'style'=>'width:100%', 'placeholder' => 'не выбрано'])}}
                        </div>

                        <label class="col-form-label">Новое подразделение</label>
                        <div class="input-group" title="Введите наименование подразделения">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input id="department_name" type="text" class="form-control input" name="department_name" placeholder="Input department name">
                            <small id="HelpBlock"></small>
                        </div>

                        <label class="col-form-label">Должность руководителя</label>
                        <div class="input-group"  title="Выберите должность">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            {{Form::select('position_id',$positions,null,['class'=>'form-control select2',
                                    'style'=>'width:100%', 'placeholder' => 'не выбрано'])}}
                        </div>

                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
{{--                    <button class="btn btn-default" onclick="history.back();">Назад</button>--}}
                    <a href="{{route('department.index')}}" class="btn btn-info">Назад</a>
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
