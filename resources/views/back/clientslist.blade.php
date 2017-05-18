<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        html, body {
            font-size: 14px;
        }
        table {
            margin: 5rem 2rem 0 2rem;
            font-size: 2.5rem;
        }
        th {
            text-align: center;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-bordered">
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