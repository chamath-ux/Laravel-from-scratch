
@props(['trigger'])

    {{--Trigger--}}
    <div x-data="{show:false}" class='bg-white-500' @click.away="show = false">
        <div @click="show =!show" >
            {{ $trigger }}
        </div>


    {{--links--}}
        <div x-show='show' class='py-2 absolute z-50 bg-white-500' style='display:none'>
            {{ $slot }}
        </div>
    </div>
