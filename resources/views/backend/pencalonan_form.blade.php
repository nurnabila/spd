@csrf
          <div class="form-group row">
            <label for="inputName31" class="col-sm-2 col-form-label">Sesi</label>
            <div class="col-sm-10">
              <select name="sesi_id" class="form-control">
                @foreach($sesis as $sesi)
                <option value="{{ $sesi->id }}">{{ $sesi->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <fieldset>
            <legend>Calon</legend>
          <div class="form-group row">
            <label for="inputEmail2" class="col-sm-2 col-form-label">Nama Calon</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="name" value="{{ old('name', $calon->name) }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPIC3" class="col-sm-2 col-form-label">No IC</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="ic" class="form-control" placeholder="No IC" value="{{ old('ic', $calon->ic) }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPIC3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email', $calon->email) }}">
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <label for="inputPIC3" class="col-sm-2 col-form-label">Asas</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="asas">{{ old('asas', $pencalonan->asas) }}</textarea>
          </div>
        </div>