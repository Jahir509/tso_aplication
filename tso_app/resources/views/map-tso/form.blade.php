<div class="card-body">
  <div class="row">
     <div class="col-md-12">
        <div class="form-group row">
           <label for="tso_id" class="col-md-3 col-form-label">Officer</label>
           <div class="col-md-9">
              <select name="tso_id" id="tso_id" class="form-control @error('tso_id') is-invalid @enderror">
              @foreach ($officers as $id => $name)
              <option {{ $id == old('tso_id',$map->tso_id) ? 'selected' : '' }} value="{{ $id }}">{{$name}}</option>
              @endforeach
              </select>
              @error('tso_id')
              <div class="invalid-feedback">
                 Please Select an Officer
              </div>
              @enderror
              </select>
           </div>
        </div>
        <div class="form-group row">
           <label for="thana_id" class="col-md-3 col-form-label">Thana</label>
           <div class="col-md-9">
              <select name="thana_id" id="thana_id" class="form-control @error('thana_id') is-invalid @enderror">
              @foreach ($thanas as $id => $name)
              <option {{ $id == old('thana_id',$map->thana_id) ? 'selected' : '' }} value="{{ $id }}">{{$name}}</option>
              @endforeach
              </select>
              @error('thana_id')
              <div class="invalid-feedback">
                 Please Select a Thana
              </div>
              @enderror
              </select>
           </div>
        </div>
        <div class="form-group row">
           <label for="is_active" class="col-md-3 col-form-label">Is Active</label>
           <div class="col-md-9">
              <input type="text" value="{{$map->is_active}}" name="is_active" id="is_active" style="display: none">
              <input type="checkbox" onclick="test()" name="is_active_" id="is_active_" class="form-control move-left">
           </div>
        </div>
        <hr>
        <div class="form-group row mb-0">
           <div class="col-md-9 offset-md-3">
              <button type="submit" class="btn btn-primary">{{ $map->exists ? 'Update' : 'Save'}}</button>
              <a href="{{ route('map.index')}}" class="btn btn-outline-secondary">Cancel</a>
           </div>
        </div>
     </div>
  </div>
</div>