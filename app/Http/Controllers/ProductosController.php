<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
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
        $productos = Productos::where('nombre','like','%'.$filtro.'%')->paginate(5);

        return view('tienda.productos', compact('productos','filtro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('tienda.crear');

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

            'nombre'=> 'required',
            'precio'=> 'required',
            'detalles'=> 'required',
            'stock'=> 'required',
            'imagen'=> 'image|max:2048',
            'puntuacion'=> 'required'
            ]);


        $productos = new Productos();
        $img  = $request->file('imagen')->store('public/imagenes');
        $url = Storage::url($img);

        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->detalles = $request->detalles;
        $productos->stock = $request->stock;
        $productos->imagen = $url ;
        $productos->puntuacion = $request->puntuacion;


        $productos->save();


        //Productos::create([

          //  'url' => $url

      //  ]);

        return  redirect()->route('tienda.productos') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = Productos::find($id);

        //var_dump($id);

        return view('tienda.descripcion', compact('productos'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $productos = Productos::find($id);

        return view('tienda.editar', compact('productos'));
    }


    public function update(Request $request, productos $productos)
    {
        $request->validate([

            'nombre'=> 'required',
            'precio'=> 'required',
            'detalles'=> 'required',
            'stock'=> 'required',
            'imagen'=> 'required',
            'puntuacion'=> 'required'



        ]);


        $img  = $request->file('imagen')->store('public/imagenes');
        $url = Storage::url($img);

        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->detalles = $request->detalles;
        $productos->stock = $request->stock;
        $productos->imagen = $url;
        $productos->puntuacion = $request->puntuacion;
        $productos->save();

        return redirect()->route('tienda.productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( productos $productos)
    {


            $borrar = str_replace('storage','public',$productos->imagen);

            Storage::delete($borrar);

        $productos->delete();

        return redirect()->route('tienda.productos')->with('eliminar', 'eliminado');
    }
}
