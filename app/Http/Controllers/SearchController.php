<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function showForm()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // Aquí puedes realizar cualquier lógica de búsqueda con la palabra clave ingresada
        // Por ejemplo, podrías redirigir a una página de resultados con los datos buscados
        // return redirect('/resultados')->with('keyword', $keyword);
        return "Resultados para la palabra clave: " . $keyword;
    }
}
