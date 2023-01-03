<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                #dash,#order
                {
                    border:5px solid lightblue;
                    width:500px;
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
                <li> <button> Customer name </button></li>
                <li> <button onclick="order()"> Place Orders </button> </li>
                <li> <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> </li>
            </ol>
        </div>

                
        <h2>welcome to customer dash board</h2>
    </div>


    <div id="order" style="display:none">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Customer name </button></li>
                <li> <button onclick="order()"> Place Orders </button> </li>
                <li> <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> </li>
            </ol>
        </div>

                
        <br> <br>

        <table border="1" cellspacing="0">

                    <thead>
                        <tr>
                            <th>No:</th>
                            <th>&nbsp &nbsp Name</th>
                            <th>&nbsp &nbsp Detail</th>
                            <th>&nbsp &nbsp Price</th>
                            <th colspan="3"> &nbsp &nbsp Action</th>
                        </tr>
                    </thead>


                    @foreach($customer as $customers)
                    <tbody>

                        <tr>
                            <td>{{$customers->id}}</td>
                            <td>&nbsp &nbsp{{$customers->name}}</td>
                            <td>&nbsp &nbsp{{$customers->detail}}</td>
                            <td>&nbsp &nbsp{{$customers->price}}</td>
                            <td>
                            &nbsp &nbsp
                                <button class="btn btn-success">
                                  <a href="{{url('/prodOrder/'.$customers->id)}}">  Place Order </a>
                                </button>
                                
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                
        </table>
    </div>



    <script>
            function order()
                {
                    document.getElementById("order").style.display="block";
					document.getElementById("dash").style.display="none";
                    
                    
                }

            
                </script>
</body>
</html>