<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create A Product</h1>
    <form action="{{route('store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label>Qty</label>
            <input type="name" name="Qty" placeholder="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="Price" placeholder="Price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="Description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>