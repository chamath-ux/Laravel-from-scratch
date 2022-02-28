@props(['comment'])
<article class='flex space-x-6 bg-gray-300 px-3 py-3 rounded-2xl'>
    <div>
        <img src="https://i.pravatar.cc/40?id={{$comment->id}}" class='rounded-2xl'/>
    </div>
    <div>
        <h3 class='font-bold'>{{$comment->author->name}}</h3>
        <time>Posted {{$comment->created_at->diffForHumans()}}</time>
        <p>{{$comment->body}}</p>

    </div>
</article>
