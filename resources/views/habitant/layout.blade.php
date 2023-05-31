<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student Crud Application</title>
    <style>
        .group-btn{
            display: flex;
            justify-content: space-around;
            gap: 10px;
            position: absolute;
            bottom: 0;
            margin: 10px;
            text-align: center;
        }
        .cart2{
            min-height: 60vh;
        }
        .comment{
            display: flex;
            flex-direction: row;
            gap: 3px;
        }
        .pp{
            display: flex;
            flex-direction: column;
        }
        .parateny{
        
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
        ul{
            list-style: none;
        }
    
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>