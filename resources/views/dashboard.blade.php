<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <style>
                ol{
                    list-style-type:none;
                    display:inline;
                }

                li 
                {
                    display:inline;  
                }

                h3
                {
                    background-color:blue;
                    margin-top:-1px;
                    text-align:center;
                    color:white;
                }
                .list{
                    background-color:lightblue;
                    margin-top:-10px;
                    height:40px;
                }
                #dash,#product,#employee,#admin
                {
                    border:5px solid lightblue;
                    width:600px;
                    height:400px;
                }

                button 
                {
                    background-color:lightblue;
                    height:30px;
                    
                    border:0.5px solid white;
                    cursor:pointer;
                    margin-top:5px; 
                    
                }

                button:hover
                {
                    color:red;
                }

                form
                {
                    margin-top:-35px;
                    margin-left:320px;
                }

                
        </style>
</head>
<body>

    <div id="dash">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Admin name </button></li>
                <li> <button onclick="product()"> Products   </button> </li>
                <li> <button onclick="employee()"> Employees </button> </li>
                <li>
                    <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> 
                </li>
            </ol>
        </div>

                
        <h2>welcome to admin dash board</h2>

        @if(Session::has('success'))
                <span>{{Session::has('success')}}</span>
        @endif

    </div>

    <div id="product" style="display:none">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Admin name </button></li>
                <li> <button onclick="product()">  Products  </button> </li>
                <li> <button onclick="employee()"> Employees </button> </li>
                <li> 
                    <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> 
                </li>
            </ol>
        </div>

                
        <br> <br>

        <table border="1" cellspacing="0">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>&nbsp &nbsp Name</th>
                            <th>&nbsp &nbsp Detail</th>
                            <th>&nbsp &nbsp Price</th>
                            <th colspan="3"> &nbsp &nbsp Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($products as $product)
                        <tr>
                        <td>{{$product->id}}</td>
                            <td>&nbsp &nbsp{{$product->name}}</td>
                            <td>&nbsp &nbsp{{$product->detail}}</td>
                            <td>&nbsp &nbsp{{$product->price}}</td>
                            <td>
                            &nbsp &nbsp
                                <button class="btn btn-success" onclick="admin()">
                                   <a href="{{url('/product/'.$product->id)}}"> Show </a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{url('/productss/'.$product->id)}}">Edite </a>
                                </button>
                                <button class="btn btn-danger">
                                <a href="{{url('/products/'.$product->id)}}">    Delete </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                
        </table>

    </div>

    <div id="employee" style="display:none">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Admin name </button></li>
                <li> <button onclick="product()">  Products </button> </li>
                <li> <button onclick="employee()"> Employees </button> </li>
                <li> 
                <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form>
                </li>
            </ol>
        </div>
                    <br> <br>
                
        <table border="1" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>&nbsp &nbsp Name</th>
                            <th>&nbsp &nbsp Email</th>
                            <th>&nbsp &nbsp Mobile</th>
                            <th colspan="3"> &nbsp &nbsp Action</th>
                        </tr>
                    </thead>


                    @foreach($store as $shows)
                    <tbody>

                        <tr>
                            <td>{{$shows->id}}</td>
                            <td>&nbsp &nbsp{{$shows->name}}</td>
                            <td>&nbsp &nbsp{{$shows->email}}</td>
                            <td>&nbsp &nbsp{{$shows->mobile}}</td>
                            <td>
                            &nbsp &nbsp
                                <button class="btn btn-success">
                                    <a href="{{url('/empShow/'.$shows->id)}}"> Show </a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{url('/empEdite/'.$shows->id)}}"> Edite </a>
                                </button>
                                <button class="btn btn-danger">
                                    <a href="{{url('/empDelete/'.$shows->id)}}"> Delete </a>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

    </div>

                
                <script>
                function product()
                {
                    document.getElementById("product").style.display="block";
					document.getElementById("dash").style.display="none";
                    
                    document.getElementById("employee").style.display="none";
                    
                }

                function employee()
                {
                    document.getElementById("employee").style.display="block";
                    document.getElementById("product").style.display="none";
                    document.getElementById("dash").style.display="none";
                    
                }

                
                </script>
</body>
</html>