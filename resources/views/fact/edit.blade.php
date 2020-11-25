@extends('templates.structure')
@section('content')
    <section id="content">
        <form action="/admin/fact/{{ $fact->id }}" method="POST">
          @method('put')
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
              <label for="formGroupExampleInput">Chiffre</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $fact->chiffre }}" name="chiffre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Titre</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $fact->titre }}" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Text</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $fact->text }}" name="text">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">
                  Submit
              </button>

            </div>
          </form>


    </section>
@endsection