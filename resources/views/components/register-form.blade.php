<h1 class='text-center text-xl mb-10 font-bold'>{{$forms[0]->head}}</h1>

<form action="{{$forms[0]->route}}" method="post" class='outline outline-2  outline-offset-2'>
    @csrf
    @foreach ($forms as $form)
        <div class='mb-6'>
                <x-form-input :form="$form"/>

        </div>

    @endforeach
    <div class='mb-6'>
        <x-submit-btn />
    </div>
</form>
