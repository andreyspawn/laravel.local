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
{{--                    @if($errors->any())--}}
{{--                        <?php dd($errors) ?>--}}
{{--                    @endif--}}
                    @if($errors->any())
                        <div class="alert alert-warning">
                            Ошибки ввода данных!!!!
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                    <div>
                        <div class="col-md-6">
                            <!-- surname -->
                            <div class="form-group">
                                <label for="last_name">Фамилия <b class="text-red">*</b></label>
                                <input type="text" class="form-control" id="lastName"
                                       name="last_name" placeholder="Иванов">
                            </div>

                            <!-- name -->
                            <div class="form-group">
                                <label for="name">Имя <b class="text-red">*</b></label>
                                <input type="text" class="form-control" id="Name"
                                       name="name" placeholder="Иван">
                            </div>

                            <!-- fathers name -->
                            <div class="form-group">
                                <label for="fathers_name">Отчество <b class="text-red">*</b></label>
                                <input type="text" class="form-control" id="FathersName"
                                       name="fathers_name" placeholder="Иванович">
                            </div>

                            <!-- email -->
                            <div class="form-group">
                                <label for="fathers_name">Email</label>
                                <input type="email" class="form-control" id="FathersName" name="email"
                                       placeholder="email">
                            </div>

                            <!-- birthday -->
                            <div class="form-group">
                                <label>Дата рождения: <b class="text-red">*</b> </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" data-date-format="dd-mm-yyyy"
                                           class="datepicker form-control pull-right"
                                           id="datepicker1" name="birthday">
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
                            {{Form::select('department_id',$departments,null,['class'=>'form-control select2',
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
                            {{Form::select('position_id',$positions,null,['class'=>'form-control select2',
                                    'style'=>'width:100%', 'placeholder' => 'не выбрано'])}}
                            {{--                            <select class="form-control select2" style="width: 100%;">--}}
                            {{--                                <option selected="selected">не выбрано</option>--}}
                            {{--                                @foreach($positions as $position)--}}
                            {{--                                    <option>{{$position->position_name}}</option>--}}
                            {{--                                @endforeach--}}
                            {{--                            </select>--}}
                        </div>

                        <!-- day work access -->
                        <div class="form-group">
                            <label>Дата приема на работу: <b class="text-red">*</b> </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" data-date-format="dd-mm-yyyy"
                                       class="datepicker form-control pull-right" id="datepicker2"
                                       value="{{date('d-m-Y')}}" name="date_in">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="note_about">Заметка о сотруднике</label>
                            <textarea id="note_about" cols="20" rows="5" class="form-control" name="note"></textarea>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="check_is_visual">
                            </label>
                            <label>
                                Показывать данные в карточке сотрудника
                            </label>
                        </div>

                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('employee.index')}}" class="btn btn-info">Назад</a>
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
