<div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
   <div class='bg-green-300 rounded-3xl py-3 px-3 text-center font-bold'>
        {{ session('status') }}
   </div>
</div>
