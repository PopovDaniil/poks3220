<h1>Список товаров</h1>
<a href="/products/add">Добавить товар</a>

<table>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
    </tr>
    @endforeach
</table>
