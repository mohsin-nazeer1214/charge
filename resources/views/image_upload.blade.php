
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8 Image Upload tutorial example - XpertPhp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
 <div class="row">
 <div class="col-lg-12">
 @if ($message = Session::get('success'))
 <div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong>{{ $message }}</strong>
 </div>
 @endif
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 </div>
 </div> 
  
        <form action="{{ route('upload.post.image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">  
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
 </div>
</body>
</html>