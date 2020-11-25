<h1 class="text-center mt-5">Skill</h1>
<div class="d-flex justify-content-center mb-5">
  <a href="{{ route("skill.create") }}" class="btn btn-primary">Create</a>
</div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Language</th>
            <th scope="col">Pourcentage</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($skill as $i)
          <tr>
            
            <td>{{ $i->id }}</td>
            <td>{{ $i->language }}</td>
            <td>{{ $i->pourcentage }}</td>
            <td class="d-flex">
                <a href="/admin/skill/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/admin/skill/{{ $i->id }}" method="POST">
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