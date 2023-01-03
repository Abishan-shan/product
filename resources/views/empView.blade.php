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
                    width:750px;
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
                    margin-left:420px;
                }
        </style>
</head>
<body>
    <div id="dash">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Employee name </button></li>
                <li> <button> <a href="{{route('emp.reset')}}"> Reset Password </a> </button></li>
                <li> <button onclick="order()"> My Orders </button> </li>
                <li> <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> </li>
            </ol>
        </div>

                
        <h2>welcome to employee dash board</h2>
    </div>


    <div id="order" style="display:none">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Employee name </button></li>
                <li> <button> <a href="{{route('emp.reset')}}"> Reset Password </a> </button></li>
                <li> <button onclick="order()"> My Orders </button> </li>
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
                            <th>&nbsp No</th>
                            <th>&nbspProduct Name</th>
                            <th>&nbsp  Detail</th>
                            <th>&nbsp &nbsp &nbspPrice</th>
                            <th>&nbsp &nbsp  Cust.Name</th>
                            <th>&nbsp &nbsp Cust.Address</th>
                            <th>&nbsp &nbsp Cust.Mobile</th>
                            <th>&nbsp &nbsp Delivered</th>
                        </tr>
                    </thead>

                    
                    
                    @foreach($order as $orders)
                    <tbody>

                        <tr>
                            
                            <td>{{$orders->id}}</td>
                            
                            <td>{{$orders->name}}</td>
                            <td>{{$orders->detail}}</td>
                            <td>&nbsp &nbsp{{$orders->price}}</td>
                            <td>&nbsp &nbsp{{$orders->cusName}}</td>
                            <td>&nbsp &nbsp {{$orders->cusAddress}}</td>
                            <td>{{$orders->cusMobile}}</td>
                            <td class="yes{{$orders->id}}"> <button class="btn btn-success" onclick="deliver{{$orders->id}}()" >yes</button> </td>
                            
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

        
            function deliver1()
            {
                
                var text=document.getElementsByClassName("yes1"); 
               
                
                    //text[1].innerHTML='delivered';
                    text[0].innerHTML='delivered';
            }

            function deliver2()
            {
                
                var text=document.getElementsByClassName("yes2"); 
               
                
                    //text[1].innerHTML='delivered';
                    text[0].innerHTML='delivered';
            }

            function deliver3()
            {
                
                var text=document.getElementsByClassName("yes3"); 
               
                
                    //text[1].innerHTML='delivered';
                    text[0].innerHTML='delivered';
            }

            function deliver4()
            {
                
                var text=document.getElementsByClassName("yes4"); 
               
                
                    //text[1].innerHTML='delivered';
                    text[0].innerHTML='delivered';
            }


            function deliver5()
            {
                
                var text=document.getElementsByClassName("yes5"); 
               
                
                    //text[1].innerHTML='delivered';
                    text[0].innerHTML='delivered';
            }
            
                </script>
</body>
</html>