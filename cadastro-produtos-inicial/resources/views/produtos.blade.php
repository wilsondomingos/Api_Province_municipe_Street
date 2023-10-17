@extends('layout.app', ["current" => "produtos" ])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>


        <table class="table table-ordered table-hover" id="tabelaProdutos">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome </th>
                    <th>Quantidade</th>
                    <th>Preços</th>
                    <th>Categorias</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>

    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button" onclick=" novoProduto()">Novo Produto</button>
    </div>
</div>



<div class="modal" id="dlgProdutos" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form class="form-horizontal" id="formProdutos">

                <div class="modal-header">
                    <h1 class="modal-title">Novo Produto</h1>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id">

                    <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome do Produto</label>
                        <div class="input-group">
                          <input type="text"  class="form-control" name="nome" id="nomeProduto" placeholder="Nome do Produto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Preço</label>
                        <div class="input-group">
                          <input type="number"  class="form-control" name="preco" id="precoProduto" placeholder="Preço">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="quantidadeProduto" class="control-label">Quantidade</label>
                        <div class="input-group">
                          <input type="number"  class="form-control" name="estoque" id="quantidadeProduto" placeholder="Quantidade do Produto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categorias</label>
                        <div class="input-group">
                          <select   class="form-control" id="categoriaProduto" name="categoria_id" >
                          </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                   
                </div>
            </form>



            
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': "{{ csrf_token()}}"
    }
})

function novoProduto(){
    $('#id').val('')
    $('#nomeProduto').val('')
    $('#precoProduto').val('')
    $('#quantidadeProduto').val('')
    $('#dlgProdutos').modal('show')
}

function carregarCategorias(){
    $.getJSON('/api/categorias', function(data){
       

        for(i=0;i<data.length;i++){
            opcao = '<option value ="' + data[i].id + '">' + data[i].nome + '</option>';
            $('#categoriaProduto').append(opcao);
        }
    });
}

function montarLinha(p){
    var linha = "<tr>" +

        "<td>" + p.id + "</td>" +
        "<td>" + p.nome + "</td>" +
        "<td>" + p.estoque + "</td>" +
        "<td>" + p.preco + "</td>" +
        "<td>" + p.categoriaNome + "</td>" +

        "<td>" + 
            '<button type="submit" class="btn btn-sm btn-primary"> Editar </button>' +

            '<button type="submit" class="btn btn-sm btn-danger"> Eliminar </button>' +
            
       "</td>" +

        "</tr>";
        return linha
}

function CarregarProdutos(){
    $.getJSON('/api/produtos', function(produtos){
        

        for(i=0;i<produtos.length;i++){

            linha = montarLinha(produtos[i])
            $('#tabelaProdutos>tbody').append(linha);


        }
    });
}

function criarProduto(){
    prod = {
        nome: $("#nomeProduto").val(),
        preco: $("#precoProduto").val(),
        estoque: $("#quantidadeProduto").val(),
        categoria_id: $("#categoriaProduto").val(),
        
    };
    $.post("/api/produtos", prod,function(data){
            console.log(data)
    });
}

$("#formProdutos").submit(function(event){
    event.preventDefault();
    criarProduto();
    $("#dlgProdutos").modal('hide')
})

$(function(){
    carregarCategorias();
    CarregarProdutos();
})
</script>
@endsection