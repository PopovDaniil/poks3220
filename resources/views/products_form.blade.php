<form action="" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $product->name ?? ''}}">
    <select name="category_id" id="">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <button type="submit">Сохранить</button>
</form>