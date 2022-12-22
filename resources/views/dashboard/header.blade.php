<head>
        <title>E-Store</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="btn-primary" style="padding:5px"><h1 style="text-align:center">E- Store</h1></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
   @if(Auth::user()->role == "admin")
      <div class="btn-info col-sm-12">
         <a><button class="btn col-sm-2 btn-info">{{ Auth::user()->name }}</button></a>
         <a href="{{route('products.index')}}"><button class="btn col-sm-3 btn-info">products</button></a>
         <a href="{{route('users.index')}}"><button class="btn col-sm-3 btn-info">employee</button></a>
         <a href="{{route('logout')}}"><button class="btn col-sm-3 btn-info">logout</button></a>
      </div>
   @elseif(Auth::user()->role == "employee")
      <div style="background-color:brown; color:white">Employee dashboard</div>
      <div>{{ Auth::user()->name }}
         <a href="{{route('myorder')}}">My Orders</a>
         <a href="{{route('logout')}}">logout</a>
      </div>
   @elseif(Auth::user()->role == "customer")
      <div style="background-color:brown; color:white">Customer dashboard</div>
      <div>{{ Auth::user()->name }}
         <a href="{{route('orders.index')}}">Place Orders</a>
         <a href="{{route('logout')}}">logout</a>
      </div>
   @endif
</body>
 