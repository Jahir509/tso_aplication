@extends('welcome')
@section('title','TSO App || TSO || list')
@section('content')
<main class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                     <h2 class="mb-0">All Tso</h2>
                     <div class="ml-auto">
                        <a href="{{ route('tso.create')}}" class="btn btn-success" onclick="create()"><i class="fa fa-plus-circle"></i> Add New</a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Mobile</th>
                           <th scope="col">Is Active</th>
                           <th scope="col">HR ID</th>
                           <th scope="col">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($message = session('message'))
                        <div class="alert alert-success" id="hideMe">{{ $message }}</div>
                        @endif
                        @if ($tso_list->count())
                        @foreach ($tso_list as $index => $tso )
                        <tr>
                           <td>{{ $tso->name }}</td>
                           <td>{{ $tso->mobile_no }}</td>
                           <td>{{ $tso->is_active == 1 ? 'Yes':'No'}}</td>
                           <td>{{ $tso->hr_id}}</td>
                           <td width="150">
                              <a href="{{ route('tso.show', $tso->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                              <a href="{{ route('tso.edit', $tso->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                           </td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                  </table>
                  {{ $tso_list->links()}}
                  {{-- this small tiny code for pagination--}}
                  {{-- here the Id will be mathced with blade page Id not Model Id --}}
                  {{--$contacts->appends(request()->only('company_id'))->links() --}}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection