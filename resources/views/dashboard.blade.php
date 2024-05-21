<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('User Panel Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('announcements.index') }}" class="block bg-lightblue rounded-lg shadow-sm overflow-hidden hover:shadow-md transition duration-300" style="width: 100%; height: 300px;">                <div class="p-6 text-gray-900 flex items-start gap-4">
                

                <div class="flex items-center">
                   
                </div>
               
                <div class="flex items-center justify-center rounded-full bg-[#FF2D20]/10 h-16 w-16 sm:h-24 sm:w-24">
                        <img src="{{ asset('assets/images/duyuru.png') }}" alt="Icon" class="h-8 w-8 sm:h-10 sm:w-10">


                    </div>
                    <div class="flex-1">
                        <h2 class="text-xl font-semibold text-black">ANNOUNCEMENT</h2>
                        <p class="mt-4 text-m text-gray-600">You can see the announcements.<br>Click here.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="py-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('stocks.index') }}" class="block bg-lightblue rounded-lg shadow-sm overflow-hidden hover:shadow-md transition duration-300" style="width: 100%; height: 300px;">                <div class="p-6 text-gray-900 flex items-start gap-4">
                

                <div class="flex items-center">
                   
                </div>
               
                <div class="flex items-center justify-center rounded-full bg-[#FF2D20]/10 h-16 w-16 sm:h-24 sm:w-24">
                        <img src="{{ asset('assets/images/images.jpeg') }}" alt="Icon" class="h-8 w-8 sm:h-10 sm:w-10">


                    </div>
                    <div class="flex-1">
                        <h2 class="text-xl font-semibold text-black">STOCKS PAGE</h2>
                        <p class="mt-4 text-m text-gray-600">You can see the stocks .<br>Click here.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

                    <style>
                        .contact-form-container {
                            position: fixed;
                            bottom: 20px;
                            left: 20px;
                            /* Sayfanın solunda sabit konumlandır */
                            z-index: 9999;
                        }

                        .contact-form {
                            display: none;
                            width: 400px;
                            background-color: #ffffff;
                            height: auto;
                            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                            overflow: hidden;
                            transition: width 0.3s ease;
                            z-index: 9998;
                            position: fixed;
                            bottom: 20px;
                            right: 20px;
                           
                        }

                        
                        .contact-form.open {
                            display: block;
                        }

                        
                        .contact-form-inner {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            width: 90%;
                            height: 100%;
                        }

                        .contact-form label {
                            font-weight: bold;
                        }

                        .contact-form input[type="text"],
                        .contact-form input[type="email"],
                        .contact-form textarea {
                            width: calc(100% - 16px);
                            padding: 8px;
                            margin: 8px 0;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            box-sizing: border-box;
                        }

                        .contact-form button {
                            background-color: #4caf50;
                            color: white;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            transition: background-color 0.3s ease;
                        }

                        .contact-form button:hover {
                            background-color: #45a049;
                        }

                        .message-box {
                            margin-top: 20px;
                            padding: 10px;
                            background-color: #f2f2f2;
                            border-radius: 5px;
                            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        }

                        .message-box .message {
                            margin-bottom: 10px;
                        }
                    </style>


                    <div class="contact-form-container">
                        <button onclick="toggleContactForm()"
    class="bg-red-500 hover:bg-red-700 text-white font-bold py-9 px-12 rounded-lg relative">
    <img src="{{ asset('assets/images/icon.png') }}" class="absolute h-12 w-12 top-0 left-15" alt="Icon">
    Reach us
</button>



                             

                        <div class="contact-form" id="contact-form">
                            <div class="contact-form-inner">
                                <form method="POST" id="contact-form-element">
                                    @csrf
                                    <div>
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div>
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    <div>
                                        <button type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="fixed bottom-6 right-6">
                            <div id="draggable-message-box"
                                class="draggable bg-white p-4 shadow-lg rounded-lg w-16 h-16 cursor-pointer">
                                <svg class="w-4 h-4 text-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div id="message-box"
                                class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">
                                @if (isset($messages) && !empty($messages))
                                    @foreach ($messages as $message)
                                        <div class="message border-b border-gray-200 mb-4 pb-4">
                                            <p><strong>Name:</strong> <span class="text-xs">{{ $message->name }}</span>
                                            </p>
                                            <p><strong>Email:</strong> <span
                                                    class="text-xs">{{ $message->email }}</span></p>
                                            <p><strong>Message:</strong> <span
                                                    class="text-xs">{{ $message->message }}</span></p>
                                            <p><strong>Created At:</strong> <span
                                                    class="text-xs">{{ $message->created_at }}</span></p>
                                    @endforeach
                                @else
                                    <p>Mesaj bulunamadı.</p>
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleContactForm() {
            var form = document.getElementById('contact-form');
            form.classList.toggle('open');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('contact-form-element');
            var messageBox = document.querySelector('.message-box');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Formun normal şekilde gönderilmesini engelle

                var formData = new FormData(form); // Form verilerini al

                // Form verilerini AJAX ile gönder
                fetch('{{ route('contact.submit') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Başarılı bir şekilde gönderildiğinde başarılı mesajını göster
                        console.log(data.message); // Mesajı UI'de gösterebilirsiniz
                        // Form elemanlarını temizle
                        form.reset();
                        // Mesaj kutusunu göster
                        messageBox.innerHTML =
                            '<div class="message">Your message from ' + formData.get('name') +
                            ' has been submitted successfully! Message: ' + formData.get('message') +
                            '</div>';
                        messageBox.style.display = 'block';
                    })
                    .catch(error => {
                        // Hata durumunda bir hata mesajı göster
                        console.error('There has been a problem with your fetch operation:', error);
                        // İhtiyaç duyarsanız UI'de bir hata mesajı gösterebilirsiniz
                    });
            });
        });
        const messageBox = document.getElementById('message-box');
        const messageIcon = document.getElementById('draggable-message-box');

        // Mesaj ikonuna tıklanınca mesaj kutusunu gösterme işlevi
        messageIcon.addEventListener('click', () => {
            messageBox.classList.toggle('hidden');
        });

        // Mesaj kutusuna tıklandığında küçültme işlevi
        messageBox.addEventListener('click', (e) => {
            if (!e.target.closest('.message')) {
                messageBox.classList.add('hidden');
            }
        });

        
        // Başlangıç konumu
        let initialX;
        let initialY;
        let offsetX = 0;
        let offsetY = 0;
        let isDragging = false;

       

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
