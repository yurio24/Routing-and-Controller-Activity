<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
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
    <h1>Skills</h1>
    <div class="cons">
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    </div>
<div class="B">
        <a href="{{ route('about-me') }}"><button>About Me</button></a>
        <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
</div>

</body>
</html>
