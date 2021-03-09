<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/rayon/update/'.$rayon->id)}}" method="post">
        @csrf
        @method('PATCH')
        
        <label>nama_rayon</label>
        <input type="text" name="nama_rayon" required value="{{$rayon->nama_rayon}}"><br>
        <label>pembimbing</label>
        <input type="text" name="pembimbing" required value="{{$rayon->pembimbing}}"><br>
        
        <br>
        <button type="submit">UPDATE!</button>
    </form>
</body>
</html>