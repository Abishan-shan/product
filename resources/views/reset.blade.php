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

                #reset
                {
                    margin-top:50px;
                    margin-left:-420px;
                }
        </style>
</head>
<body>
    <div id="dash">
        <h3>E-store</h3> 

        <div class="list">
            <ol>
                <li> <button> Customer name </button></li>
                <li> <button> <a href="{{route('emp.reset')}}"> Reset Password </a> </button></li>
                <li> <button onclick="order()"> My Orders </button> </li>
                <li> <form action="{{route('logout')}}" method="post"> 
                        @csrf
                        <button> Logout </button>
                    </form> </li>
            </ol>
        </div>

                
        
                <div id="reset">
                <form action="{{route('emp.reedit')}}" method="post">
                    @csrf
                    <h5>Reset your password</h5>
                            <label for="cuPassword">Current Password:</label>
                                <input type="password" name="cuPassword"> <br> <br>

                            
                            <label for="NewPassword">New Password:</label>
                                <input type="password" name="NewPassword"> <br> <br>
                            
                            <label for="ConfirmPassword">Confirm Password:</label>
                                <input type="password" name="ConfirmPassword"> <br> <br>

                            <input type="submit" class="btn btn-success" value="change">
                    </form>
                </div>
    </div>


    
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