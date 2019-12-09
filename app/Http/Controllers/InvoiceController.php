<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view('invoice.index',['invoice'=>$invoice]);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice.create');
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->firstname = $request->input('firstname');
        $invoice->lastname = $request->input('lastname');
        $invoice->department = $request->input('department');
        $invoice->phone = $request->input('phone');
        $invoice->save(); //persist the data
        return view('invoice.index')->with('info','Invoice Added Successfully');
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('invoice.edit',['invoice'=> $invoice]);
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $invoice = Invoice::find($request->input('id'));
        $invoice->firstname = $request->input('firstname');
        $invoice->lastname = $request->input('lastname');
        $invoice->department = $request->input('department');
        $invoice->phone = $request->input('phone');
        $invoice->save(); //persist the data
        return redirect()->route('invoice.index')->with('info','invoice Updated Successfully');
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()->route('invoice.index');
    }
}