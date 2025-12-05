<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    
    @if (empty($product_list))
        There are no data in product table
    @else
        <table>
            <thead>
                <th>Product Name</th>
                <th>Price</th>
                <th>description</th>
                <th>Stocklevel</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($product_list as $product)
                    <tr>
                        <td>{{  $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->stocklevel}}</td>
                        <td>
                            <a href="{{ url('/product/'.$product->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/product/'.$product->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <a href="{{url('/product/add')}}">Add New product</a>
</body>
</html>