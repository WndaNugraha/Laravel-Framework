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
        <legend>Data Artikel</legend>
        @foreach($saya as $data)
        <ul>
            <li>{{$data['beranda']}}</li>
            <li>Berita</li>
            @foreach($data['berita'] as $berita)
                <ul>
                    <li>{{$berita}}</li>
                </ul>
                @if($berita == 'Olahraga')
                <ul>
                    <ul>
                    <li>Sepak Bola</li>
                    <li>Bulu Tangkis</li>
                    </ul>
                </ul>
                @endif
            @endforeach
            <li>{{$data['tentang']}}</li>
            </ul>
        @endforeach
    </fieldset>
</body>
</html>