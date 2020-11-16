<div class="lg:w-1/6">
    <div class="bg-blue-100 rounded-lg p-4">
        <h3 class="font-bold text-xl mb-4">Following</h3>

        <ul>
            @forelse (current_user()->follows as $user)
                <li class="mb-4">
                    <a href="{{ route('profile', $user) }}">
                        <div class="flex items-center text-sm">
                                <img
                                    src="{{$user->avatar}}"
                                    alt=""
                                    class="rounded-full mr-2"
                                    width="40"
                                    height="40"
                                >

                                {{$user->name}}
                        </div>
                    </a>
                </li>

            @empty
                <li>No friends yet!</li>
            @endforelse
        </ul>
    </div>
</div>
