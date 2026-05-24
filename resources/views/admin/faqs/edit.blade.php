<x-site-layout>
<form action="/admin/faqs/{{$faq->id}}" method="post">
    @csrf
    @method('put')

    <x-form-textinput
        name="question"
        label="Vraag"
        placeholder="Give me a question"
        value="{{ $faq->question }}"

    />

    <x-form-textinput
        name="answer"
        label="Antwoord"
        placeholder="Give me an answer"
        value="{{ $faq->answer }}"

    />

    <x-form-select 
    name="category_id" 
    label="Categories" 
    :options="\App\Models\Category::all()->pluck('name', 'id')->toArray()"
    value="{{$faq->category_id}}"
    
    />

    <button type="submit">Update</button>
</form>
</x-site-layout>