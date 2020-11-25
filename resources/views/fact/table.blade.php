<h1 class="text-center mt-5">Fact</h1>
<div class="d-flex justify-content-center mb-5">
  <a href="{{ route("fact.create") }}" class="btn btn-primary">Create</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Chiffre</th>
      <th scope="col">Text</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($fact as $i)
    <tr>
      
      <td>{{ $i->id }}</td>
      <td>{{ $i->titre }}</td>
      <td>{{ $i->chiffre }}</td>
      <td>{{ $i->text }}</td>
      <td class="d-flex">
          <a href="/admin/fact/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
          <form action="/admin/fact/{{ $i->id }}" method="POST">
              @csrf
              @method("delete")
              <button type="submit" class="btn btn-danger">
                      Delete
              </button>

          </form>
      </td>

     
    </tr>
    @endforeach
  </tbody>
</table>