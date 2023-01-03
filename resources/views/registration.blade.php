<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
                form
                {
                    border:3px solid blue;
                    padding-left:50px;
                    width:500px;
                    margin-left:400px;
                    margin-top:100px;
                }

                h3
                {
                    background-color:blue;
                    color:white;
                    margin-left:-50px;
                    text-align:center;
                }

                #submit{
                    margin-left:150px;
                }
        </style>
</head>
<body>

<div>
            @if(Session::has('success'))
                <h5>{{Session::get('success')}}</h5>
            @endif
        </div>
        
        <form action="{{route('product.create')}}" method="post">
            @csrf
                <h3>Customer Registration</h3>
                <br>
                <label for="name">Name:</label>
                    <input type="text" name="name" > 
                    @error('name')
                        <h6>{{$message}}</h6>
                    @enderror
                    <br> <br>
                
                <label for="email">Email:</label>
                    <input type="email" name="email" > 
                    
                    @error('email')
                        <h6>{{$message}}</h6>
                    @enderror
                    <br> <br>

                <label for="gender">Gender:</label>
               <!-- <select name="gender" id="">
                    <option value=""> </option>
                    <option value="male">Male</option>
                    <option value="Fenale">Female</option>
                </select> <br> <br> !-->
                <input type="text" name="gender" >  <br> <br>

                <label for="address">Address:</label>
                    <input type="text" name="address" >  <br> <br>
                
                <label for="mobileno">Mobile No:</label>
                    <input type="number" name="mobileno" >  <br> <br>
                    
                <label for="password">Password:</label>
                    <input type="password" name="password" >  
                    @error('password')
                        <h6>{{$message}}</h6>
                    @enderror
                    
                    <br> <br>

                <input type="submit" class="btn btn-primary"  id="submit" value="signup">
                <br> <br>
        </form>
</body>
</html>