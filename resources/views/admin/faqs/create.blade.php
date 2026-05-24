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



    <button type="submit">Create</button>

</form>