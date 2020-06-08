@extends('welcome')
@section('title','TSO App || Map TSO || edit')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-title">
                  <strong>Update Map TSO</strong>
               </div>
               <form action="{{ route('map.update',$map->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                  @include('map-tso.form')
               </form>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection