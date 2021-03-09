<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index rayon</h1>    
    <a href="{{route('rayon.create')}}">Create rayon</a>
    <table>
        <tr>
            <td>nama rayon</td>
            <td>pembimbing</td>
            <td colspan="2">Aksi</td>
        </tr>
        @foreach ($rayons as $a)
        <form action="{{url('/rayon/delete/'. $a->id)}}" method="post">
            @csrf
            @method('DELETE')
            <tr>
                    <td>{{$a->nama_rayon}}</td>
                    <td>{{$a->pembimbing}}</td>
                    <td><a href="{{url('/rayon/edit/'.$a->id)}}">Edit</a></td>
                    <td><button type="submit">hapus</button></td>
            </tr>
        </form>
        @endforeach
    </table>
</body>
</html>