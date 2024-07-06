<div>
    <div class="flex justify-end px-5">
        <livewire:post.create-post>
    </div>
    <ul class="flex p-4 overflow-x-auto">
        @foreach ($posts as $post)
            <a href="#">
                <li class="mx-3">
                    <div class="relative group group overflow-hidden border-2 border-black shadow-lg text-gray-50 h-72 w-72 hover:-translate-y-3 hover:shadow-xl rounded-xl hover:duration-700 duration-700">
                        <div class="w-72 h-72">
                            <img src="{{ asset('storage/' . $post->img) }}" alt="">
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
    </ul>
</div>

