<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    //função mount
    //receber id de referencia 
    //validar
    //buscar id
    //prencher campos
    
    //buscar id
    //validar
    //capturar dados dos campos
    //atualizar
    //função update

    public $categoria_id;
    public $nome;

    public function mount($id){
        $categoria = Categoria::find();

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
        return redirect()->route('categoria.index');
        }

        $this -> categoria_id = $categoria->id;
        $this -> nome = $categoria->nome;

    }

    public function update(){
        $categoria = Categoria::find($this ->categoria_id);

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
        return redirect()->route('categoria.index');
        }
        $categoria->nome = $this->name;
        $categoria->save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('categoria.index');
    }

    
    
    
    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
