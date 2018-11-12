<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class ItemController extends Controller
{
    public function itemsCatalogos(Request $request, $id){

            $i = item::items1($id);
            return response()->json($i);

    }
}
