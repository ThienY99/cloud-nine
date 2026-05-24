<form action="/admin/categories" method="post">
    @csrf

    <label for="name">Category name</lable>
    <input type="text" name="name" placeholder="type">
    <button type="submit">Create</button>

</form>