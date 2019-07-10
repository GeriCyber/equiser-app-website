<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Obra;
use App\ObraImages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObrasImagesController extends Controller
{
    public function index($id) {
        $obra = Obra::find($id);
        $images = $obra->images()->orderBy('featured', 'desc')->get();
        return view('admin.images.obras.index')->with(compact('obra', 'images'));
    }

    public function store(Request $request, $id) {

        $this->validate($request, 
        [
            'archivo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Guardar la img
        $file = $request->file('archivo');
        $path = public_path().'/images/obras';
        $fileName = uniqid().$file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
        if ($moved) {
            $obraImage = new ObraImages();
            $obraImage->image = $fileName;
            $obraImage->obra_id = $id;
            $obraImage->save(); //INSERT
        }
        
        return back()->with('success','Imagen agregada exitosamente.');
    }

    public function destroy(Request $request, $id) {
        $obraImage = ObraImages::find($request->image_id);

        //Borrando archivo
        $fullPath = public_path().'/images/obras/'.$obraImage->image;
        $deleted = File::delete($fullPath);

        //Borrando registro de la DB
        if ($deleted) {
            $obraImage->delete();
        }
        return back()->with('success','Imagen eliminada exitosamente.');
    }

    public function select($id, $img) {

        //Desmarcando la img destacada anterior
        ObraImages::where('obra_id', $id)->update([
            'featured' => false
        ]);
        $obraImage = ObraImages::find($img);
        $obraImage->featured = true;
        $obraImage->save();

        return back()->with('success', 'Imagen destacada exitosamente.');
    }
}
