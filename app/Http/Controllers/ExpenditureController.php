<?php

namespace App\Http\Controllers;


use App\Expenditure;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenditure.index');
    }

    public function dataexpenditure()
    {
        $query = Expenditure::where('organization_id', auth()->user()->organization_id);
        return Datatables::of($query)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = \App\Type::get();
        return view('expenditure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expenditure = [
            'amount' => $request->amount,
            'for' => $request->for,
            'organization_id' => auth()->user()->organization_id
        ];
        
        Expenditure::create($expenditure);

        return redirect()->route('expenditure.index')->withStatus(__('expenditure successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function show(Expenditure $expenditure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenditure $expenditure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenditure $expenditure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenditure $expenditure)
    {
        //
    }
}
