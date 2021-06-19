<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Department;
use App\Http\Requests\StoreEmployeeRequest;
use App\Position;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index() {

//      Тестовая задача - одного из студентов
//        $varJson = json_decode(file_get_contents('users.json'));
//        foreach($varJson as $key=>$arr) {
//            ${$key} = $arr;
//        }
//
//        foreach ($users as $user) {
//            foreach ($contacts as $contact) {
//                foreach ($roles as $role) {
//                    foreach ($permissions as $permission) {
//                        if (($user->id === $contact->user) &&
//                            ($user->role === $role->id) &&
//                            ($user->permissions === $permission->id)) {
//
//                            echo "$user->name . $role->roleName .
//                            $contact->firstName $contact->lastName
//                             ----->  $permission->value" . '</br>';
//
//                        }
//                    }
//                }
//            }
//        }
//
//
//        echo 'Переменная $roles:';
//        dump($roles);
//        echo 'Переменная $permissions:';
//        dump($permissions);
//        echo 'Переменная $users:';
//        dump($users);
//        echo 'Переменная $contacts:';
//        dump($contacts);
//        die;
        $employees = Employee::all();
        //dd($employees->find(6)->department->getlistLevel());
        return view('admin.employee.index',['employees'=>$employees]);
    }

    public function create() {
        $departments = Department::pluck('department_name','id');
        $positions = Position::pluck('position_name','id');
        //dd($positions);
        return view('admin.employee.create',['departments'=>$departments,'positions'=>$positions]);
    }

    public function store(StoreEmployeeRequest $request) {

        //dd($request);

        $this->validate($request, $request->rules());

        $fields = $request->all();
        $fields['birthday'] = Carbon::parse($request->get('birthday'))->format('Y-m-d');
        $fields['date_in'] = Carbon::parse($request->get('date_in'))->format('Y-m-d');


        //dump($request->all());
        $employee=Employee::add($fields);
        $employee->uploadImage($request->file('photo'));
        $employee->setPosition($request->get('position_id'));
        $employee->setDepartment($request->get('department_id'));
        //dd($employee);
        return redirect()->route('employee.index');
    }

    public function edit($id) {

        $employee = Employee::find($id);
        $department_id = $employee->department->id;
        $position_id = $employee->position->id;
        $departments = Department::pluck('department_name','id');
        $positions = Position::pluck('position_name','id');
        if ($employee->is_visual === 1) {
            $is_visual = 'checked';
        }
        else $is_visual = '';

        return view('admin.employee.edit',[
            'last_name' => $employee->last_name,
            'name' => $employee->name,
            'fathers_name' => $employee->fathers_name,
            'birthday' => Carbon::parse($employee->birthday)->format('d-m-Y'),
            'date_in' => Carbon::parse($employee->date_in)->format('d-m-Y'),
            'email' => $employee->email,
            'departments'=>$departments,
            'positions'=>$positions,
            'department_id' => $department_id,
            'position_id' => $position_id,
            'photo' => $employee->photo,
            'is_visual' => $is_visual,
            'note' => $employee->note,
            'id' => $id

        ]);

    }

    public function update(StoreEmployeeRequest $request) {

        $this->validate($request, $request->rules());

        $employee = Employee::find($request->get('id'));
        $employee->set($request);
        dd($employee);


        return redirect()->route('employee.index');
    }



    public function delete($id) {
        Employee::find($id)->delete();
        return redirect()->route('employee.index');
    }
}
