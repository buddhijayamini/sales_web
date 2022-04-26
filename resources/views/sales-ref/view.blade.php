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
   <h2>View Sales Team Member</h2>
  </div>
  <div class="card-body">
    <div>
          <input type="hidden" class="form-control" name="id"  value="{{ $ref->id }}"/>
          <div class="form-group">
              <label for="name">Sales Ref. Name:</label>
              <label class="form-control" for="name">{{ $ref->name }}</label>
          </div>

           <div class="form-group">
              <label for="address">Address:</label>
              <label class="form-control" for="address">{{ $ref->address }}</label>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <label class="form-control" for="email"> {{ $ref->email }}</label>
          </div>

           <div class="form-group">
              <label for="telephone_no">Telephone:</label>
              <label class="form-control" for="telephone_no" >{{ $ref->telephone_no }}</label>
          </div>

          <div class="form-group">
              <label for="current_route">Current Route:</label>
              <label class="form-control" for="current_route">{{ $ref->current_route }}</label>
          </div>

          <div class="form-group">
              <label for="joined_date">Join Date:</label>
              <label class="form-control" for="joined_date">{{ $ref->joined_date }}</label>
          </div>

          <div class="form-group">
              <label for="comments">Comments:</label>
              <textarea type="text" class="form-control" name="comments" row="3" readonly>{{ $ref->comments }}</textarea>
          </div>
  </div>

 </div>
</div>
</div>

</body>
</html>
