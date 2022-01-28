<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemController extends Controller
{
    public function editPage(Request $request, $id)
    {
        //store id number
        $request->session()->put('idNum', $id);

        $query = DB::table('inventory')
                        ->select('*')
                        ->where('id', $id)
                        ->get();

       //assign query to array
       $fields = [              //array indexes
        $query[0]->id,          //0 id
        $query[0]->name,        //1 name
        $query[0]->quantity,    //2 quantity
        $query[0]->type         //3 type
        ];
        
        return view('item', ['editem'=> $fields]);
    }

    public function updateItem(Request $request)
    {
        //trigger on button click
        //gets record ID number back
        $pulled = $request->session()->get('idNum');
        
        //Updates database
        DB::table('inventory')
            ->where('id', $pulled)
            ->update([
                'name' => request('nameTB'),
                'quantity' => request('quantTB'),
                'type' => request('typeSelect')
        ]);
        
        return redirect('/');
    }

    public function cancelUpdate()
    {
        return redirect('/');
    }
}