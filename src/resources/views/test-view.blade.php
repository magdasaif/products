<!DOCTYPE html>
<html>
<head>
    <title>Teat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class= "card-header bg-primary">
                        <h3 class="text-white">Teat</h3>
                    </div>
                    <div class="card-body">
   
                        @if(Session::has('success'))
                            <div class= "alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                      
                        <form method="POST" action="{{ route('store_image') }}" id="contactUSForm" enctype ='multipart/form-data'>
                            {{ csrf_field() }}
                               
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="image" value="{{ old('image') }}">
                                    </div>
                                </div>
                            </div>
                      
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>