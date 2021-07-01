@extends('admin.admin_layout')


@section('content')
    <div class="content-wrapper" style="min-height: 901px">
        <!-- Content Header (Page header) -->
        <section class="content  col-lg-10">
            <div class="box box-solid box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Список подразделений</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?php $disable = ''; ?>
                        @if (Auth::user()->roles()->first()->title === 'guest')
                            <?php $disable = 'disabled'; ?>
                        @endif
                        <a href="{{ route('department.create') }}" class="btn btn-success {{$disable}}">Добавить</a>
                    </div>
{{--dd($children)--}}
                    @foreach ($children as $child)
                        <ul class="list-group">
                            <li class="list-group-item">

                                <a href="#{{$child->id}}"> {{ $child->department_name }}
                                    ({{$child->chief->position->position_name ?? "undefined"}}: {{$child->chief->last_name ?? "undefined"}} {{$child->chief->name ?? "undefined"}}) </a>

                                <a href="edit.html" class="{{$disable}} fa fa-pencil" ></a>
                                <a href="{{route('department.delete',$child->id)}}" class="{{$disable}} fa fa-remove" ></a>


                            </li>
                            <ul class="list-group">
                                @foreach($child->childrenDepartments as $childDep)
                                    @include('admin.department.child',['childDep'=>$childDep])
                                @endforeach
                            </ul>
                        </ul>
                    @endforeach
                </div>

            </div>


        </section>









    </div>




@endsection('content')
