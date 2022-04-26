<?php

namespace App\Http\Controllers;

use App\Models\Casal;
use App\Models\Ciutat;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CasalsController extends Controller
{
    public function index()
    { 
        $info_casals = Casal::select(
            'casals.*',
            'ciutats.nombre as city_nombre',
            )
            ->join('ciutats','ciutats.id','=','casals.id_ciutat')
            ->get();

        return view('home', compact('info_casals'));
    } 
    
    public function create(){

        $ciutats = Ciutat::get();
        return view('create',compact('ciutats'));
    }

    public function store(Request $request){
        
        $entrada = $request->all();
        Casal::create($entrada);

        return redirect()->route('home');
    }
    
    public function destroy($id)
    {
        Casal::find($id)->delete();
        return redirect()->route('home');
    }

    
    public function edit($id)
    {
        $ciutats = Ciutat::get(); 

        $info_casals = Casal::select(
            'casals.*',
            'ciutats.nombre as city_nombre',
            )
            ->join('ciutats','ciutats.id','=','casals.id_ciutat')
            ->where('casals.id','=',$id)
            ->get();
        
        return view('edit',compact('info_casals','ciutats'));
    }


    public function update(Casal $casal,$id)
    {
        $casal= Casal::find($id);
        $casal->update([
            'nom' => request('nom'),
            'id_ciutat' => request('id_ciutat'),
            'data_inici' => request('data_inici'),
            'data_final' => request('data_final'),
            'n_places' => request('n_places'),
        ]);
        return redirect()->route('home');
    }
}