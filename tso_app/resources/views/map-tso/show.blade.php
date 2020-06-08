@extends('welcome')
@section('title','TSO App || Map TSO || '.$data['name'])
@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Contact Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Name</label>
                    <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $data['name']}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="thana" class="col-md-3 col-form-label">Thana</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $data['thana']}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="is_active" class="col-md-3 col-form-label">Is Active</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $data['is_active'] == 1 ? 'Yes':'No' }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('map.edit',$data['id']) }} " class="btn btn-info">Edit</a>
                        <a href="{{ route('map.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection