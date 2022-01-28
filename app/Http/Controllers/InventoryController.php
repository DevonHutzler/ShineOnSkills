<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;


class InventoryController extends Controller
{
    public function getData()
    {
        //get all data from DB
        $dbArray = DB::table('inventory')
                        ->select('*')
                        ->paginate(7);
        
        //pass data from array into view
        return view('welcome', ['items' => $dbArray]);    //array name = variable used by view
    }

    public function dbSearch(Request $find)
    {
        //trigger on Search button clicked
        //gets data from text box
        event(new InventoryController($find->input('results')));
        $searching = request('searchTB');
        $searching = "%".$searching."%";    //impartial search; . appends strings
        
        //Query to database
        $dbSearch = DB::table('inventory')
                        ->select('*')
                        ->where('name', 'LIKE', $searching)
                        ->paginate(7);
        
        
        return view('welcome', ['items' => $dbSearch]);
    }


    public function dbDelete($id)
    {
        DB::table('inventory')
            ->where('id', '=', $id)
            ->delete();
        
        return redirect('/');
    }

}
