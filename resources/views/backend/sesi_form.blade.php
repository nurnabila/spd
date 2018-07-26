@csrf
          <div class="form-group row">
            <label for="inputName31" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName1" placeholder="Name" value="{{ old('name',$sesi->name) }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail2" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="checkbox" name="status" {{ old('status', $sesi->status) ? 'checked' : '' }}>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPIC3" class="col-sm-2 col-form-label">Pingat</label>
            <div class="col-sm-10">
              <input type="text" name="pingat" class="form-control" placeholder="Pingat Name" value="{{ old('pingat', $sesi->pingat) }}">
            </div>