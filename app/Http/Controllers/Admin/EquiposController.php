<?php
namespace App\Http\Controllers\Admin;

use App\Equipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EquiposController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            return datatables()->of(Equipo::latest()->get())
            		->editColumn('name', function ($equipo) {
		                logger($equipo);
		                return str_limit($equipo->name, 20);
		            })
            		->editColumn('description', function ($equipo) {
		                logger($equipo);
		                return str_limit($equipo->description, 40);
		            })
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-equiser-4 btn-sm"><i class="fa fa-pencil"></i></button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="/admin/equipos/'.$data->id.'/imagenes" class="btn btn-info btn-sm"><i class="fa fa-image"></i></a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="show" id="'.$data->id.'" class="show btn btn-success btn-sm"><i class="fa fa-eye"></i></button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.equipos');
    }

    public function store(Request $request)
    {
        $rules = array(
            'Nombre' => 'unique:equipos,name|required|min:4|max:190',
            'Nombre_ingles' => 'required|min:4|max:190',
            'Subtitulo' => 'required|min:4|max:190',
            'Subtitulo_ingles' => 'required|min:4|max:190',
            'Descripción' => 'required|min:4|max:1500',
            'Descripción_ingles' => 'required|min:4|max:1500',
            'venezuela' => 'required_without_all:colombia,panama,usa',
    		'colombia' => 'required_without_all:venezuela,panama,usa',
    		'panama' => 'required_without_all:venezuela,colombia,usa',
    		'usa' => 'required_without_all:venezuela,colombia,panama',
            
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $venezuela = false;
        $colombia = false;
        $panama = false;
        $usa = false;

        if ($request->venezuela == 'venezuela') {
        	$venezuela = true;
        } 
        if ($request->colombia == 'colombia') {
        	$colombia = true;
        } 
        if ($request->panama == 'panama') {
        	$panama = true;
        } 
        if ($request->usa == 'usa') {
        	$usa = true;
        }

        $equipo = new Equipo();
        $equipo->name = $request->Nombre;
        $equipo->name_en = $request->Nombre_ingles;
        $equipo->subtitle = $request->Subtitulo;
        $equipo->subtitle_en = $request->Subtitulo_ingles;
        $equipo->description = $request->Descripción;
        $equipo->description_en = $request->Descripción_ingles;
        $equipo->slug = str_slug($request->Nombre);
        $equipo->venezuela = $venezuela;
        $equipo->colombia = $colombia;
        $equipo->panama = $panama;
        $equipo->usa = $usa;

        $equipo->save();

        return response()->json(['success' => 'Equipo agregado exitosamente. ']);
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Equipo::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function update(Request $request)
    {
        $rules = array(
            'Nombre' => 'unique:equipos,name,'.$request->hidden_id.'|required|min:4|max:190',
            'Nombre_ingles' => 'required|min:4|max:190',
            'Subtitulo' => 'required|min:4|max:190',
            'Subtitulo_ingles' => 'required|min:4|max:190',
            'Descripción' => 'required|min:4|max:1500',
            'Descripción_ingles' => 'required|min:4|max:1500',
            'venezuela' => 'required_without_all:colombia,panama,usa',
    		'colombia' => 'required_without_all:venezuela,panama,usa',
    		'panama' => 'required_without_all:venezuela,colombia,usa',
    		'usa' => 'required_without_all:venezuela,colombia,panama',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $venezuela = false;
        $colombia = false;
        $panama = false;
        $usa = false;

        if ($request->venezuela == 'venezuela') {
        	$venezuela = true;
        } 
        if ($request->colombia == 'colombia') {
        	$colombia = true;
        } 
        if ($request->panama == 'panama') {
        	$panama = true;
        } 
        if ($request->usa == 'usa') {
        	$usa = true;
        }

        $equipo = Equipo::find($request->hidden_id);
        $equipo->name = $request->Nombre;
        $equipo->name_en = $request->Nombre_ingles;
        $equipo->subtitle = $request->Subtitulo;
        $equipo->subtitle_en = $request->Subtitulo_ingles;
        $equipo->description = $request->Descripción;
        $equipo->description_en = $request->Descripción_ingles;
        $equipo->slug = str_slug($request->Nombre);
        $equipo->venezuela = $venezuela;
        $equipo->colombia = $colombia;
        $equipo->panama = $panama;
        $equipo->usa = $usa;

        $equipo->save();

        return response()->json(['success' => 'Equipo actualizado exitosamente.']);
    }

    public function show($id)
    {
        $data = Equipo::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Equipo::findOrFail($id);
        $data->delete();
    }
}
