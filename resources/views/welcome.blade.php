@extends('layouts.layout')

@section('content')
        <div class="bg-gray-100" />
        <h1>The Traveler's Backpack</h1>
        
        <span>
        <form action="/search" method="post">
            @csrf
            Search: <input type="text" name="searchTB" />
            <button name="searchBtn" >🔍</button>
        </form>

        <form action="/addNew" method="get">
            @csrf
            <button type="submit" name="addNewBtn">
                Add New Item
            </button>
        </form>
        </span>

<!--database display-->

        <table action="/getData" method="get" align="center" width="45%">
            <tr>
                <!--<th>Id</td>-->
                <th>Name</th>
                <th>Quantity</th>
                <th>Type</th>
                <th />
            </tr>

    <!--individual table rows-->
            
            @foreach($items as $item)
            <tr>
                <!--<td>{{ $item->id }} </td>    -->
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->type }}</td>
                <td>
                    <a href="/edit/{{$item->id}}">Edit</a><br>
                    <a href="/delete/{{$item->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        <!--paginates-->
            <tr>
            </tr>

        </table>
        <divalign="center">
            {{ $items->links() }}
            
        </div>
        </form>
        
        

@endsection
