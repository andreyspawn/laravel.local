@extends('admin.admin_layout')


@section('content')
    <div class="content-wrapper" style="min-height: 901px">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <section class="content  col-lg-10">

            <div class="box box-solid box-primary">
                <div class="box-header box-title">

                    <a href="#info1" data-toggle="collapse" >Список подразделений</a>

                </div>
                <div id="info1" class="box-body">

                    <table id="example1" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th class="col-lg-1">Код подразделения</th>
                            <th>Название подразделения</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($children as $child)
                            <tr class="success">
                                <td>{{$child->id}}</td>
                                <td><a href="#" > {{ $child->department_name }} </a></td>
                                <td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
                            </tr>

                                @foreach($child->childrenDepartments as $childDep)
                                    @include('admin.department.childTable',['childDep'=>$childDep])
                                @endforeach

                        @endforeach
{{--                        @foreach($children as $child)--}}
{{--                        <tr>--}}
{{--                            <td>{{$child->id}}</td>--}}
{{--                            <td><a href="#">{{$child->department_name}}</a></td>--}}
{{--                            <td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}
                        </tfoot>
                    </table>

{{--                    <div class="box-body">--}}
{{--                        <ul>--}}
{{--                            <h1>TEST</h1>--}}
{{--                            <h2>TEST</h2>--}}
{{--                            <h3>TEST</h3>--}}
{{--                            <h4>TEST</h4>--}}
{{--                            <h5>TEST</h5>--}}
{{--                            <h6>TEST</h6>--}}
{{--                            @foreach ($children as $child)--}}
{{--                                <li>{{ $child->id }}  {{ $child->department_name }}</li>--}}

{{--                                <ul>--}}
{{--                                    @foreach ($child->childrenDepartments as $childDep)--}}
{{--                                        @include('admin.department.child', ['childDep' => $childDep])--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>

            </div>


        </section>









    </div>




@endsection('content')
