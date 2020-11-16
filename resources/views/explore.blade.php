<x-app-layout>
    <div>
        @foreach ($users as $user)
            <div class="mb-5">
                <a href="{{ $user->path() }}" class="flex items-center">
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->username }}'s avatar"
                        width="60"
                        class="rounded-full mr-4"
                    >

                    <div>
                        <h4 class="font-bold">{{'@'.$user->username}}</h4>
                    </div>
                </a>
            </div>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app-layout>
