<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;



class ServiciosController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }


    /**



    * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtro =$request->get('filtro');
        $servicios = Servicios::where('nombre','like','%'.$filtro.'%')->paginate(5);


        return view('servicio.index', compact('servicios', 'filtro' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombreServicio'=> 'required',
            'descripcionServicio'=> 'required',
            'valor'=> 'required',
        ]);


        $servicios = new Servicios();

        $servicios->nombre = $request->nombreServicio;
        $servicios->descripcion = $request->descripcionServicio;
        $servicios->valor = $request->valor;


        $servicios->save();

        return redirect()->route('servicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicios::find($id);

        return view('servicio.editar', compact('servicios'));
    }

    public function update(Request $request, Servicios $servicios)
    {
        $request->validate([

            'nombreServicio'=> 'required',
            'descripcionServicio'=> 'required',
            'valor'=> 'required',



        ]);



        $servicios->nombre = $request->nombreServicio;
        $servicios->descripcion = $request->descripcionServicio;
        $servicios->valor = $request->valor;
        $servicios->save();

        return redirect()->route('servicio.index');
    }

    public function destroy(Servicios $servicios)
    {
        $servicios->delete();

        return redirect()->route('servicio.index')->with('servicio','borrar');
    }
}
