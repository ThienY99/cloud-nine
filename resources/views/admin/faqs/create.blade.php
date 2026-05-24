<x-site-layout>
<form action="/admin/faqs" method="post">
    @csrf


    <x-form-textinput
        name="question"
        label="Vraag"
        placeholder="Give me a question"
    />

    <x-form-textinput
        name="answer"
        label="Antwoord"
        placeholder="Give me an answer"
    />

    <x-form-select 
    name="category_id" 
    label="Categories" 
    :options="\App\Models\Category::all()->pluck('name', 'id')->toArray()"    
    />


    <button type="submit">Create</button>

</form>
</x-site-layout>