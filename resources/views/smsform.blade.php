<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    
   <div class="container mt-5">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Example form for componentd</h5></div>
                <div class="card-body">
                    <div class="mb-3">
                        <x-back.inputbox labelName="Full Name" name="name"/>
                    </div>
                    <div class="mb-3">
                        <x-back.inputbox labelName="Number" name="name"/>
                    </div>
                    <div class="mb-3">
                       <x-back.inputbox labelName="Gmail" name="name"/>
                    </div>
                    <div class="mb-3">
                       <x-back.inputbox labelName="Password" name="name"/>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>