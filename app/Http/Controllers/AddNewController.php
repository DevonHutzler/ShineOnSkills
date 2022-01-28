<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class AddNewController extends Controller
{
    public function addPage()
    {
        return view('addNew');
    }

    public function addNewItem(Request $request)
    {
        //trigger on 'Add New Item' button press
        //gets data from text boxes
        event(new AddNewController($request->input('item')));

        //add to database
        DB::table('inventory')->insert([
            'name' => request('nameTB'),
            'quantity' => request('quantTB'),
            'type' => request('typeSelect')
        ]);
        
        return redirect('/');
    }

    public function cancelNew()
    {
        return redirect('/');
    }

}
