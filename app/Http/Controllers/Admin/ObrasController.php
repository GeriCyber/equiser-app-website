<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Obra;
use Illuminate\Support\Facades\Validator;

class ObrasController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            return datatables()->of(Obra::latest()->get())
            		->editColumn('name', function ($obra_name) {
		                logger($obra_name);
		                return str_limit($obra_name->name, 20);
		            })
            		->editColumn('project', function ($obra_project) {
		                logger($obra_project);
		                return str_limit($obra_project->project, 40);
		            })
		            ->editColumn('equipos', function ($obra_equipos) {
		                logger($obra_equipos);
		                return str_limit($obra_equipos->equipos, 20);
		            })
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-equiser-4 btn-sm"><i class="fa fa-pencil"></i></button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="/admin/obras/'.$data->id.'/imagenes" class="btn btn-info btn-sm"><i class="fa fa-image"></i></a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="show" id="'.$data->id.'" class="showObra btn btn-success btn-sm"><i class="fa fa-eye"></i></button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.obras');
    }

    public function store(Request $request)
    {
        $rules = array(
            'Nombre' => 'unique:obras,name|required|min:4|max:190',
            'Nombre_ingles' => 'required|min:4|max:190',
            'Subtitulo' => 'required|min:4|max:190',
            'Subtitulo_ingles' => 'required|min:4|max:190',
            'Proyecto' => 'required|min:4|max:1500',
            'Proyecto_ingles' => 'required|min:4|max:1500',
            'Equipos' => 'required|min:4|max:190',
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

        $obra = new Obra();
        $obra->name = $request->Nombre;
        $obra->name_en = $request->Nombre_ingles;
        $obra->subtitle = $request->Subtitulo;
        $obra->subtitle_en = $request->Subtitulo_ingles;
        $obra->project = $request->Proyecto;
        $obra->project_en = $request->Proyecto_ingles;
        $obra->equipos = $request->Equipos;
        $obra->slug = str_slug($request->Nombre);
        $obra->venezuela = $venezuela;
        $obra->colombia = $colombia;
        $obra->panama = $panama;
        $obra->usa = $usa;

        $obra->save();

        return response()->json(['success' => 'Obra agregada exitosamente.']);
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Obra::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function update(Request $request)
    {
        $rules = array(
            'Nombre' => 'unique:obras,name,'.$request->hidden_id.'|required|min:4|max:190',
            'Nombre_ingles' => 'required|min:4|max:190',
            'Subtitulo' => 'required|min:4|max:190',
            'Subtitulo_ingles' => 'required|min:4|max:190',
            'Proyecto' => 'required|min:4|max:1500',
            'Proyecto_ingles' => 'required|min:4|max:1500',
            'Equipos' => 'required|min:4|max:190',
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

        $obra = Obra::find($request->hidden_id);
        $obra->name = $request->Nombre;
        $obra->name_en = $request->Nombre_ingles;
        $obra->subtitle = $request->Subtitulo;
        $obra->subtitle_en = $request->Subtitulo_ingles;
        $obra->project = $request->Proyecto;
        $obra->project_en = $request->Proyecto_ingles;
        $obra->equipos = $request->Equipos;
        $obra->slug = str_slug($request->Nombre);
        $obra->venezuela = $venezuela;
        $obra->colombia = $colombia;
        $obra->panama = $panama;
        $obra->usa = $usa;

        $obra->save();

        return response()->json(['success' => 'Obra actualizada exitosamente.']);
    }

    public function show($id)
    {
        $data = Obra::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Obra::findOrFail($id);
        $data->delete();
    }
}
