@include('dashboard.header')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>admin</title>
</head>
<body>
    <h1>Hello
    

    @if(Session::has('name')) 
	{{ Session::get('name') }}
    @endif
    
    Welcome to Admin Dashboard!
    </h1>
</body>