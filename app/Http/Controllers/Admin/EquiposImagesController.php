<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Equipo;
use App\EquipoImages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquiposImagesController extends Controller
{
    public function index($id) {
        $equipo = Equipo::find($id);
        $images = $equipo->images()->orderBy('featured', 'desc')->get();
        return view('admin.images.equipos.index')->with(compact('equipo', 'images'));
    }

    public function store(Request $request, $id) {

    	$this->validate($request, 
    	[
            'archivo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Guardar la img
        $file = $request->file('archivo');
        $path = public_path().'/images/equipos';
        $fileName = uniqid().$file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
        if ($moved) {
            $equipoImage = new EquipoImages();
            $equipoImage->image = $fileName;
            $equipoImage->equipo_id = $id;
            $equipoImage->save(); //INSERT
        }
        
        return back()->with('success','Imagen agregada exitosamente.');
    }

    public function destroy(Request $request, $id) {
        $equipoImage = EquipoImages::find($request->image_id);

        //Borrando archivo
        $fullPath = public_path().'/images/equipos/'.$equipoImage->image;
        $deleted = File::delete($fullPath);

        //Borrando registro de la DB
        if ($deleted) {
            $equipoImage->delete();
        }
        return back()->with('success','Imagen eliminada exitosamente.');
    }

    public function select($id, $img) {

        //Desmarcando la img destacada anterior
        EquipoImages::where('equipo_id', $id)->update([
            'featured' => false
        ]);
        $equipoImage = EquipoImages::find($img);
        $equipoImage->featured = true;
        $equipoImage->save();

        return back()->with('success', 'Imagen destacada exitosamente.');
    }
}
