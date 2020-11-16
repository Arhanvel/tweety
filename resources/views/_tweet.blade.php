<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->author->path() }}">
            <img
                src="{{$tweet->author->avatar}}"
                alt=""
                class="rounded-full mr-2"
                width="40"
                height="40"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->author->path() }}">
                {{$tweet->author->name}}
            </a>
        </h5>
        <p class="text-sm mb-3">
            {{$tweet->body}}
        </p>

        <x-like-buttons :tweet="$tweet" />
    </div>
</div>
