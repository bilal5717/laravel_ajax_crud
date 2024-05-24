<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show crud data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 ">
<button class="btn btn-info"><a href="/"  class="text-white">Add</a></button>
  <table class="table table-bordered table-sm ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>
            <button class="btn btn-primary"><a href="{{url('/edit/'.$row->id)}}"  class="text-white ">Edit</a></button>
            <button class="btn btn-danger"><a href="{{url('/delete/'.$row->id)}}"  class="text-white">Delete</a></button>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
