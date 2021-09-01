<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'mobile' => 'required|unique:ipd_admitted_patients',
            'ward_no' => 'required',
            'cabin_no' => 'required|unique:ipd_admitted_patients',
            'seat_no' => 'required',
            'age' => 'required',
            'admission_date' => 'required',
        ]);

        $patients = new Patient();
        $patients->name = $request->name;
        $patients->mobile = $request->mobile;
        $patients->ward_no = $request->ward_no;
        $patients->cabin_no = $request->cabin_no;
        $patients->seat_no = $request->seat_no;
        $patients->reference_no = rand(1000,9999);
        $patients->age = $request->age;
        $patients->admission_date = $request->admission_date;

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
            'age' => 'required',
            'admission_date' => 'required',
        ]);

        $patients = Patient::findOrFail($id);
        $patients->name = $request->name;
        $patients->mobile = $request->mobile;
        $patients->ward_no = $request->ward_no;
        $patients->cabin_no = $request->cabin_no;
        $patients->seat_no = $request->seat_no;
        $patients->reference_no = rand(1000,9999);
        $patients->age = $request->age;
        $patients->admission_date = $request->admission_date;

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

    public function patientDataShowFilter(Request $request)
    {
        $from_admission_date = date('Y-m-d', strtotime($request->from_admission_date));
        $to_admission_date = date('Y-m-d', strtotime($request->to_admission_date));

        $from_age = $request->from_age;
        $to_age = $request->to_age;

        $patient_name = $request->patient_name;
        $patient_mobile = $request->patient_mobile;


        $patient_data =  DB::select("SELECT * FROM `ipd_admitted_patients`
                                        WHERE (`admission_date` BETWEEN '".$from_admission_date."' AND '".$to_admission_date."') OR (`age` BETWEEN '".$from_age."' AND '".$to_age."') OR (`name` = '".$patient_name."') OR (`mobile` = '".$patient_mobile."') ");

        return $patient_data;

    }

    public function getPassPatient()
    {
        // $patientDetails = Patient::findOrFail($id);
        return view('backend.patient.getPass');
    }
}
