<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getAll()
    {
        $employees = Employee::paginate(12);
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeStoreRequest $request)
    {
        $data = $request->validated();
        Employee::create($data);
        return redirect()->route('employee.index');
    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Employee $employee, EmployeeUpdateRequest $request)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employee.show', $employee->id);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
