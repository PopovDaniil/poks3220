<style>
    table, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }
</style>

<h1>Список категорий</h1>
<a href="/categories/add">Добавить категорию</a>

<table>
    <thead>
        <th>Номер</th>
        <th>Название</th>
        <th colspan="2">Действия</th>
    </thead>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td><a href="/categories/{{ $category->id }}">[e]</a></td>
        <td>
            <form action="/categories/{{ $category->id }}" method="DELETE">
                <button type="submit">x</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
