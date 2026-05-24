<form action="/admin/categories" method="post">
    @csrf

    <label for="name">Category name</lable>
        
    <input type="text" name="name" placeholder="type" value="{{ old('name') }}">
    @error('name') <div style="color: red"> {{$message }}</div>@enderror

    <button type="submit">Create</button>

</form>