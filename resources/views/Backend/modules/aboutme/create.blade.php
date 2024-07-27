@extends('Backend.dashboard')

@section('page_title','About-me')


@section('content')
<div class="container m-3">
  <div class="row ">
    <div class="card mx-auto pt-3" style="width: 30rem;">
      <div class="card-header text-center">
        <h2>About Me</h2>
      </div>
      <div class="card-body">
        <form action="{{route('aboutme.store')}}" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="age" placeholder="Age">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="language" placeholder="language">
            </div>
            <div class="form-group col-md-6">
              <select class="form-control"id="gender" name="gender" placeholder="Gender">
                <option selected>Gender</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control"id="freelance" name="freelance" placeholder="Freelance">
                <option selected>Freelance</option>
                <option value="0" class="text-success">Available</option>
                <option value="1" class="text-danger">Unavailable</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="experience" placeholder="Experience">
            </div>
            
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="address" placeholder="Address">
            </div>
            
          </div>
          <button type="submit" class="btn btn-primary form-control">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
