<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Product List</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th> Loại sản phẩm </th>
            <th> Nhãn hàng </th>
            <th> Tên sản phẩm </th>
            <th> Mô tả </th>
            <th> Giá bán </th>
            <th> số lượng sản phẩm </th>
            <th> Hình ảnh </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }} VND</td>
                <td>{{ $product->quantity }}</td>

                <td>
                    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
