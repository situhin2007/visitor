<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\VisitorGetPass;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorGetPassController extends Controller
{
    public function getPassDataStore(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'c_name' => 'required',
            'c_mobile' => 'required',
            'visitor_name' => 'required',
            'visitor_mobile' => 'required',
            'card_no' => 'required',
            'check_out' => 'required',
            'check_in' => 'required',
        ]);

        $getPass = new VisitorGetPass();
        $getPass->c_name = $request->c_name;
        $getPass->category = $request->category;
        $getPass->c_mobile = $request->c_mobile;
        $getPass->visitor_name = $request->visitor_name;
        $getPass->visitor_mobile = $request->visitor_mobile;
        $getPass->card_no = $request->card_no;
        $getPass->check_out = $request->check_out;
        $getPass->check_in = $request->check_in;
        $getPass->visited_date = Carbon::now();
        $getPass->issue_get_current_pc_user = get_current_user();
        $getPass->status = 0;

        if ($getPass->save()) {
            DB::table('id_card_info')->where('card_no', $request->card_no)->update(['status' => 1]);
            return response()->json('sucess');
        } else {
            return response()->json('error');
        }
    }

    public function getPassChangeStatus($id)
    {
        $changeStatus = DB::table('get_pass')->where('id', $id)->update(['status' => 1, 'return_get_current_pc_user' => get_current_user()]);

        if ($changeStatus) {
            return back()->with('success', 'Status change successfully.');
        } else {
            return back()->with('error', 'Something Error Found. Please try again.');
        }
    }
}
