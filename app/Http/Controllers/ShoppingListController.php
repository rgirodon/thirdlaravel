<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingListController extends Controller
{
    public function getItems($type) {
        
        $items = DB::table('shopping_list_items')->where('type', $type)->get();
        
        return $items;
    }
    
    public function deleteItem($id) {
        
        DB::table('shopping_list_items')->where('id', $id)->delete();
    }
    
    public function addItem(Request $request) {
        
        DB::table('shopping_list_items')->insert([
            
            'type' => $request->input('type'),
            
            'item' => $request->input('item')
        ]);
    }
}
