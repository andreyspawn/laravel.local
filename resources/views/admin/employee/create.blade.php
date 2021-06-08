@extends('admin.admin_layout')

@section('content')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        {{ Form::open(['route' => 'employee.store','method' => 'post','files' => true]) }}

        <div class="col-md-10">

            <!-- Default box -->
            <div class="box box-solid box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Карточка нового сотрудника</h3>
                </div>


                <div class="box-body">
                    <div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="LastName">Фамилия</label>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                       placeholder="Иванов">
                            </div>
                            <div class="form-group">
                                <label for="Name">Имя</label>
                                <input type="text" class="form-control" id="Name" name="name"
                                       placeholder="Иван">
                            </div>
                            <div class="form-group">
                                <label for="FathersName">Отчество</label>
                                <input type="text" class="form-control" id="FathersName" name="fathersName"
                                       placeholder="Иванович">
                            </div>
                            <div class="form-group">
                                <label>Дата рождения:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker1" name="birthday">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Фото</label>
                                <input type="file" id="exampleInputFile" name="photo">
                                <p class="help-block">Фотография сотрудника в формате....</p>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Подразделение</label>
                            {{Form::select('department',$departments,null,['class'=>'form-control select2',
                                    'style'=>'width:100%', 'placeholder' => 'не выбрано'])}}
                            {{--                            <select class="form-control select2" style="width: 100%;">--}}
                            {{--                                <option selected="selected">не выбрано</option>--}}
                            {{--                                @foreach($departments as $department)--}}
                            {{--                                    <option>{{$department->department_name}}</option>--}}
                            {{--                                @endforeach--}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Должность</label>
                            {{Form::select('position',$positions,null,['class'=>'form-control select2',
                                    'style'=>'width:100%', 'placeholder' => 'не выбрано'])}}
{{--                            <select class="form-control select2" style="width: 100%;">--}}
{{--                                <option selected="selected">не выбрано</option>--}}
{{--                                @foreach($positions as $position)--}}
{{--                                    <option>{{$position->position_name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                        </div>

                        <!-- For tags with multiple select -->
                    {{--                        <div class="form-group">--}}
                    {{--                            <label>Теги</label>--}}
                    {{--                            <select class="form-control select2" multiple="multiple" data-placeholder="Выберите теги"--}}
                    {{--                                    style="width: 100%;">--}}
                    {{--                                <option>Alabama</option>--}}
                    {{--                                <option>Alaska</option>--}}
                    {{--                                <option>California</option>--}}
                    {{--                                <option>Delaware</option>--}}
                    {{--                                <option>Tennessee</option>--}}
                    {{--                                <option>Texas</option>--}}
                    {{--                                <option>Washington</option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}

                    <!-- Date -->
                        <div class="form-group">
                            <label>Дата приема на работу:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker2" name="date_in">
                            </div>
                            <!-- /.input group -->
                        </div>


                    </div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заметка о сотруднике</label>
                            <textarea name="" id="" cols="25" rows="10" class="form-control" name="note"></textarea>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox">
                            </label>
                            <label>
                                Показывать данные в карточке сотрудника
                            </label>
                        </div>

                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default" onclick="history.back();">Назад</button>
                    <button type="submit" class="btn btn-success pull-right">Добавить</button>
                </div>
            </div>
            <!-- /.box-footer-->

            <!-- /.box -->
        </div>
        {{ Form::close() }}
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection('content')
