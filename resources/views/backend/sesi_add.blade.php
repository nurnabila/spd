@extends('backend.layout')

@section('content')
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <h1>Tambah Sesi</h1><br>

          @include('common.alert')
          @include('common.form_error')

          <form method="POST" action="{{ route('user.register.post') }}">
            @csrf
          <div class="form-group row">
            <label for="inputName31" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName1" placeholder="Name" value="{{ old('name') }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail2" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail2" placeholder="Email" value="{{ old('email') }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPIC3" class="col-sm-2 col-form-label">IC No</label>
            <div class="col-sm-10">
              <input type="text" name="ic" class="form-control" id="inputIC3" placeholder="IC No without dash(-)" value="{{ old('ic') }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="4" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
      </div>
    </section>
@endsection