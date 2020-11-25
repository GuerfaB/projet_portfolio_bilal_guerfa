<h1 class="text-center mt-5">Portfolio</h1>
<div class="d-flex justify-content-center mb-5">
  <a href="{{ route("portfolio.create") }}" class="btn btn-primary">Create</a>
</div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($portfolio as $i)
          <tr>
            
            <td>{{ $i->id }}</td>
            <td><img src="{{ asset("img/$i->image") }}" alt=""></td>
            <td>{{ $i->category }}</td>
            <td class="d-flex">
                <a href="/admin/portfolio/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/admin/portfolio/{{ $i->id }}" method="POST">
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
