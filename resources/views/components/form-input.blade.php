@props(['form'])

    <label for="{{$form->label}}" class='pl-3'>{{$form->label}}</label>
    <input type="{{$form->input_type}}" name="{{$form->name}}" id="{{$form->name}}" class='w-full h-10 rounded-xl p-3' placeholder="Enter {{$form->label}}">

    @error("{{$form->name}}")
        <p>{{$message}}</p>
    @enderror


