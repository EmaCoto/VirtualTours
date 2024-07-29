<div>
    <div class="flex justify-end px-5">
        <livewire:post.create-post>
    </div>
    <ul class="flex p-4 overflow-x-auto">
        {{-- VIEW POST --}}
        @foreach ($posts as $post)
            <a href="{{ route('content-tour', ['postId' => $post->id]) }}" wire:click="randomColor" wire:key='post-{{$post->id}}'>
                <li class="mx-3">
                    <div class="relative group overflow-hidden border border-gray-800 shadow-lg text-gray-50 h-72 w-72 hover:-translate-y-3 hover:shadow-xl rounded-lg hover:duration-700 duration-700">
                        <div class="w-72 h-72">
                            <img src="{{ asset('storage/' . $post->img) }}" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute bg-white bottom-0 w-72 px-3 py-1 flex flex-col">
                            <span class="text-[#088395] font-bold text-xs uppercase">Tour</span>
                            <span class="text-black font-bold text-2xl">{{ $post->title }}</span>
                        </div>
                        <div class="absolute bg-black top-0 w-72 px-3 py-1 flex flex-col opacity-0 group-hover:opacity-100 bg-opacity-50">
                            <span class="text-white font-bold text-sm">{{ $post->description }}</span>
                        </div>
                    </div>
                </li>
            </a>
        @endforeach
        {{-- @livewire('post.edit-post', ['datatableId' => $datatable->id], key(time() . $datatable->id)) --}}

    </ul>
</div>
