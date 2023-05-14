<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Relationship</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3"> Has Many Through </h2>
                <table class="table table-border table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Country</th>
                            <th>Total Post</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($countries as $item)
                    
                        <tr>

                            <td>{{ $item->name }}</td>
                            <td>{{$item->posts->count()}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body>
</html>