
@extends('layouts.app')

@section('title', $medicine['name'])

@section('content')

   

       

        <div class="card">
       
            <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <h3 class="">Medicine Name: {{ $medicine['name'] }}</h3></p></li>
                    <li class="list-group-item"><p>Stock: {{ $medicine['stock'] }}</p></li>
                    <li class="list-group-item"> <p>Expiry Date: {{ $medicine['expiry_date'] }}</p></li>
                    <li class="list-group-item"><p>Type: {{ $medicine['type'] }}</p></li>
                    <li class="list-group-item"> <p>Available: {{ $medicine['is_available'] }}</p></li>
                     
                </ul>
                <a href="{{ route('medicines.index') }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>

@endsection
