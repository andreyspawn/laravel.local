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
        //dd($employees->find(6)->position->position_name);
        //dd($employees->find(6)->department->getlistLevel());
        return view('admin.employee.index',['employees'=>$employees]);
    }

    public function create() {
        $departments = Department::pluck('department_name')->all();
        $positions = Position::pluck('position_name')->all();
        //dd($positions);
        return view('admin.employee.create',['departments'=>$departments,'positions'=>$positions]);
    }

    public function store(StoreEmployeeRequest $request) {

        $this->validate($request, $request->rules());
        $fields=$request->all();
        //convert date from request to MySQL format
        $fields['birthday'] = Carbon::parse($request->birthday);
        $fields['date_in'] = Carbon::parse($request->date_in);
        $employee = Employee::add($fields);
        $employee->uploadPhoto($request->file('photo'));



        return redirect()->route('employee.index');
    }

    public function delete($id) {
        Employee::find($id)->delete();
        return redirect()->route('employee.index');
    }
}
