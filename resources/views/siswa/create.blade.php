<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/siswa/store')}}" method="post">
        @csrf
        
        <label>Nama</label>
        <input type="text" name="nama" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" required><br>
        <label>no_hp</label>
        <input type="text" name="no_hp" required><br>
        <label>id_rayon</label>
        <select name="id_rayon">
            @foreach ($rayons as $a)
                <option value="{{$a->id}}">{{$a->nama_rayon}}</option>
            @endforeach
        </select><br>
        <label>rombel</label>
        <input type="text" name="rombel" required><br>
        <br>
        <button type="submit">CREATE</button>
    </form>
</body>
</html>