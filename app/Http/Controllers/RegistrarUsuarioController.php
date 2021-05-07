<?php

namespace App\Http\Controllers;

use App\RegistrarUsuario;
use Illuminate\Http\Request;

class RegistrarUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RegistroUsuario');
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
        $usuario = new RegistrarUsuario();
        $usuario->nombreUsuario = request('usuario');
        $usuario->email = request('email');
        $usuario->departamento = request('departamento');
        $usuario->facultad = request('facultad');
        $usuario->cargo = request('cargo');
        $usuario->ci = request('ci');
        $usuario->telefono = request('telefono');
        $usuario->unidad = $request->get('unidad');
        $usuario->password = request('password');
        $usuario->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistrarUsuario  $registrarUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrarUsuario $registrarUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistrarUsuario  $registrarUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrarUsuario $registrarUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistrarUsuario  $registrarUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrarUsuario $registrarUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistrarUsuario  $registrarUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrarUsuario $registrarUsuario)
    {
        //
    }
}
