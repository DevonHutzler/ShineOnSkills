@extends('layouts.layout')

@section('content')
        <div class="bg-gray-100" />
        <h1>The Traveler's Backpack</h1>
        <h3>Edit Item</h3>
                
        <form action="/edit/{id}" method="post">
            @csrf
            <table align="center" width="20%">
            <tr><td>Name:</td>       <td><input type="text" value="{{ $editem[1] }}" name="nameTB" /></td></tr>
            <tr><td>Quantity:</td>   <td><input type="text" value="{{ $editem[2] }}" name="quantTB" /></td></tr>
            <tr><td>Type:</td>       <td><select name="typeSelect"> 
                            <option selected>{{ $editem[3] }}</option>
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
                        <button type="submit" name="updateBtn">
                            Update Item
                        </button>  
        </form>
        <form action="/edit/{id}/cancel" method="post">
                        @csrf
                        <button type="submit" name="cancelUpdateBtn">
                            Cancel Changes
                        </button>
        </form>

@endsection