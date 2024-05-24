<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud form</title>
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
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="text" id="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                    <button type="button" class="btn btn-info mt-3" id="submit">Submit</button>
                    <button type="button" class="btn btn-info mt-3" id="submit"><a href="/show">Show All data</a></button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                $.ajax({
                    url: "formSubmit", // Assuming your PHP script is named "formSubmit.php"
                    data: $("form").serialize(),
                    type: "post",
                    success: function(result){
                        alert(result);
                        $("#myForm")[0].reset();
                    },
                
                });

            });
        });
    </script>
</body>
</html>
