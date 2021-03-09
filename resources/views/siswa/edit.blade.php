<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/siswa/update/'.$siswa->id)}}" method="post">
        @csrf
        @method('PATCH')
        
        <label>Nama</label>
        <input type="text" name="nama" required value="{{$siswa->nama}}"><br>
        <label>Alamat</label>
        <input type="text" name="alamat" required value="{{$siswa->alamat}}"><br>
        <label>no_hp</label>
        <input type="text" name="no_hp" required value="{{$siswa->no_hp}}"><br>
        <label>id_rayon</label>
        <input type="text" name="id_rayon" required value="{{$siswa->id_rayon}}"><br>
        <label>rombel</label>
        <input type="text" name="rombel" required value="{{$siswa->rombel}}"><br>
        <br>
        <button type="submit">UPDATE!</button>
    </form>
</body>
</html>