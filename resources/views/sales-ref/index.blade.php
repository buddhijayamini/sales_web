<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sales Ref:</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<div class="card">
  <div class="card-header">
   <h2>Sales Team</h2>
  </div>
  <div class="card-body">
  <button type="submit" class="btn btn-secondary" style="float:right"><a href="{{ url('sales_ref/create') }}"  style="color: white">Add New</a></button>
  <br/><br/>
    <table class="table table-responsive table-bordered">
    <thead class="table-secondary">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Current Route</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     @foreach($representatives as $ref)
      <tr>
        <td>{{$ref->id }}</td>
        <td>{{$ref->name ?? ''}}</td>
        <td>{{$ref->email ?? ''}}</td>
        <td>{{$ref->telephone_no ?? ''}}</td>
        <td>{{$ref->current_route ?? ''}}</td>
        <td><a href="{{ route('sales_ref.show',$ref->id) }}">View</a></td>
        <td><a href="{{ route('sales_ref.edit',$ref->id) }}">Edit</a></td>
        <td>
        <form id="myform" action="{{ route('sales_ref.destroy', $ref->id) }}" method="POST">
            @csrf
            @method('DELETE')
           {{-- <a href="javascript:;" onclick="document.getElementById('myform').submit()">Delete</a> --}}
            <button type="submit" class="btn-sm btn-danger">Delete</button>
         </form>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>

</body>
</html>
