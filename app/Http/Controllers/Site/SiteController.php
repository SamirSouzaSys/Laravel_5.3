<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
  public function __construct()
  {
//    $this->middleware('auth');
//    $this->middleware('auth')
//      ->only([
//        'contato',
//        'categoria'
//    ]);
//    $this->middleware('auth')
//                    ->except([
//                      'index',
//                      'contato'
//                    ]);
  }

  public function index()
  {
    $teste1 = 1;
    $teste2 = 12;
    $teste3 = 123;
//    return view('teste',["teste" => $teste]);
    return view('site.home.teste',compact('teste1','teste2', 'teste3'));
  }

  public function contato()
  {
    return "Page Contato";
  }

  public function categoria($id)
  {
    return "Listagem dos posts da categoria: $id";
  }

  public function categoriaOp($id = 1)
  {
    return "Listagem dos posts da categoria OPCIONAL: $id";
  }
}
