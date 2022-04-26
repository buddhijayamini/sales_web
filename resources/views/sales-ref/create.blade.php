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
   <h2>Add Sales Team Member</h2>
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
      <form method="post" action="{{ route('sales_ref.store') }}">
          @csrf
          <div class="form-group">
              <label for="name">Sales Ref. Name:</label>
              <input type="text" class="form-control" name="name" required/>
          </div>

           <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" required/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" required/>
          </div>

           <div class="form-group">
              <label for="telephone_no">Telephone:</label>
              <input type="tel" class="form-control" name="telephone_no" required/>
          </div>

          <div class="form-group">
              <label for="current_route">Current Route:</label>
              <input type="text" class="form-control" name="current_route" required/>
          </div>

          <div class="form-group">
              <label for="joined_date">Join Date:</label>
              <input type="date" class="form-control" name="joined_date" required/>
          </div>

          <div class="form-group">
              <label for="comments">Comments:</label>
              <textarea type="text" class="form-control" name="comments" row="3"></textarea>
          </div>
            <br/>
          <button type="submit" class="btn btn-primary">Add Sales Representative</button>
      </form>
  </div>

 </div>
</div>
</div>

</body>
</html>
