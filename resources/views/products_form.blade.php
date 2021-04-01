<form action="" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $product->name ?? ''}}">
    <button type="submit">Сохранить</button>
</form>