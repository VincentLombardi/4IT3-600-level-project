<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Auth;

class inventoryController extends Controller
{
    public function index()
    {
        // get all the materials
        $inventory = inventory::all();

        return view('inventory.inventory', compact('inventory'));
    }

    public function create()
    {
        return view('inventory.addinventory');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:inventories,name|string|max:100',
            'quantity' => 'required',
            'units' => 'required',
            'purchasedate' => 'required',

        ]);

        $inventory = new Inventory;
        $inventory->name = $request->name;
        $inventory->quantity = $request->quantity;
        $inventory->units = $request->units;
        $inventory->purchasedate = $request->purchasedate;
        $inventory->importedby = Auth::user()->name;
        $inventory->notes = $request->notes;
        $inventory->save();

        return redirect('inventory')->with('status', 'New inventory created')->with('txtcolor', 'text-green-700')->with('brdcolor', 'border-green-300')->with('bgcolor', 'bg-green-100');

    }

    public function remove($id) {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect('inventory');
    }
}
