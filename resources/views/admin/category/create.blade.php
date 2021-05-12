@extends('admin.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить категорию
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      {{ Form::open(['route' => 'category.store','method' => 'post']) }}
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем категорию</h3>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputCategoryName">Название</label>
              <input type="text" name="category" class="form-control" id="inputCategoryName" placeholder="">
            </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-default" onclick="history.back();">Назад</button>
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
