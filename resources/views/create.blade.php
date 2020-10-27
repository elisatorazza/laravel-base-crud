<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" placeholder="Title" id="title">
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" placeholder="Autore" id="author">
        </div>
        <div>
            <label for="edition">Editore</label>
            <input type="text" name="edition" placeholder="Editore" id="edition">
        </div>
        <div>
            <label for="genre">Genere</label>
            <input type="text" name="genre" placeholder="Genere" id="genre">
        </div>
        <div>
            <label for="image">Immagine</label>
            <input type="text" name="image" placeholder="Immagine URL" id="image">
        </div>
        <div>
            <label for="year">Anno di pubblicazione</label>
            <input type="date" name="year" id="year">
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" placeholder="ISBN" id="isbn">
        </div>
        <div>
            <label for="pages">Numero Pagine</label>
            <input type="number" name="pages" placeholder="pagine" id="pages">
        </div>
        <input type="submit" name="Salva">
    </form>
</body>
</html>