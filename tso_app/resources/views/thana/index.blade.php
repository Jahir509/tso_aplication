@extends('welcome')
@section('title','TSO APP || Thana || list')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                     <h2 class="mb-0">Thana List</h2>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Zilla</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($message = session('message'))
                        <div class="alert alert-success" id="hideMe">{{ $message }}</div>
                        @endif
                        @if ($thanas->count())
                        @foreach ($thanas as $index => $thana )
                        <tr>
                           <td>{{ $thana->name }}</td>
                           <td>{{ $thana->zilla_id }}</td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                  </table>
                  {{ $thanas->links()}}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection