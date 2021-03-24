@foreach($produtoTeste as $produto)
    {{$produto->nome}}
    {{$produto->valor_unitario}}
    {{$produto->qtd_estoque}}
    {{$produto->situacao_produto}}

@endforeach
<br>
@foreach($clientes as $cliente)

    {{$cliente->nome}}
@endforeach
