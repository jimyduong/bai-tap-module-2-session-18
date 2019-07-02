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
    <title>{{$blog->name}}</title>
</head>
<body>
<table class="table table-striped">
    <tr>
        <thead>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Content</th>
        </thead>
    <td >
        <img src="{{ asset('storage/'.$blog->image) }}"
             alt="" style="height: auto;width: 500px; float: left;margin-right: 10px">
    </td>
        <td >{{$blog->type}}</td><br>
        <td >{{$blog->content}}</td>
    </tr>
</table>
<p style="clear: both"></p>
<a href="{{route('blog.index')}}">
    <button type="submit" class="btn btn-outline-info">Back</button>
</a>

</body>
</html>
@endsection