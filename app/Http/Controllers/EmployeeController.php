<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests\CreateEmployeeRequest;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::select()->get();
        return view('employee.index' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create', ['employee' => new Employee()]);//el compacrt recibe la variable declarada en este metodo 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $employee= new Employee;
        $employee->documento = $request->input('document');
        $employee->nombresYapellidos = $request->input('name');
        $employee->telefono = $request->input('number');
        $employee->celular = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->direccion = $request->input('address');
        $employee->barrio = $request->input('neighborhood');
        $employee->departamento = $request->input('departament');

        $employee->cargo = $request->input('post');
        $employee->salario = $request->input('salary');
        $employee->eps = $request->input('eps');
        $employee->arl = $request->input('arl');
        $employee->cajaDeCompensaciones = $request->input('box');
        $employee->fondoDePensiones = $request->input('heart');
        $employee->fechaIngreso = $request->input('datebegin');
        $employee->fechaRetiro = $request->input('dateretirement');

        $employee->nombreContacto = $request->input('namecontact');
        $employee->parentesco = $request->input('relationship');
        $employee->telefonoContacto = $request->input('numbercontact');
        $employee->save();

        return redirect()->route('employeelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee =Employee::where('id', $id)->first();
        return view('employee.show' , compact('employee'));//el compacrt recibe la variable declarada en este metodo 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('employee.edit' , compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $employee= Employee::find($id);
        $employee->documento = $request->input('document');
        $employee->nombresYapellidos = $request->input('name');
        $employee->telefono = $request->input('number');
        $employee->celular = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->direccion = $request->input('address');
        $employee->barrio = $request->input('neighborhood');
        $employee->departamento = $request->input('departament');

        $employee->cargo = $request->input('post');
        $employee->salario = $request->input('salary');
        $employee->eps = $request->input('eps');
        $employee->arl = $request->input('arl');
        $employee->cajaDeCompensaciones = $request->input('box');
        $employee->fondoDePensiones = $request->input('heart');
        $employee->fechaIngreso = $request->input('datebegin');
        $employee->fechaRetiro = $request->input('dateretirement');

        $employee->nombreContacto = $request->input('namecontact');
        $employee->parentesco = $request->input('relationship');
        $employee->telefonoContacto = $request->input('numbercontact');
        $employee->save();

        return redirect()->route('employeelist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, $id)
    {
        $employee= Employee::where('id',$id)->delete();
        //return view('employee.index');
        return redirect()->route('employeelist');
    }
}