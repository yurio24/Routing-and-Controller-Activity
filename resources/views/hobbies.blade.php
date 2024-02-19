<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
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
    <h1>Hobbies</h1>
    <div class="cons">
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
    </div>
    <div class="B">
        <a href="{{ route('skills') }}"><button>Skills</button></a>
        <a href="{{ route('about-me') }}"><button>About Me</button></a>
    </div>
</body>
</html>
