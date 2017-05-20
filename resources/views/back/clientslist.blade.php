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
        .table {
            width: 90%;
            margin: 5rem auto;
            font-size: 2.5rem;

        }
        #wrapper th, td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-bordered " id="wrapper">
        <tr>
            <th>ID</th>
            <th>客户名</th>
            <th>电话</th>
            <th>借款金额</th>
            <th>借款方式</th>
            <th>操作</th>
        </tr>
        @foreach( $data as $client )
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->username }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->total }}</td>
                <td>{{ $client->type }}</td>
                <td><button type="button" class="btn btn-danger">删除</button></td>
            </tr>
        @endforeach
    </table>
</body>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function(){
        $('.btn').on('click', function() {
           var id = $(this).parent().siblings('td:first').text();
            $.ajax({
                url: 'delete/'+id,
                method: 'get',
                dataType: 'json',
                success: function(res) {
                    if(!res.errno) {
                        alert(res.data);
                    } else {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
</html>