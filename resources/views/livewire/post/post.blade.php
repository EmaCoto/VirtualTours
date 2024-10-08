<div class="relative">
    <div class="flex justify-end px-5">
        <livewire:post.create-post>
    </div>
    <div class="relative">
        <button class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-black bg-opacity-0 text-white text-3xl p-2 rounded-r-full h-3/4 w-8 hover:bg-opacity-80 duration-700 ease-in-out" id="left-arrow">
            <i class="fa-solid fa-angle-left"></i>
        </button>
        <button class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-black bg-opacity-0 text-white text-3xl p-2 rounded-l-full h-3/4 w-8 hover:bg-opacity-80 duration-700 ease-in-out" id="right-arrow">
            <i class="fa-solid fa-angle-right"></i>
        </button>
        <ul class="flex p-4 overflow-x-hidden " id="posts-container">
            {{-- VIEW POST --}}
            @foreach ($posts as $post)
                <a href="{{ route('content-tour', ['postId' => $post->id]) }}" wire:click="randomColor" wire:key='post-{{$post->id}}'>
                    <li class="mx-3">
                        <div class="relative group overflow-hidden border border-gray-800 shadow-lg text-gray-50 h-56 w-56 md:h-72 md:w-72 hover:-translate-y-3 hover:shadow-xl rounded-lg hover:duration-700 duration-700">
                            <div class="h-56 w-56 md:h-72 md:w-72">
                                <img src="{{ asset('storage/' . $post->img) }}" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute bg-white bottom-0 w-56 md:w-72 px-3 py-1 flex flex-col">
                                <span class="text-[#088395] font-bold text-xs uppercase">Tour</span>
                                <span class="text-black font-bold text-base md:text-2xl">{{ $post->title }}</span>
                            </div>
                            <div class="absolute bg-black top-0 w-72 px-3 py-1 flex flex-col opacity-0 group-hover:opacity-100 bg-opacity-50">
                                <span class="text-white font-bold text-sm">{{ $post->description }}</span>
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>
