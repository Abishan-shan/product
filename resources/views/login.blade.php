<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
        <style>
            form
            {
                border:2px solid blue;
                width:400px;
                padding-left:20px;
                margin-top:40px;
                margin-left:500px;
            }

            h4
            {
                background-color:blue;
                color:white;
                margin-left:-20px;
                text-align:center;
            }

            #submit,a{
                margin-left:150px;
            }

            .success
            {
                background-color:green;
                color:white;
                height:30px;
                text-align:center;
            }
        </style>
</head>
<body>
    

        <div >
            @if(Session::has('success'))
                <div class="success" ><h5>{{Session::get('success')}}</h5> </div>
            @endif
        </div>

        <div>
            @if(Session::has('error'))
                <h5>{{Session::get('error')}}</h5>
            @endif
        </div>


        <form action="{{route('product.loginValidate')}}" method="post">
            @csrf
            <div> <h4> E-STORE </h4></div>
            <br> <br>
            <div>
                <label for="email">Email:</label>
                    <input type="email" name="email" > 
                            <br> <br>
                            @error('email')
                                <h6>{{$message}}</h6>
                            @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                    <input type="password" name="password" > 
                            <br> <br>
                            @error('password')
                                <h6>{{$message}}</h6>
                            @enderror
            </div>
        
            <br> 

            <input type="submit" class="btn btn-primary" id="submit" value="Login">
                    <div> <h5 style="text-align:center">If didn't register yet? </h5></div>
                <a href="{{route('registration')}}" class="btn btn-primary" >Register</a>
              <br> <br> <br> 
        </form>
</body>
</html>