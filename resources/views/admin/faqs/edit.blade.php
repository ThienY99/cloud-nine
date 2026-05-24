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

    <button type="submit">Update</button>
</form>