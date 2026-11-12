<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    
    public function excluir($categoria_id){
        $categoria = Categoria::find($categoria_id);

         if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
        return redirect()->route('categoria.index');
}
        $categoria->delete();
    }


    public function render()
    { 

         //$categorias = Categoria::where('nome', '=', $this->pesquisa_nome)->get();
        $categorias = Categoria::all();
        return view('livewire.categoria.categoria-index', compact('categorias'));
    }
}
