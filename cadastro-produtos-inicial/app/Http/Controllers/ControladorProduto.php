<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use DB;
class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function indexView()
     {
         return view('produtos');
     }
 
    public function index()
    {
        //$prods = Produto::all();

        $prods = DB::table('produtos')
            ->join('categorias', 'categorias.id', '=', 'produtos.categoria_id')
            ->select(
                'produtos.id',
                'produtos.nome',
                'produtos.estoque',
                'produtos.preco',

            'categorias.id as categoria_id',
            'categorias.nome as categoriaNome')
            ->orderBy('id','ASC')
            ->get();
        return $prods->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $produto=[
           'nome' => $data['nome'],
           'preco' => $data['preco'],
           'estoque' => $data['estoque'] ,
           'categoria_id' => $data['categoria_id'] 
           
       ];
      
       $produto=Produto::create($produto);
       return json_encode($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
