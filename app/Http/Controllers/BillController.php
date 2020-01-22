<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Income;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bill.index');
    }

    public function databill(){
        $query = Bill::with('user')->where('user_id', auth()->user()->id);
        return Datatables::of($query)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get();
        return view('bill.create',[
            'types' =>$types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::get()->count();
        for($i = 1 ; $i<= $user; $i++){
            $bill = [
                'user_id' => $i,
                'amount' => $request->amount,
                'type' => $request->type,
                'month' => $request->month,
                'status' => 'unpaid',
                'due_date' => now()   
            ];
            Bill::create($bill);
        }
        return redirect()->route('bill.index')->withStatus(__('bill successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill = Bill::with('user')->findOrfail($id);
        return view('bill.show',[
            'bill' => $bill
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $bill = Bill::findOrfail($id);
        $data = [
            'amount' => $bill->amount,
            'type' => $bill->type,
            'month' => $bill->month,
            'due_date' => $bill->due_date,
            'status' => 'pending',
        ];
        $bill->update($data);

        return redirect()->route('bill.index')->withStatus(__('bill successfully edited.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
       
    }

    public function update2($id){
        $bill = Bill::with('user')->findOrfail($id);
        $data = [
            'amount' => $bill->amount,
            'type' => $bill->type,
            'month' => $bill->month,
            'due_date' => $bill->due_date,
            'status' => 'paid',
        ];
        $bill->update($data);

        $new = [
            'user_id' => $bill->user_id,
            'amount' => $bill->amount,
            'type' => $bill->type,
            'month' => $bill->month,
            'user_id' => $bill->user_id,
            'organization_id' => $bill->user->organization_id
        ];
        Income::create($new);

        $bill->delete();
        return redirect()->route('bill.confirm')->withStatus(__('Confirmation success'));
    }

    public function confirm(){
        return view('bill.confirm');
    }
}
