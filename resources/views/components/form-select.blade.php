@props([
    'label',
    'name', 
    'option'=>[],
    'value'=>''
    ])


    <div>
        <label for="{{ $name }}"{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $name }}">
            @foreach ($option as $key => $title)
            <option @selected(old($name, $value)==$key) value="{{$key}}">{{$title}}</option>
                
            @endforeach

    </select>
        @error($name) <div style="color: red"> {{$message }}</div>@enderror
    </div>
