@extends('welcome')
@section('title','TSO App || TSO || create')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-title">
                  <strong>Add New TSO</strong>
               </div>
               <form action="{{ route('tso.store') }}" method="POST">
                  @csrf
                  @include('tso.form')
               </form>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection