<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong>StaffBranch</strong>
    <table border="1">
        <tr>
            <th>staffNo</th>
            <th>sName</th>
            <th>position</th>
            <th>salary</th>
            <th>branchNo</th>
            <th>bAddress</th>
        </tr>
        @foreach($staffbranch as $data)
            <tr>
                <td>{{$data['staffNo']}}</td>
                <td>{{$data['sName']}}</td>
                <td>{{$data['position']}}</td>
                <td>{{$data['salary']}}</td>
                <td>{{$data['brancehNo']}}</td>
                <td>{{$data['bAddress']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <strong>Staff</strong>
    <table border="1">
        <tr>
            <th>staffNo</th>
            <th>sName</th>
            <th>position</th>
            <th>salary</th>
            <th>branchNo</th>
        </tr>
        @foreach($staff as $data)
            <tr>
                <td>{{$data['staffNo']}}</td>
                <td>{{$data['sName']}}</td>
                <td>{{$data['position']}}</td>
                <td>{{$data['salary']}}</td>
                <td>{{$data['brancehNo']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <strong>Branch</strong>
    <table border="1">
        <tr>
            <th>branchNo</th>
            <th>bAddress</th>
        </tr>
        @foreach($branch as $data)
            <tr>
                <td>{{$data['brancehNo']}}</td>
                <td>{{$data['bAddress']}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>