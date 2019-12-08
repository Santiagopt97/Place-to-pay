<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all clients from the database and return to view
        $clients = Clients::all();
        return view('clients.index',['clients'=>$clients]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create clients
        return view('clients.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the clients in the database
        //form data is available in the request object
        $clients = new Clients();
        //input method is used to get the value of input with its
        //name specified
        $clients->firstname = $request->input('firstname');
        $clients->lastname = $request->input('lastname');
        $clients->department = $request->input('department');
        $clients->phone = $request->input('phone');
        $clients->save(); //persist the data
        return redirect()->route('clients.index')->with('info','Clients Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the clients
        $clients = Clients::find($id);
        return view('clients.edit',['clients'=> $clients]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the clients and update
        $clients = Clients::find($request->input('id'));
        $clients->firstname = $request->input('firstname');
        $clients->lastname = $request->input('lastname');
        $clients->department = $request->input('department');
        $clients->phone = $request->input('phone');
        $clients->save(); //persist the data
        return redirect()->route('clients.index')->with('info','clients Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the clients
        $clients = Clients::find($id);
        //delete
        $clients->delete();
        return redirect()->route('clients.index');
    }
}