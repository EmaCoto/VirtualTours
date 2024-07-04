<div>
    <div class="flex justify-end px-5">
        <livewire:post.create-post>
    </div>
    <ul class="flex p-4 overflow-x-auto">
        @foreach ($posts as $post)
            <li class="mx-3">
                <div class="relative group cursor-pointer group overflow-hidden shadow-lg text-gray-50 h-72 w-72  rounded-xl hover:duration-700 duration-700">
                    <div class="w-72 h-72">
                        <img src="{{ asset('storage/' . $post->img) }}" alt="" class="rounded-xl">
                    </div>
                    <div class="absolute bg-gray-50 -bottom-9 w-72 p-3 flex flex-col gap-1 group-hover:-bottom-0 group-hover:duration-600 duration-500">
                        <span class="text-[#088395] font-bold text-xs uppercase">Tour</span>
                        <span class="text-black font-bold text-2xl">{{ $post->title }}</span>
                        <p class="text-neutral-800">{{ $post->description }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

