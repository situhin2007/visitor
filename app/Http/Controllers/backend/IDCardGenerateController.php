<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\IdCardGenerate;
use Illuminate\Http\Request;

class IDCardGenerateController extends Controller
{
    public function index()
    {
        $id_cards = IdCardGenerate::all()->sortBy('id_card_no');
        return view('backend.id_card_info.all_id_card', compact('id_cards'));
    }

    public function create()
    {
        return view('backend.id_card_info.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'from_id_card' => 'required',
            'to_id_card' => 'required',
        ]);

        for ($x = $request->from_id_card; $x <= $request->to_id_card; $x++) {
            // echo "The number is: $x <br>";
            $id_card_generate = new IdCardGenerate();
            $id_card_generate->id_card_no = $x;
            $id_card_generate->save();
        }

        // $id_card_generate = new IdCardGenerate();
        // $id_card_generate->id_card_no = $request->id_card_no;
        // $id_card_generate->serial_no = $request->serial_no;

        return redirect('id_card_generate/index')->with('success', 'Card no successfully saved.');

        // if ($id_card_generate->save()) {
        //     return redirect('id_card_generate/index')->with('success', 'Id number successfully saved.');
        // } else {
        //     return back()->with('error', 'Something Error Found, Please try again');
        // }
    }

    public function edit($id)
    {
        $id_card = IdCardGenerate::findOrFail($id);
        return view('backend.id_card_info.edit', compact('id_card'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'id_card_no' => 'required',
            'serial_no' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        $id_card_generate = IdCardGenerate::findOrFail($id);
        $id_card_generate->id_card_no = $request->id_card_no;
        $id_card_generate->serial_no = $request->serial_no;
        $id_card_generate->status = $request->status;
        $id_card_generate->remarks = $request->remarks;

        if ($id_card_generate->save()) {
            return redirect('id_card_generate/index')->with('success', 'Card no successfully updated.');
        } else {
            return back()->with('error', 'Something Error Found, Please try again');
        }
    }


    public function destroy($id)
    {
        $id_card_generate = IdCardGenerate::findOrFail($id);

        if ($id_card_generate->delete()) {
            return redirect('doctor/index')->with('success', 'Card no successfully deleted.');
        } else {
            return back()->with('error', 'Something Error Found, Please try again');
        }
    }
}
