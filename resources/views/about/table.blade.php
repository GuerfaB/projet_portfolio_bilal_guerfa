<h1 class="text-center mb-5">About</h1>
<div class="d-flex justify-content-center mb-5">
      <a href="{{ route("about.create") }}" class="btn btn-primary">Create</a>
</div>
    <table class="table-responsive">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Anniversaire</th>
            <th scope="col">Website</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Age</th>
            <th scope="col">Degree</th>
            <th scope="col">Email</th>
            <th scope="col">Text</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($about as $i)
          <tr>
            
            <td>{{ $i->id }}</td>
            <td><img src="{{ asset("img/$i->photo") }}" alt=""></td>
            <td>{{ $i->anniversaire }}</td>
            <td>{{ $i->website }}</td>
            <td>{{ $i->phone }}</td>
            <td>{{ $i->city }}</td>
            <td>{{ $i->age }}</td>
            <td>{{ $i->degree }}</td>
            <td>{{ $i->email }}</td>
            <td>{{ $i->text }}</td>
            <td class="d-flex">
                <a href="/admin/about/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/admin/about/{{ $i->id }}" method="POST">
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