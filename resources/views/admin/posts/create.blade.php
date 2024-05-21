<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yeni Gönderi Oluştur') }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="{{ route('admin.posts.show') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('Başlık') }}</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">{{ __('İçerik') }}</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Gönder') }}</button>
        </form>
    </div>
</x-app-layout>
