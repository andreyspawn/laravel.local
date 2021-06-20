@extends('admin.admin_layout')

   @section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 901px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Привет! Это админка
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Инструкция, заметки по ТЗ, нюансы задачи</h3>
                </div>
                <div class="box-body">
                    1. Три таблицы - сотрудники, подразделения, должности
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                   'футер - потом решим для чего'
                    CHECK IN!!!!
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection('content')
