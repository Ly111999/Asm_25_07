<!doctype html>=
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1>List category</h1>
    <li><a href="/admin/category/create">Create</a></li>
    <li><a href="/admin/category">List</a></li>
<ul>
    @foreach($list_obj as $item)
        <li>
            {{$item -> name}}
            <img src="{{$item -> image}}" alt="" style="width: 150px">
            <a href="/admin/category/{{$item -> id}}/edit">Edit</a>
            <a href="#/admin/category/{{$item -> id}}" id="{{$item -> id}}" class="delete-link">Delete</a>
        </li>
    @endforeach
</ul>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script>
    var deleteLinks = document.getElementsByClassName("delete-link");
    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].onclick = function () {
            var choice = confirm("Bạn có chắc muốn xoá sản phẩm này không?");
            if (choice) {
                var id = this.id;
                var xhttp = new XMLHttpRequest();
                var data = "_token={{csrf_token()}}";
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(JSON.parse(this.responseText).message);
                        window.location.reload();
                    }
                };
                xhttp.open("POST", "http://localhost:8000/admin/category/" + id, true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(data);
            }
        };
    }
</script>
</body>
</html>