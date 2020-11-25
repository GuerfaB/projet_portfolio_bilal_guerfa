@extends('templates.structure')
@section('content')
    <section id="content">
        <form method="POST" action="/admin/portfolio/{{ $portfolio->id }}" enctype="multipart/form-data">
          @csrf
          @method('put')
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
              <label for="formGroupExampleInput">Image</label>
              <input type="file" class="form-control" id="formGroupExampleInput" value="{{ $portfolio->image }}" name="image" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Category</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $portfolio->category }}" name="category">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">
                Submit
             </button>


            </div>
        </form>


    </section>
@endsection