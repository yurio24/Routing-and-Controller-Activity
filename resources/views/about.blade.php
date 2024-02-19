<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        h1{
            text-align: center;
            margin-left: 50px;
        }

        .cons{
            text-align: center;
        }

        ul{
            list-style: none;
        }

        .B {  
            display: flex;
            width: 200px;
            height: 100px;
            margin: auto;
        }
        
        button {
        margin-left: 30px;
        }

    </style>
</head>
<body>
    <h1>About Me</h1>
    <div class="cons">
    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Location: {{ $location }}</p>
    </div>
    <div class="B">
        <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
        <a href="{{ route('skills') }}"><button>Skills</button></a>
    </div>
</body>
</html>