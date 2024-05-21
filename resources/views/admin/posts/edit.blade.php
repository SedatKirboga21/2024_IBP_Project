<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gönderiyi Düzenle') }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('Başlık') }}</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">{{ __('İçerik') }}</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            <!-- Geri Dön Butonu -->
            <a href="{{ url()->previous() }}" class="btn btn-secondary ml-auto">{{ __('Back') }}</a>
        </form>
    </div>
</x-app-layout>
