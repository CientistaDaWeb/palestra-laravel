<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>

</head>
<body>
@forelse($products AS $product)
    <ul>
        <li>{{ $loop->index +1 }} - {{$product->name}} ({{$product->code}})
            <ul>
                @foreach($product->categories AS $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
        </li>
    </ul>
@empty
    <p>Nenhum produto encontrado</p>
@endforelse
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
