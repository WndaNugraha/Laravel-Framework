<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pesanan Anda</h3>
    @if($material1 == 'pasir urug')
        Material : {{$material1}}
       <br> Harga : 50000

       @elseif($material1 == 'batako besar' )
        Material : {{$material1}}
       <br> Harga : 30000
    
       @elseif($material1 == 'bata merah')
        Material : {{$material1}}
       <br> Harga : 40000

       @elseif($material1 == 'batu apung')
        Material : {{$material1}}
       <br> Harga : 65000

    @else
        Material : Tidak ada
        <br>
        Harga : List Harga Tidak ada

    
    @endif

<br>
<br>
    @if($material2 == 'pasir urug')
        Material : {{$material2}}
       <br> Harga : 50000

       @elseif($material2 == 'batako besar' )
        Material : {{$material2}}
       <br> Harga : 30000
    
       @elseif($material2 == 'bata merah')
        Material : {{$material2}}
       <br> Harga : 40000

       @elseif($material2 == 'batu apung')
        Material : {{$material2}}
       <br> Harga : 65000

    @else
        Material : Tidak ada
        <br>
        Harga : List Harga Tidak ada
    
    @endif
</body>
</html>