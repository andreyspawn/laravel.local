@extends('admin.admin_layout')

   @section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 901px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Административная часть
                <small>Будущая нструкция, заметки по ТЗ, нюансы задачи...</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Предварительно</h3>
                </div>
                <div class="box-body">
                    Три таблицы - сотрудники, подразделения, должности
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection('content')
