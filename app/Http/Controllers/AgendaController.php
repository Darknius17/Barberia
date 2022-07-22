<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\Agendaservicios;
use App\Models\Servicios;
use Carbon\Carbon;


class AgendaController extends Controller
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
        $agenda->title = $request->title;
        $agenda->start = $request->start;
        $agenda->end = $request->end;



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
        $agenda = Agendaservicios::all();
        $agendaservicios = Agenda::all();
         return response()->json($agendaservicios);


    }
    public function mostrar()
    {
        $agenda = Agendaservicios::all();
        $servicios = Servicios::all();

        return view('agenda.cliente',compact('agenda'), compact('servicios'));
    }

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

        $agendaservicios = Agenda::create($request->all());

    }

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


    public function edit1($id)
    {

        $agendaservicios = Agenda::find($id);

      // $agendaservicios->start = Carbon::createFromFormat('Y-m-d H:i:s' , $agendaservicios->start)->format('Y-m-d');
    //   $agendaservicios->end = Carbon::createFromFormat('Y-m-d H:i:s' , $agendaservicios->end)->format('Y-m-d');


        return response()->json($agendaservicios);
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

    public function destroy1($id)
    {

        $agendaservicios = Agenda::find($id)->delete();

        return response()->json($agendaservicios);


    }

        public function update1(Request $request, Agenda $agenda){

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

            $agenda->update($request->all());
            return response()->json($agenda);

        }




}
