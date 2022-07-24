<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Agenda;
use App\Models\Servicios;
use App\Models\User;
use App\Models\Agendaservicios;



class ReservaController extends Controller
{
      public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {

     //   $reserva = Reserva::find($id);

        //var_dump($id);
        $reservaadmin = auth()->user()->name;
        $agenda = Agenda::all();
        $agenda = Agenda::where('hora','like','%%')->paginate(5);

        $reserva = Reserva::all();
        $reserva = Reserva::where('nombreU','like','%'. $reservaadmin .'%')->paginate(5);
    //   $reserva = Reserva::where('nombreU','like','Admin' )->paginate(6);

        return view('agenda.reserva.mostrar', compact('reserva'), compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserva = Reserva::all();
        $servicios= Servicios::all();
        return view('agenda.reserva.crear', compact('reserva'), compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $agenda = new Agenda();


        $agenda->nombreCliente = $request->nombreCliente;
        $agenda->email = $request->email;
        $agenda->rut = $request->rut;
        $agenda->telefono = $request->telefono;
        $agenda->dia = $request->dia;
        $agenda->hora = $request->hora;
        $agenda->comentario = $request->comentario;
        $agenda->id_servicio = $request->id_servicio;
        $agenda->id_usuario = $request->id_usuario;
        $agenda->title = $request->title;
        $agenda->start = $request->start;
        $agenda->end = $request->end;



        $agenda->save();

        return redirect()->route('reserva.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicios::all();
        $agenda = Agendaservicios::find($id);

        return view('agenda.editar', compact('agenda','servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $reservaadmin = auth()->user()->name;

        $agenda->id = $request->id_agenda;
        $agenda->nombreCliente = $request->nombreCliente;
        $agenda->email = $request->email;
        $agenda->rut = $request->rut;
        $agenda->telefono = $request->telefono;
        $agenda->dia = $request->dia;
        $agenda->hora = $request->hora;
        $agenda->comentario = $request->comentario;
        $agenda->id_servicio = $request->id_servicio;
        $agenda->id_usuario = $request->id_usuario;
        $agenda->title = $request->title;
        $agenda->start = $request->start;
        $agenda->end = $request->end;





        $agenda->save();

        return redirect()->route('agenda.reserva.mostrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Reserva $reserva, Agenda $agenda)
    {
        $agenda->id = $reserva->id_usuario;

        var_dump($request->id);
        die();

        $agenda->delete();




        return redirect()->route('reserva.index');
    }
}
