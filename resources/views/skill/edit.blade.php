@extends('templates.structure')
@section('content')
    <section id="content">
        <form method="POST" action="/admin/skill/{{ $skill->id }}">
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
              <label for="formGroupExampleInput">Language</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $skill->language }}" name="language">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Pourcentage</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $skill->pourcentage }}" name="pourcentage">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">
                Submit
             </button>
          </form>


    </section>
@endsection