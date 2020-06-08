<div class="card-body">
  <div class="row">
     <div class="col-md-12">
        <div class="form-group row">
           <input type="text" name="id" value=" {{ old('id',$tso->id) }} " id="id" style="display: none">
           <label for="name" class="col-md-3 col-form-label">First Name</label>
           <div class="col-md-9">
              <input type="text" name="name" value=" {{ old('name',$tso->name) }} " id="name" class="form-control @error('name') is-invalid @enderror">
              @error('name')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
              @enderror
           </div>
        </div>
        <div class="form-group row">
           <label for="mobile_no" class="col-md-3 col-form-label">Mobile</label>
           <div class="col-md-9">
              <input type="text" name="mobile_no" value=" {{ old('mobile_no',$tso->mobile_no) }} " id="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror">
              @error('mobile_no')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
              @enderror
           </div>
        </div>
        <input type="hidden" name="is_active" id="is_active" value="{{$tso->is_active}}">
        <div class="form-group row">
           <label for="is_active" class="col-md-3 col-form-label">Is Active</label>
           <div class="col-md-9">
              <input type="checkbox" onclick="test()" name="is_active_" id="is_active_" class="form-control move-left">
           </div>
        </div>
        <p id="text" style="display:none">The value is </p>
        <div class="form-group row">
           <label for="phone" class="col-md-3 col-form-label">HR Id</label>
           <div class="col-md-9">
              <input type="text" name="hr_id" value=" {{ old('phone',$tso->hr_id) }} " id="hr_id" class="form-control">
           </div>
        </div>
        <div class="form-group row mb-0">
           <div class="col-md-9 offset-md-3">
              <button type="submit" class="btn btn-primary">{{ $tso->exists ? 'Update' : 'Save' }}</button>
              <a href="{{route('tso.index')}}" class="btn btn-outline-secondary">Cancel</a>
           </div>
        </div>
     </div>
  </div>
</div>