@extends('welcome')
@section('title','TSO App || Map TSO || create')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-title">
                  <strong>Map New TSO</strong>
               </div>
               <form action="{{ route('map.store') }}" method="POST">
                  @csrf
                  @include('map-tso.form')
               </form>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection