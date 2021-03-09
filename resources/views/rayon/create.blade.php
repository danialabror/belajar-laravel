<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/rayon/store')}}" method="post">
        @csrf
        
        <label>Nama Rayon</label>
        <input type="text" name="nama_rayon" required><br>
        <label>Pembimbing</label>
        <input type="text" name="pembimbing" required><br>
        <br>
        <button type="submit"> CREATE</button>
    </form>
</body>
</html>