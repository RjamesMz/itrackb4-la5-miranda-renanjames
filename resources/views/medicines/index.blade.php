
@extends('layouts.app')

@section('title', 'All Medicines')

@section('content')
   
    <table class="table table-striped table-primary" border="1" cellpadding="8">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Stock</th>
            <th>Expiry Date</th>
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
                        <p>Low Stock</p>
                    @else
                       <p>Available</p>
                    @endif
                </td>

                <td>{{ $medicine['expiry_date'] }}</td>
            </tr>

        @empty
             <tr>
                <td colspan="4">  
                    <b >No Medicine Found </b>
                </td>
            </tr>

        @endforelse
    </table>
@endsection
