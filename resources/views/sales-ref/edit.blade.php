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
   <h2>Edit Sales Team Member</h2>
  </div>
  <div class="card-body">
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

      <form method="POST" action="{{ route('sales_ref.update',  $sales_ref->id ) }}">
          @csrf
          @method('PUT')

         <input type="hidden" class="form-control" name="id"  value="{{ $sales_ref->id }}"/>
          <div class="form-group">
              <label for="name">Sales Ref. Name:</label>
              <input type="text" class="form-control" name="name"  value="{{ $sales_ref->name }}"  required/>
          </div>

           <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" value="{{ $sales_ref->address }}" required/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" value="{{ $sales_ref->email }}" required/>
          </div>

           <div class="form-group">
              <label for="telephone_no">Telephone:</label>
              <input type="tel" class="form-control" name="telephone_no" value="{{ $sales_ref->telephone_no }}" required/>
          </div>

          <div class="form-group">
              <label for="current_route">Current Route:</label>
              <input type="text" class="form-control" name="current_route" value="{{ $sales_ref->current_route }}" required/>
          </div>

          <div class="form-group">
              <label for="joined_date">Join Date:</label>
              <input type="date" class="form-control" name="joined_date" value="{{ $sales_ref->joined_date }}" required/>
          </div>

          <div class="form-group">
              <label for="comments">Comments:</label>
              <textarea type="text" class="form-control" name="comments" row="3">{{ $sales_ref->comments }}</textarea>
          </div>
            <br/>
          <button type="submit" class="btn btn-primary">Update Sales Representative</button>
      </form>
  </div>

 </div>
</div>
</div>

</body>
</html>
