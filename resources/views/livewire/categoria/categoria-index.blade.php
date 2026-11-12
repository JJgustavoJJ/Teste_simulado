<div>
    <table class="table table-striped">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>

        <tbody>
            @foreach ($categorias as $c)
            <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            
            <td>
                <a href="{{Route('categoria.edit', ['id'=>$c->id])}}" class="btn-solid theme-success">Edit </a>
            </td>

            <td>
                <button wire:click='excluir({{$c->id}})' class="btn-solid theme-danger">Excluir</button>
            </td>

                
            </tr>


            <td>
            <a href="{{Route('categoria.edit', ['id'=> $c->id])}}"></a>
            </td>

        </tbody>
        @endforeach

  </table>
</div>
