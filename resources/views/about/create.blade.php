@extends('templates.structure')
@section('content')
    <section id="content">
        <form action="{{ route("about.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
              </div>
            @endif
            <div class="form-group">
              <label for="formGroupExampleInput">Photo</label>
              <input class="form-control" id="formGroupExampleInput" type="file"  name="photo">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Anniversaire</label>
              <input type="text" class="form-control" id="formGroupExampleInput2"  name="anniversaire">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Website</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="website">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">City</label>
                <input type="text" class="form-control" id="formGroupExampleInput"  name="city">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Age</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="age">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Degree</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="degree">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Freelance</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="freelance">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Text</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="text">
              </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">
                        Submit
                  </button>

              </div>
              
          </form>


    </section>
@endsection