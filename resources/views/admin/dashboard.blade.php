<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard Panel') }}
        </h2>
    </x-slot>
    
    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-10 ">
            <div>
                <a href="{{ route('admin.users.index') }}"
    class="flex items-start gap-4 rounded-lg bg-lightblue p-6 shadow-[0px 28px 68px 0px rgba(0,0,0,0.08)] ring-1 ring-white/05 transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
    style="width: 750px; height: 600px; margin-right: 200px;">
    <div
    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16 bg-dark">
    <img src="{{ asset('assets/images/user.png') }}" alt="Icon" class="size-5 sm:size-6">
</div>

    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">User Editor</h2>

        <p class="mt-4 text-m/relaxed">
            <br>
            You can edit user click here.
        </p>
    </div>
    <img src="{{ asset('assets/images/edit.jpeg') }}" alt="Edit Image"  style="margin-top: 50px; margin-left: 75px;">


    
</a>

            </div>

            <div>
                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-start gap-4 rounded-lg bg-lightblue p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                    <div
    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16 bg-dark">
    <img src="{{ asset('assets/images/images.png') }}" alt="Icon" class="size-5 sm:size-6">
</div>

                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Media Editor</h2>

                        <p class="mt-4 text-m/relaxed">
                            You can share or edit Media click here. 
                            <br>
                        </p>
                    </div>

                    <img src="{{ asset('assets/images/indir.png') }}" alt="Edit Image" style="margin-top: 10px; margin-left: 10px;">

                </a>
                
                <a href="{{ route('admin.stock.index') }}"
    class="flex items-start gap-4 rounded-lg bg-lightblue p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
    style="width: 800px; height: 300px; margin-right: 200px;">
    <div
    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16 bg-dark">
    <img src="{{ asset('assets/images/producticon.png') }}" alt="Icon" class="size-5 sm:size-6">
</div>

    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Stock Page</h2>

        <p class="mt-4 text-m/relaxed">
            You can share or edit Stock click here.
            <br>

        </p>
    </div>

    <img src="{{ asset('assets/images/product.png') }}" alt="product Image" style="margin-top: 10px; margin-left: 10px; width: 200px;">
</a>


            </div>
        </div>
    </main>

    <div class="fixed bottom-6 right-6">
        <div id="draggable-message-box" class="draggable bg-white p-4 shadow-lg rounded-lg w-16 h-16 cursor-pointer">
            <svg class="w-4 h-4 text-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div id="message-box" class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">
            @foreach ($messages as $message)
                <div class="message border-b border-gray-200 mb-4 pb-4">
                    <p><strong>Name:</strong> <span class="text-xs">{{ $message->name }}</span></p>
                    <p><strong>Email:</strong> <span class="text-xs">{{ $message->email }}</span></p>
                    <p><strong>Message:</strong> <span class="text-xs">{{ $message->message }}</span></p>
                    <p><strong>Created At:</strong> <span class="text-xs">{{ $message->created_at }}</span></p>

                   
                    <form class="response-form mt-4" method="POST"
                        action="{{ route('admin.reply', ['message' => $message->id]) }}">
                        @csrf
                        <textarea name="reply" rows="3" class="w-full border rounded-md p-2" placeholder="Your reply here..."></textarea>
                        <button type="submit"
                            class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Reply</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        
        const messageBox = document.getElementById('message-box');
        const messageIcon = document.getElementById('draggable-message-box');

       
        messageIcon.addEventListener('click', () => {
            messageBox.classList.toggle('hidden');
        });

        
        messageBox.addEventListener('click', (e) => {
            if (!e.target.closest('.message')) {
                messageBox.classList.add('hidden');
            }
        });

       
       

       
        let initialX;
        let initialY;
        let offsetX = 0;
        let offsetY = 0;
        let isDragging = false;

        
        draggableMessageBox.addEventListener('mousedown', (e) => {
            isDragging = true;
            initialX = e.clientX - offsetX;
            initialY = e.clientY - offsetY;
        });

        

        // Mesaj kutusunu büyütme işlevi
        draggableMessageBox.addEventListener('click', () => {
            if (messageBox.classList.contains('w-60')) {
                messageBox.classList.remove('w-60', 'h-60', 'overflow-hidden');
                messageBox.classList.add('w-auto', 'h-auto');
            } else {
                messageBox.classList.remove('w-auto', 'h-auto');
                messageBox.classList.add('w-60', 'h-60', 'overflow-hidden');
            }
        });

        // Sayfayı yeniden gönderme işlevi
        const refreshForm = document.getElementById('refresh-form');
        refreshForm.addEventListener('submit', (e) => {
            e.preventDefault();
            window.location.reload();
        });
    </script>
</x-app-layout>
