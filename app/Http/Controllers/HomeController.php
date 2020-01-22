<?php

namespace App\Http\Controllers;
use \App\Income;
use \App\Expenditure;
use \App\User;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = User::get()->count();
        $totalincome = 0;
        $incomes = Income::get();
        foreach($incomes as $income){
            $totalincome += $income->amount;
        }
        $totalexp = 0;
        $expenditures = Expenditure::get();
        foreach($expenditures as $exp){
            $totalexp += $exp->amount;
        }
        $balance = $totalincome - $totalexp;
        return view('dashboard',[
            'user' =>$user,
            'income' => $totalincome,
            'expenditure' => $totalexp,
            'balance' => $balance
        ]);
    }
}
