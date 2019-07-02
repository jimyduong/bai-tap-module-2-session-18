@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách blog</title>
</head>
<body>
<div class="container">
    <div class="col-12">
        <div class="row">
            <h1>Danh Sách blog</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Blog name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Descripton</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
                @if(count($blogs) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($blogs as $key => $blog)
                        <tr>
                            <th scope="row" class="align-middle">{{ ++$key }}</th>

                                <td class="align-middle">
                                    <a href="{{route('blog.view',$blog->id)}}">
                                        {{ $blog['name'] }}
                                    </a>
                                </td>
                            <td class="align-middle">{{ $blog['type'] }}</td>
                            <td class="align-middle">{{ $blog['description'] }}</td>
                            <td class="align-middle">
                                <img src="{{ asset('storage/'.$blog->image) }}"
                                     alt="" style="width: 50px"></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <p></p>
    <div>{{$blogs->links()}}</div>
</div>
</body>
</html>
@endsection