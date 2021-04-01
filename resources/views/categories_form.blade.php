<form action="" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $category->name ?? ''}}">
    <button type="submit">Сохранить</button>
</form>