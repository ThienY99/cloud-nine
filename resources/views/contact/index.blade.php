<x-site-layout>
<h1>Contact</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="{{ route('contact.store') }}" method="post">
    @csrf

    <x-form-textinput name="name" label="Your name" placeholder="your name"/>
    <x-form-textinput name="email" label="Your email" placeholder="your email"/>

    <label for="message">Message</label><br>
    <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea><br>
    @error('message')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <button type="submit">Send</button>
</form>
</x-site-layout>