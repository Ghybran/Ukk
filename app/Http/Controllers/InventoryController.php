<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function show()
    {
        $inventory= Inventory::all();
        return view('inventory',compact('inventory'));
    }
    public function insert()
    {
        $inventory = new Inventory([
            'id'=>request('id'),
            'name_barang'=>request('name_barang'),
            'harga_barang'=>request('harga_barang'),
        ]);
        $inventory->save();
        return redirect('inventory');
    }
    public function update(Request $request)
    {
        $inventory = Inventory::find(request('id'));
        $inventory->name_barang =request('name_barang');
        $inventory->harga_barang =request('harga_barang');
        $inventory->save();
        return redirect('inventory');
    }
    public function delete()
    {
        $inventory = Inventory::find(request('id'));
        $inventory->delete();
        return redirect('inventory');
    }
}
