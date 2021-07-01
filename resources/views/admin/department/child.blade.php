<?php $disable = ''; ?>
@if (Auth::user()->roles()->first()->title === 'guest')
    <?php $disable = 'disabled'; ?>
@endif
<ul>
<li class="list-group-item">
    <a href="#{{ $childDep->id }}">{{ $childDep->department_name }}
        ({{$childDep->chief->position->position_name ?? "undefined"}}: {{$childDep->chief->last_name ?? "undefined"}} {{$childDep->chief->name ?? "undefined"}}) </a>
    <a href="edit.html" class="{{$disable}} fa fa-pencil"></a> <a href="{{route('department.delete', $childDep->id)}}" class="{{$disable}} fa fa-remove"></a>
</li>
@if ($childDep->childrenDepartments)

        @foreach ($childDep->childrenDepartments as $childDep)
            @include('admin.department.child', ['childDep' => $childDep])
        @endforeach

@endif
</ul>
