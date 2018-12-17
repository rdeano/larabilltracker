<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        $userid = Auth::id();
        $bills = DB::table('bill')->where('user_id',$userid)->get();
        $totalamountduedisp =0;
        $totalamountpaiddisp =0;

        // retrieve january amount due and amount paid
        foreach($bills as $bill) {
          // $sql = "SELECT amount_due,amount_paid FROM bill_payments WHERE bill_months_id = '1' AND bill_id = '2' ";
          $jandueamount = DB::table('bill_payments')->where('bill_months_id', '1')->where('bill_id',$bill->id)->get();
          $febdueamount = DB::table('bill_payments')->where('bill_months_id', '2')->where('bill_id',$bill->id)->get();
          $marchdueamount = DB::table('bill_payments')->where('bill_months_id', '3')->where('bill_id',$bill->id)->get();
          $aprildueamount = DB::table('bill_payments')->where('bill_months_id', '4')->where('bill_id',$bill->id)->get();
          $maydueamount = DB::table('bill_payments')->where('bill_months_id', '5')->where('bill_id',$bill->id)->get();
          $junedueamount = DB::table('bill_payments')->where('bill_months_id', '6')->where('bill_id',$bill->id)->get();
          $julydueamount = DB::table('bill_payments')->where('bill_months_id', '7')->where('bill_id',$bill->id)->get();
          $augustdueamount = DB::table('bill_payments')->where('bill_months_id', '8')->where('bill_id',$bill->id)->get();
          $septemberdueamount = DB::table('bill_payments')->where('bill_months_id', '9')->where('bill_id',$bill->id)->get();
          $octoberdueamount = DB::table('bill_payments')->where('bill_months_id', '10')->where('bill_id',$bill->id)->get();
          $novdueamount = DB::table('bill_payments')->where('bill_months_id', '11')->where('bill_id',$bill->id)->get();
          $decdueamount = DB::table('bill_payments')->where('bill_months_id', '12')->where('bill_id',$bill->id)->get();


          $bill->jandueamount = $jandueamount;
          $bill->febdueamount = $febdueamount;
          $bill->marchdueamount = $marchdueamount;
          $bill->aprildueamount = $aprildueamount;
          $bill->maydueamount = $maydueamount;
          $bill->junedueamount = $junedueamount;
          $bill->julydueamount = $julydueamount;
          $bill->augustdueamount = $augustdueamount;
          $bill->septemberdueamount = $septemberdueamount;
          $bill->octoberdueamount = $octoberdueamount;
          $bill->novdueamount = $novdueamount;
          $bill->decdueamount = $decdueamount;

        }

        $totalamountdue = DB::table('bill_payments')->where('user_id',$userid)->sum('amount_due');
        $totalamountpaid = DB::table('bill_payments')->where('user_id',$userid)->sum('amount_paid');



        return view('customlayout.app')->with('bills',$bills)->with('totalamountdue',$totalamountdue)->with('totalamountpaid',$totalamountpaid);
    }
}
