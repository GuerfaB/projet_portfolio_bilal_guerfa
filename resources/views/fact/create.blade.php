@extends('templates.structure')
@section('content')
    <section id="content">
        <form action="{{ route("fact.store") }}" method="POST">
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
              <input type="text" class="form-control" id="formGroupExampleInput" name="chiffre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Titre</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Text</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="text">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">
                  Submit
              </button>

            </div>
          </form>


    </section>
@endsection