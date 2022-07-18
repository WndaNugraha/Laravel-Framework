<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Mahasiswa</legend>
        <center>
        <table border="1">
    <tr >
        <th colspan="4">Dosen Pembimbing Yusuf</th>
    </tr> 
    <tr>
        <td>Nama</td>
        <td>Mata Kuliah</td>
        <td>Nilai</td>
        <td>Predikat</td>
    </tr>
    @foreach($dosen1 as $data)
        <tr>
            <td>{{$data['nama']}}</td>
            <td>{{$data['matkul']}}</td>
            <td>{{$data['nilai']}}</td>
        
        
        
        @if($data['nilai'] >= 90)
        <td>A</td>

            @elseif($data['nilai'] >= 80)
            <td>B</td>

            @elseif($data['nilai'] >= 70 )
            <td>C</td>

            @elseif($data['nilai'] >= 50)
            <td>D</td>

            @elseif($data['nilai'] <= 49)
            <td>E</td>

        @endif
        </tr>
        <br>
    @endforeach
    </table>

    <table border="1">
    <tr >
        <th colspan="4">Dosen Pembimbing Yaris</th>
    </tr> 
    <tr>
        <td>Nama</td>
        <td>Mata Kuliah</td>
        <td>Nilai</td>
        <td>Predikat</td>
    </tr>
    @foreach($dosen2 as $data)
        <tr>
            <td>{{$data['nama']}}</td>
            <td>{{$data['matkul']}}</td>
            <td>{{$data['nilai']}}</td>
        
        
        
        @if($data['nilai'] >= 90)
        <td>A</td>

            @elseif($data['nilai'] >= 80)
            <td>B</td>

            @elseif($data['nilai'] >= 70 )
            <td>C</td>

            @elseif($data['nilai'] >= 50)
            <td>D</td>

            @elseif($data['nilai'] <= 49)
            <td>E</td>

        @endif
        </tr>
        <br>
    @endforeach
    </table>
        </center>
    </fieldset>
</body>
</html>