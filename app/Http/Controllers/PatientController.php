<?php

namespace App\Http\Controllers;

use Jajo\NG;
use App\Models\User;
use App\Models\Patient;
use App\Models\Religion;
use Illuminate\Http\Request;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ng = new NG();
        $states = $ng->states; 
        $religions = Religion::all();
        $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4, ]);
        return view('patients.create', compact('states', 'religions', 'hospital_no'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create(array_merge($request->except(['date_of_birth', 'gender', 'password']), ['password'=> bcrypt($request->password)]));
        $user->assignRole('patient');
        $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4, ]);
        $patient = Patient::create(array_merge($request->except(['password']), ['hospital_no' => $hospital_no, 'user_id'=> $user->id ]));
        return redirect()->route('app.patients.index')->with('success', 'Patient Created Successfully');
    }


    public function createAccount(Request $request)
    {
        $user = User::create(array_merge($request->except(['date_of_birth', 'gender', 'password']), ['password'=> bcrypt($request->password)]));
        $user->assignRole('patient');
        $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4, ]);
        $patient = Patient::create(array_merge($request->except(['password']), ['hospital_no' => $hospital_no, 'user_id'=> $user->id ]));

        return redirect()->route('register')->with('success', 'Account Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
