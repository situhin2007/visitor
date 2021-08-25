<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('backend.patient.index', compact('patients'));
    }

    public function create()
    {
        return view('backend.patient.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'ward_no' => 'required',
            'cabin_no' => 'required',
            'seat_no' => 'required',
        ]);

        $patients = new Patient();
        $patients->name = $request->name;
        $patients->mobile = $request->mobile;
        $patients->ward_no = $request->ward_no;
        $patients->cabin_no = $request->cabin_no;
        $patients->seat_no = $request->seat_no;
        $patients->reference_no = rand(1000,9999);

        if ($patients->save()) {
            return redirect('patient/index')->with('success', 'Patient successfully updated.');
        } else {
            return back()->with('error', 'Something Error Found, Please try again');
        }
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('backend.patient.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'ward_no' => 'required',
            'cabin_no' => 'required',
            'seat_no' => 'required',
        ]);

        $patients = Patient::findOrFail($id);
        $patients->name = $request->name;
        $patients->mobile = $request->mobile;
        $patients->ward_no = $request->ward_no;
        $patients->cabin_no = $request->cabin_no;
        $patients->seat_no = $request->seat_no;
        $patients->reference_no = rand(1000,9999);

        if ($patients->save()) {
            return redirect('patient/index')->with('success', 'Patient successfully updated.');
        } else {
            return back()->with('error', 'Something Error Found, Please try again');
        }
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);

        if ($patient->delete()) {
            return redirect('patient/index')->with('success', 'Patient successfully deleted.');
        } else {
            return back()->with('error', 'Something Error Found, Please try again');
        }
    }
}
