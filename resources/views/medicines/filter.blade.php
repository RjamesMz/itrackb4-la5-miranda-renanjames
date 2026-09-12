
@extends('layouts.app')

@section('title', $filter ?: 'All Medicines' )

@section('content')
    <table>
         @if ($filter)
        <p>Showing items filtered by: {{ $filter }}</p>
    @else
        <p>Showing all items.</p>
    @endif
   
     <table class="table table-striped table-primary" border="1">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Stock</th>
            <th>Expiry</th>
            <th>Type</th>
        </tr>
        @forelse ($medicines as $medicine)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a href="{{ route('medicines.show', $medicine['id']) }}"> 
                             {{ $medicine['name'] }}
                    </a>
                 </td>

                <td>
                    @if ($medicine['stock'] < 75)
                        <p> Low Stock </p>
                    @else
                       <p> Available </p>
                    @endif
                
                </td>
                <td>{{ $medicine['expiry_date'] }}</td>
                <td>{{ $medicine['type'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">  
                    <b >No Medicine Found: {{ $filter }} </b>
                </td>
            </tr>
        @endforelse
    </table>
@endsection


