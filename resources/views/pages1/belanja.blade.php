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
        <legend>Data Belanja</legend>
        <table>
            <tr>
                <td>Barang</td>
                <td>Harga</td>
            </tr>
        @foreach($belanja1 as $data)

        @if($data['nama'] == 'alfian')

        <tr>
            <td>{{$data['barang']}}</td>
            <td>{{$data['harga']}} </td>
            </tr>
            @elseif($data['nama'] == 'dida')
            <tr>
            <td>{{$data['barang']}}</td>
            <td>{{$data['harga']}} </td>
            </tr>
            @endif


            
        @endforeach

        </table>
    </fieldset>
</body>
</html>