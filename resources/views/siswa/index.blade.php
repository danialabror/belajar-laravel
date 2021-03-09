<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index siswa</h1>    
    <a href="{{route('siswa.create')}}">Create Siswa</a>
    <table>
        <tr>
            <td>nama</td>
            <td>alamat</td>
            <td>no</td>
            <td>rayon</td>
            <td>pembimbing</td>
            <td>rombel</td>
            <td colspan="2">Aksi</td>
        </tr>
        @foreach ($siswas as $a)
        <form action="{{url('/siswa/delete/'. $a->id)}}" method="post">
        @csrf
        @method('DELETE')
            <tr>
                <td>{{$a->nama}}</td>
                <td>{{$a->alamat}}</td>
                <td>{{$a->no_hp}}</td>
                <td>{{$a->nama_rayon}}</td>
                <td>{{$a->pembimbing}}</td>
                <td>{{$a->rombel}}</td>
                <td><a href="{{url('/siswa/edit/'.$a->id)}}">Edit</a></td>
                <td><button type="submit">hapus</button></td>
            </tr>
        </form>
        @endforeach
    </table>
</body>
</html>