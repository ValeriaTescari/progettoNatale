<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BabboMail</title>
    <style>
        .custom-div {
            width: 300px;
            height: 200px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <h1>Hai ricevuto un messaggio</h1>
                <ul>
                    <li class="custom-div">{{$contact['name']}}</li>
                    <li>{{$contact['email']}}</li>
                    <li>{{$contact['message']}}</li>
                </ul>
                
                
            </div>
        </div>
    </div>
    
</body>
</html>