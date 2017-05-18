<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>客户名</th>
            <th>电话</th>
            <th>借款金额</th>
            <th>借款方式</th>
        </tr>
        @foreach( $data as $client )
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->username }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->total }}</td>
                <td>{{ $client->type }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>