<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        return view('albums.index');
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
            //Realizamos validaciones (SE PUEDEN Y SE DEBE AÑADIR MAS VALIDACIONES)
        $this->validate($request, [
           'name' => 'required',  //El campo ha de ser requerido
           'cover_image' => 'image|max:2000', //Se debe de subir una imagen de como máximo 2000KB

        ]);
            //EL nombre del fichero que ha subido el usuario (tiene el nombre que tenía en su equipo)
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //pathinfo() es un helper de laravel
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Obtenemos la extensión original con la que el usuario ha subido el fichero
        $extension = $request->file('cover_image')->getClientOriginalExtension();
            //La manera de de guardar el archivo (nombre, fechaSubida, extensión)
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Ruta donde se guardarán las imagenes, y el archivo a subir
        $path = $request->file('cover_image')->storeAs('public/albums_covers', $fileNameToStore);

        return $path;
    }
}
