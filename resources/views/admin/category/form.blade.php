<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico">
    <link rel="Pig Seller" href="{{{asset('favicon.ico')}}}">
    <title>Infor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 30px">
        <h1>Enter category product information</h1>
    </div>
    <div>
        <li><a href="/admin/product/create">Create</a></li>
        <li><a href="/admin/product">List</a></li>
    </div>
    <div class="row" style="margin-top: 30px">
        <form action="/admin/category" method="post">
            <input type="hidden" name="id" >
            {{csrf_field()}}
            <div class="form-group">
                <label> Product Name </label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label> Description <br> </label>
                <textarea rows="4" cols="50" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Image </label>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary" style="margin-right: 150px">
                <input type="reset" value="Reset" class="btn btn-dark">
            </div>

        </form>
    </div>
</div>


</body>
</html>