<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
  private $product;

  // método consultor
  public function __construct(Product $product)
  {
    $this->product = $product;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = "Listagem dos produtos";

    $products = $this->product->all();

    return view('painel.products.index', compact('products', 'title'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = 'Cadastrar Novo Produto';
    $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
//    return "#Form Cad";
    return view('painel.products.create', compact('title', 'categorys'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
//    public function store(Request $request, \App\User $user)
  public function store(Request $request)
  {
    /*
     * array:6 [▼
        "_token" => "NE5iYvtO5j4BZnSsAQjiJmk632S8Q5XRmlM17KPM"
        "name" => "NomeTexto"
        "active" => "1"
        "number" => "998877"
        "category" => "moveis"
        "description" => "descrição texto"
      ]
    */
//    dd($request->all());
//    dd($request->only(['name','number']));
//    dd($request->except(['_token','category']));
//    dd($request->input('name'));

    // Recupera dados do formulário
//      $dataForm = $request->except('_token');
    $dataForm = $request->all();

//      if( $dataForm['active'] == '' )
//          $dataForm['active'] = 0;
//      else
//          $dataForm['active'] = 1;
    $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;


    // Faz o cadastro no BD
//      $insert = $this->product->insert($dataForm);
    $insert = $this->product->create($dataForm);

    if ($insert)
      return redirect()->route('produtos.index');
    else
      return redirect()->back();


    return 'Cadastrando...';
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

  public function tests()
  {
    /*
     * Não recomendado o insert
     * $insert = $this->product->insert([
     */
    /*
     * $insert = $this->product->create([
      'name'        => "Nome do produto 2",
      'number'      => 131313,
      'active'      => true,
      'category'    => "eletronics",
      'description' => "descrição desse produto aqui",
    ]);

    if($insert)
      return "Inserido com sucesso!, ID: {$insert->id}";
    else
      return 'Falha ao inserir!';
    */

//    dd($prod->name);
    /*
     * MODO Improdutivo
     * $prod = $this->product->find(5);

    $prod->name         = "Nome do produto UPDATE";
    $prod->number       = "13222";
    $prod->active       = true;
    $prod->category     = "eletronics";
    $prod->description  = "UPDATE descrição desse produto aqui";
    $update = $prod->save();

    if($update)
      return "Atualizado com Sucesso!";
    else
      return "Falha ao atualizar";*/

    /*
     * FORMA INTERESSANTE
     * $prod = $this->product->find(6);
    $update = $prod->update([
      'name'        => "UPDATE TEST Nome do produto 2",
      'number'      => 11111111,
    ]);

    if($update)
      return "Atualizado com Sucesso!";
    else
      return "Falha ao atualizar";
    */

//    $update = $this->product
//                    ->where('number',11111111)
//                    ->update([
//                          'name'   => "UPDATE__ TEST Nome do produto 2",
//                          'number' => 11111111,
//    ]);
//
//    if($update)
//      return "Atualizado com Sucesso!";
//    else
//      return "Falha ao atualizar";


    //Forma não usada - menos produtiva
    /*    $prod = $this->product;
        $prod->name         = "Nome do produto";
        $prod->number       = "131313";
        $prod->active       = true;
        $prod->category     = "eletronics";
        $prod->description  = "descrição desse produto aqui";

        $insert = $prod->save();
        if($insert)
          return 'Inserido com sucesso!';
        else
          return 'Falha ao inserir!';*/


//    $this->product->insert();
//      return "ok";

//      $prod = $this->product->find(6);
//      $delete = $prod->delete();

//      $prod = $this->product->destroy([1,2,3]);
//      $prod = $this->product->destroy(8);

    $prod = $this->product
      ->where('number', 131313)
      ->delete();

    if ($prod)
      return "Deletado OK!";
    else
      return "Falha ao deletar";
  }

}
