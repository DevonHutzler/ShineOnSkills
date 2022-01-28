@extends('layouts.layout')

@section('content')
        <div class="bg-gray-100" />
        <h1>The Traveler's Backpack</h1>
        <h3>Add New Item</h3>
                
        <form action="/addNew" method="post">
            @csrf
            <table align="center" width="20%">
            <tr><td>Name:</td>       <td><input type="text" name="nameTB" /></td></tr>
            <tr><td>Quantity:</td>   <td><input type="text" name="quantTB" /></td></tr>
            <tr><td>Type:</td>       <td><select name="typeSelect"> 
                            <option>Armor   </option>
                            <option>Cloth   </option>
                            <option>Food    </option>
                            <option>Gem     </option>
                            <option>Herb    </option>
                            <option>Leather </option>
                            <option>Metal   </option>
                            <option>Mount   </option>
                            <option>Pet     </option>
                            <option>Potion  </option>
                            <option>Quest   </option>
                            <option>Recipe  </option>
                            <option>Weapon  </option>
                            <option>Misc    </option>
                        </select></td></tr>
            </table><br>
                        <button type="submit" name="addNewBtn">
                            Add New Item
                        </button>
        </form>
        <form action="/addNew/cancel" method="post">
                        @csrf
                        <button type="submit" name="cancelNewBtn">
                            Cancel Creation
                        </button>
        </form>

@endsection
