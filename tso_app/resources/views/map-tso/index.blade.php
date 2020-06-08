@extends('welcome')
@section('title','TSO App || Map TSO || list')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                     <h2 class="mb-0">All Tso Mapping</h2>
                     <div class="ml-auto">
                        <a href="{{ route('map.create')}}" class="btn btn-success" onclick="create()"><i class="fa fa-plus-circle"></i> Add New</a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th scope="col">Tso Name</th>
                           <th scope="col">Thana Name</th>
                           <th scope="col">Is Active</th>
                           <th scope="col">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($message = session('message'))
                        <div class="alert alert-success" id="hideMe">{{ $message }}</div>
                        @endif
                        @if ($data->count())
                        @foreach ($data as $index => $item )
                        <tr>
                           <td>{{ $item['name'] }}</td>
                           <td>{{ $item['thana'] }}</td>
                           <td>{{ $item['is_active'] == 1 ? 'Yes':'No' }}</td>
                           <td width="150">
                              <a href="{{ route('map.show',$item['id']) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                              <a href="{{ route('map.edit', $item['id']) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                           </td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                  </table>
                  {{$data->links()}}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection