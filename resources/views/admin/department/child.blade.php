<ul>
<li class="list-group-item">
    <a href="#{{ $childDep->id }}">{{ $childDep->department_name }}</a>
    <a href="edit.html" class="fa fa-pencil"></a> <a href="#{{ $childDep->id }}" class="fa fa-remove"></a>
</li>
@if ($childDep->childrenDepartments)

        @foreach ($childDep->childrenDepartments as $childDep)
            @include('admin.department.child', ['childDep' => $childDep])
        @endforeach

@endif
    </ul>
