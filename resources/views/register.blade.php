<html>
    <head>
        <title>Registation Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="position-absolute top-50 start-50 translate-middle">
        <center>
        <div class="border border-primary" >
            <nav class="navbar navbar-dark bg-primary">
                <h1>Customer Registation</h1>
            </nav>
            <br>
            <form action="" method="post">
                @csrf
            Name : <input type="text" name="name"><br><br>
            Email : <input type="email" name="email"><br><br>
            Gender : <selection name="gender">
                 <option name="m">Male</option>
                 <option name="f">Female</option>
            </selection><br><br>
            Address : <input type="text" name="address"><br><br>
            Mobile No : <input type="number" name="mobile"><br><br>
            Password : <input type="password" name="password"><br><br>
            <button type="submit" name="register" class="btn btn-primary">Sign up</button><br>
            </form>
        </div>
        <br><br>
        <div class="border border-primary"><br>
        <button type="submit" name="register" class="btn btn-primary">Register Now!</button><br>
        </div>
        </center>
    </body>
</html>
