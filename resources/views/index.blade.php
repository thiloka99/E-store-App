
<html>
    <head>
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="position-absolute top-50 start-50 translate-middle">
        
        <center>
        <div class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
            <span class="d-block p-2 text-bg-primary">
                <h1>E-Store</h1>
            </span>
            <br>
            @if(isset(Auth::user()->email))
            <script>window.location="/dashboard.admin";</script>
            @endif

            @if($message=Session::get('error'))
            <strong class="text-danger">{{$message}}</strong>
            @endif

            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

            <form action="{{url('login55')}}" method="post">
            @csrf
            Email : <input type="email" name="email"><br><br>
            Password : <input type="password" name="password"><br><br>
            <button type="submit" name="login" class="btn btn-primary">Sign in</button><br>
            </form>
        </div>
        
        <br>

        <div class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
            <br>
            <form action="{{url('reg')}}" method="post">
            @csrf
             <button type="submit" name="register" class="btn btn-primary">Register Now!</button><br>
            </form>
        </div>
        </center>
    </body>
</html>
