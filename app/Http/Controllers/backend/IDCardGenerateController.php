<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\IdCardGenerate;
use Illuminate\Http\Request;

class IDCardGenerateController extends Controller
{
    public function index()
    {
        $id_cards = IdCardGenerate::all();
        return view('backend.id_card_info.index',compact('id_cards'));
    }

    public function create()
    {
        return view('backend.id_card_info.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_card_no' => 'required',
            'serial_no' => 'required',
        ]);

        $doctors = new IdCardGenerate();
        $doctors->id_card_no = $request->id_card_no;
        $doctors->serial_no = $request->serial_no;
        $doctors->save();

        return redirect('id_card_generate/index');
    }

    public function edit($id)
    {
        $id_card = IdCardGenerate::findOrFail($id);
        return view('backend.id_card_info.edit',compact('id_card'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_card_no' => 'required',
            'serial_no' => 'required',
        ]);

        $doctors = IdCardGenerate::findOrFail($id);
        $doctors->id_card_no = $request->id_card_no;
        $doctors->serial_no = $request->serial_no;
        $doctors->save();

        return redirect('id_card_generate/index');
    }
}
