@extends('templates.structure')
@section('content')
    <section id="content">
        <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
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
              <input class="form-control" id="formGroupExampleInput" type="file" value="{{ $about->photo }}" name="photo">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Anniversaire</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->anniversaire }}" name="anniversaire">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Website</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $about->website }}" name="website"">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->phone }}" name="phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">City</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $about->city }}" name="city">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Age</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->age }}" name="age">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Degree</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->degree }}" name="degree">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->email }}" name="email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Freelance</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->freelance }}" name="freelance"">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Text</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->text }}" name="text">
              </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">
                        Submit
                  </button>

              </div>
              
          </form>


    </section>
@endsection