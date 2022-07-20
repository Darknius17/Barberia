<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\Agendaservicios;
use App\Models\Servicios;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $agenda = Agendaservicios::all();
        $filtro =$request->get('filtro');
        $agenda = Agendaservicios::where('nombreCliente','like','%'.$filtro.'%')->paginate(5);

        return view('agenda.index', compact('agenda','filtro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicios::all();
        return view('agenda.crear', compact('servicios'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombreCliente'=> 'required',
            'email'=> 'required','unique',
            'rut'=> 'required',
            'telefono'=> 'required',
            'dia' => 'required',
            'hora' => 'required',
            'comentario'=> 'required',
            'id_servicio'=> 'required'
        ]);


        $agenda = new Agenda();


        $agenda->nombreCliente = $request->nombreCliente;
        $agenda->email = $request->email;
        $agenda->rut = $request->rut;
        $agenda->telefono = $request->telefono;
        $agenda->dia = $request->dia;
        $agenda->hora = $request->hora;
        $agenda->comentario = $request->comentario;
        $agenda->id_servicio = $request->id_servicio;



        $agenda->save();

        return redirect()->route('agenda.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agendaservicios $agendaservicios, Agenda $agenda)
    {
        $agendaservicios = Agendaservicios::all();

         return response()->json($agendaservicios);


    }
    public function mostrar()
    {
        $agenda = Agendaservicios::all();
        $servicios = Servicios::all();

        return view('agenda.cliente',compact('agenda'), compact('servicios'));
    }
   /*
    public function store1(Request $request)
    {
        $request->validate([

            'nombreCliente'=> 'required',
            'email'=> 'required','unique',
            'rut'=> 'required',
            'telefono'=> 'required',
            'dia' => 'required',
            'hora' => 'required',
            'comentario'=> 'required',
            'id_servicio'=> 'required'
        ]);

        $agenda=Agendaservicios::create($request->all());

    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicios::all();
        $agenda = Agendaservicios::find($id);

        return view('agenda.editar', compact('agenda','servicios'));
    }

    public function update(Request $request, agenda $agenda)
    {
        $request->validate([

            'nombreCliente'=> 'required',
            'email'=> 'required',
            'rut'=> 'required',
            'telefono'=> 'required',
            'dia' => 'required',
            'hora' => 'required',
            'comentario'=> 'required',
            'id_servicio'=> 'required'



        ]);


        $agenda->nombreCliente = $request->nombreCliente;
        $agenda->email = $request->email;
        $agenda->rut = $request->rut;
        $agenda->telefono = $request->telefono;
        $agenda->dia = $request->dia;
        $agenda->hora = $request->hora;
        $agenda->comentario = $request->comentario;
        $agenda->id_servicio = $request->id_servicio;



        $agenda->save();

        return redirect()->route('agenda.index');
    }


    public function destroy(agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('agenda.index');
    }
}
