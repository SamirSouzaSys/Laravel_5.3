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
    return "Home page do site";
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
