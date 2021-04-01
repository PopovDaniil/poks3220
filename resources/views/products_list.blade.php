<style>
    table, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }
</style>

<h1>Список товаров</h1>
<a href="/products/add">Добавить товар</a>

<table>
    <thead>
        <th>Номер</th>
        <th>Название</th>
        <th colspan="2">Действия</th>
    </thead>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td><a href="/products/{{ $product->id }}">[e]</a></td>
        <td>
            <form action="/products/{{ $product->id }}" method="DELETE">
                <button type="submit">x</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
