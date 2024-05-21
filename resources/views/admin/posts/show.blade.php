<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="container">
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">{{ __('Edit') }}</a>
    </div>
</x-app-layout>
