<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    @foreach ($books as $book)
    <div>
        <h2>{{$book->title}}</h2>
        <h3>{{$book->author}}</h3>
        <small>{{$book->edition}}</small>
        <img src="{{$book->image}}" alt="">
    </div>
        
    @endforeach
</body>
</html>