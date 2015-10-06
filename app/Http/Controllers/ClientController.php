<?php

namespace ProjetoGabge\Http\Controllers;

use Illuminate\Http\Request;

use ProjetoGabge\Http\Requests;
use ProjetoGabge\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \ProjetoGabge\Client::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return \ProjetoGabge\Client::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return \ProjetoGabge\Client::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $task = \ProjetoGabge\Client::find($id);
        $task->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        \ProjetoGabge\Client::find($id)->delete();
        // $delete['id'] = $id;
        // $delete['deleted'] = \ProjetoGabge\Client::find($id)->delete();
        
        // return $delete;
        // Metodo da aula mas não funciona mais
        // return $model->find($id)->delete();
    }
}
