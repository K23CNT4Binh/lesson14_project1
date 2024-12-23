<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khoa </title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
        <table class="table table-bordered">
           <thead>
            <tr>
                <th>#</th>
                <th>Mã khoa</th>
                <th>Tên khoa</th>
                <th>Chức năng</th>
            </tr>
           </thead>
           <tbody>
            @php 
                $stt=0
            @endphp
            @foreach ($khoas as $item)
            @php
                $stt++;
            @endphp
               <tr>
                <td>{{$stt}}</td>
                <td>{{$item->MaKH}}</td>
                <td>{{$item->TenKH}}</td>
                <td class="text-center">
                    <a href="/khoa/detail/{{$item->MaKH}}" class="btn btn-success">Chi tiết</a>
                    <a href="/khoa/edit/{{$item->MaKH}}" class="btn btn-primary">Sửa</a>
                    <a href="/khoa/delete/{{$item->MaKH}}" class="btn btn-danger">Xóa </a>
                    </td>
               </tr>
            @endforeach
           </tbody>
        </table>
    </section>
</body>
</html>