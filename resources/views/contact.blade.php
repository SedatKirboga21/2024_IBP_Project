<!-- resources/views/contact.blade.php -->
<x-app-layout>
    <form method="POST" action="{{ route('contact.submit') }}">
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
    </x-app-layout>
    