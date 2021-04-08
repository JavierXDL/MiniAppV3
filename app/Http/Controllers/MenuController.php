<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['spotify']=Menu::paginate(5);
        return view('libro.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosLibro = request()->all();

        $campos=[
            'Nombre'=>'required|string|max:100',
            'Autor'=>'required|string|max:100',
            'DescripcionC'=>'required|string|max:1000',
            'Portada'=>'required|max:10000|mimes:jpeg,png,jpg',
            'description'=>'required|max:1000',
            'Editorial'=>'required|string|max:100',
            'ISBN'=>'required|string|max:100',
            'Npaginas'=>'required|string|max:100',
            'Edicion'=>'required|string|max:100',
            'Pais'=>'required|string|max:100',
            'Anio'=>'required|string|max:100'
            //Metodo de correo
            //'Correo'=>'required|email'
        ];

        $mensaje=[
           
            'required'=>'El :attribute es requerido',
            'Portada.required'=>'la foto requerida'
            
            /*ejemplo para ponerlo a todos los campos de un jalon
            'required'=>'El :(Nombre de tu dato aca)es requerid'
            //en caso de foto
            'Portada.required'=>'La foto es requerida'

            */
        ];

        $this->validate($request, $campos,$mensaje);


        $datosLibro = request()->except('_token');

        if($request->hasFile('Portada')){
            $datosLibro['Portada']=$request->file('Portada')->store('uploads','public');
        }


        Menu::insert($datosLibro);
        //return response()->json($datosLibro);
        return redirect('libro')->with('mensaje','Libro agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(/*Menu $menu*/)
    {
        //
        //$datos['spotify']=Menu::paginate(4);
        //return view('libro.principal',$datos);

        //Metodo de busqueda
        $search = request()->query('search');
        if($search){
            // Query Builder to search in three columns in table books
            $datos['spotify'] = Menu::query()
                ->where('Nombre', 'LIKE', "%{$search}%")
                ->orWhere('Autor', 'LIKE', "%{$search}%")
                ->orWhere('DescripcionC', 'LIKE', "%{$search}%")
                ->get();

            
            return view('libro.principal',$datos);

            //$books = Book::where('title', 'LIKE', "%{$search}%")->get();
        }else{
            $datos['spotify']=Menu::paginate(8);
            return view('libro.principal',$datos);
        }
        //Fin del metodo de busqueda
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$spotify =Menu::findOrFail($id);
        //return view('libro.edit',compact('nose'));
        $pasar=Menu::findOrfail($id);
        return view('libro.edit',compact('pasar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Autor'=>'required|string|max:100',
            'DescripcionC'=>'required|string|max:1000',
            'Portada'=>'required|max:10000|mimes:jpeg,png,jpg',
            'description'=>'required|max:1000',
            'Editorial'=>'required|string|max:100',
            'ISBN'=>'required|string|max:100',
            'Npaginas'=>'required|string|max:100',
            'Edicion'=>'required|string|max:100',
            'Pais'=>'required|string|max:100',
            'Anio'=>'required|string|max:100'
            
            
            //Metodo de correo
            //'Correo'=>'required|email'
        ];

        $mensaje=[
           
            'required'=>'El :attribute es requerido',
            
            
            /*ejemplo para ponerlo a todos los campos de un jalon
            'required'=>'El :(Nombre de tu dato aca)es requerid'
            //en caso de foto
            'Portada.required'=>'La foto es requerida'

            */
        ];

        if($request->hasFile('Portada')){
           $campos=[ 'Portada'=>'required|max:1000|mimes:jpeg,png,jpg']; 
           $mensaje=['Portada.required'=>'la foto requerida'];
        }

        $this->validate($request, $campos,$mensaje);

        //fin
        //Incio
        $datosLibro = request()->except(['_token','_method']);

        if($request->hasFile('Portada')){
            $pasar=Menu::findOrfail($id);
            Storage::delete('public/'.$pasar->Portada);
            $datosLibro['Portada']=$request->file('Portada')->store('uploads','public');
        }


        Menu::where('id','=',$id)->update($datosLibro);
        $pasar=Menu::findOrfail($id);
        //return view('libro.edit',compact('pasar'));

        return redirect('libro')->with('mensaje','Libro Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pasar=Menu::findOrfail($id);

        if(Storage::delete('public/'.$pasar->Portada)){
            Menu::destroy($id);
        }

       
        return redirect('libro')->with('mensaje','Libro Eliminado Correctamente');
    }

    public function vista($id)
    {

        //$datos['spotify']=Menu::paginate(5);
        $pasar=Menu::all()->where('id', $id)->first();
        return view('libro.vista')->with('pasar',$pasar);

    }


 
}
