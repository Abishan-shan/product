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
                #dash,#product,#employee,#edite
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
                    margin-left:310px;
                }

                #ed{

                    margin-left:5px;
                }
                
        </style>
</head>
<body>
<div id="edite" >
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Admin name </button></li>
                <li> <button onclick="product()"> <a href="{{url('/dashh')}}"> Products </a> </button> </li>
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
         
    
    <form action="{{route('product.place')}}" method="post" id="ed">
        @csrf
       
        <input type="hidden" name="id" value="{{$cush->id}}"> <br> <br>
        <input type="hidden" name="cusName" value="{{$register->name}}">
        <input type="hidden" name="cusAddress" value="{{$register->address}}">
        <input type="hidden" name="cusMobile" value="{{$register->mobileno}}">
        <input type="hidden" name="name" value=" {{$cush->name}}">
        <input type="hidden" name="price" value=" {{$cush->price}}">
        <input type="hidden" name="detail" value=" {{$cush->detail}}">
        
        <label>Product Name: {{$cush->name}}</label>
       <br> <br>


        <label>Employee:</label>

        <select name="empName" id="">
            <option value=""></option>
            @foreach($emp as $emps)
            <option value="{{$emps->name}}"> {{$emps->name}}</option>
            @endforeach
            
        </select>
        <br> <br>

        <label for="price">Price: {{$cush->price}}</label>
        <br> <br>

                <input type="submit" class="btn btn-success" value="order">
        
    </form>   

    </div>
</body>
</html>