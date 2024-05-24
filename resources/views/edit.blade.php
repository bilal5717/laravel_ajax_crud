<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Crud form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 card">
                <form id="myForm" method="POST">
                    @csrf
                    @method('post')
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" class="form-control" name="name" value="{{$data[0]->name}}">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{$data[0]->email}}">
                    </div>
              
                    <button type="button" class="btn btn-info mt-3" id="update">Update</button>
                    <button type="button" class="btn btn-info mt-3" id="back"><a href="/show">Back</a></button>
                    
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#update").click(function(){
                $.ajax({
                    url: "{{url('/update/'.$data[0]->id)}}", // Assuming your PHP script is named "formSubmit.php"
                    data: $("form").serialize(),
                    type: "post",
                    success: function(result){
                        alert(result);
                    },
                
                });
            });
        });
    </script>
</body>
</html>
