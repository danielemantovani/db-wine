@extends('layouts.app')

@section('content')
   <div class="container-md">
      <h1>Wine List</h1>

      <div class="row">

         @foreach ($winesObj as $wine)
            <div class="col-4">

               <div class="card">

                  <img src="{{ $wine->image }}" class="img-fluid" alt="...">

                  <div class="card-body">

                     <h5 class="card-title">Wine: {{ $wine->wine }}</h5>

                     <h4 class="card-subtitle">Winery: {{ $wine->winery }}</h4>

                     <h4 class="card-subtitle">Location: {{ $wine->location }}</h4>

                  </div>

               </div>

            </div>
         @endforeach

      </div>

   </div>
@endsection
