<<li>{{ $childDep->id }} {{ $childDep->department_name }}{{ $childDep->department_name }}</li>
@if ($childDep->childrenDepartments)
    <ul>
        @foreach ($childDep->childrenDepartments as $childDep)
            @include('admin.department.child', ['childDep' => $childDep])
        @endforeach
    </ul>
@endif
