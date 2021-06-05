<tr>
<td>{{ $childDep->id }}</td>
<td><a href="#" >{{ $childDep->department_name }}</a></td>
<td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
</tr>
@if ($childDep->childrenDepartments)

        @foreach ($childDep->childrenDepartments as $childDep)
            @include('admin.department.childTable', ['childDep' => $childDep])
        @endforeach

@endif

