<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Auth;
use DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action = $request->action;

        if ($action == "addnewbill") {
            $bill = new Bill;
            $bill->bill_name = $request->namebill;
            $bill->user_id = Auth::id();
            $bill->save();
        }

        if ($action == "addamountduepayment") {

          $billid = $request->billid;
          $amountdue = (!empty($request->amountdue) ? $request->amountdue : 0);
          $amountpaid = (!empty($request->amountpaid) ? $request->amountpaid : 0);
          $monthid = $request->monthid;
          $userid = Auth::id();

          // $sql = "DELETE FROM bill_payments WHERE bill_id='$billid' AND user_id = '$userid' AND bill_months_id = '$monthid' ";

          // Delete bill payments data
          DB::table('bill_payments')->where('bill_id',$billid)->where('user_id', $userid)->where('bill_months_id',$monthid)->delete();


          // Insert bill payments data
          DB::table('bill_payments')->insert([
              [
                'bill_id' => $billid,
                'bill_months_id' => $monthid,
                'amount_due' => $amountdue,
                'amount_paid' => $amountpaid,
                'user_id' => $userid
              ]
          ]);




        }



        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
