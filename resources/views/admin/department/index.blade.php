@extends('admin.admin_layout')


@section('content')
    <div class="content-wrapper" style="min-height: 901px">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <section class="content  col-lg-10">

            <div class="box box-solid box-primary">
                <div class="box-header box-title">

                    <a href="#info1" data-toggle="collapse" >{{$root->department_name}}</a>

                </div>
                <div id="info1" class="box-body collapse-show">

                    <table id="example1" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th class="col-lg-1">Код подразделения</th>
                            <th>Название подразделения</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                        <tr>
                            <td>{{$department->id}}</td>
                            <td>{{$department->department_name}}</td>
                            <td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>

                    <ul>
                        @for($i = 2; $i <= $maxLevel; $i++)
                            <li>

                            </li>
                        @endfor
                    </ul>
                    <div class="box-body">
                        The body of the box
                    </div>
                    Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>

            </div>


        </section>









    </div>




@endsection('content')
