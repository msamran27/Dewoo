<?php

namespace App\Http\Controllers;

use App\Models\Custmer;
use App\Http\Requests\StoreCustmerRequest;
use App\Http\Requests\UpdateCustmerRequest;
use Illuminate\Http\Request;

class CustmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->validate([
            'name'=>['required','min:3','max:25','string'],
            'Father_name'=>['required','min:3','max:25','string'],
            'CNIC'=>['required','min:3','max:25'],
            'phone'=>['required','min:3','max:25',],
            'address'=>['required','min:3','max:25'],
            'email'=>['required','min:3','max:25'],

         ]);
 
        Custmer::create($request->all());
        
       // return redirect('WelcomeCustmer')->with('message','the rocrd submit successfully');
        return redirect('/ticket')->with('message','the rocrd submit successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustmerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustmerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custmer  $custmer
     * @return \Illuminate\Http\Response
     */
    public function show(Custmer $custmer)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custmer  $custmer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('custmer\update')->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustmerRequest  $request
     * @param  \App\Models\Custmer  $custmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custmer $custmer)
    {
      
        $custmer->update($request->all());
        return redirect('WelcomeCustmer')->with('message','data update succcessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custmer  $custmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custmer $custmer)
    {
        
        $custmer->delete();
        
        return redirect('WelcomeCustmer')->with('message','the data delete successfully');
    }
}
