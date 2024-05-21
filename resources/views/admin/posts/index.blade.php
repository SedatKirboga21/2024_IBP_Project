<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
        <!-- Yeni Post Oluşturma Butonu -->
        <a href="{{ route('posts.create') }}" class="btn btn-primary">{{ __('Create Post') }}</a>
        <!-- Geri Dön Butonu -->
        <a href="{{ url()->previous() }}" class="btn btn-secondary ml-auto">{{ __('Back') }}</a>
    </x-slot>

    <div class="container">
        <!-- Arama Formu -->
        <form action="{{ route('posts.search') }}" method="GET" class="mt-3">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search for posts...">
                <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
            </div>
        </form>

        <ul class="list-group mt-3">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                    </div>
                    <div>
                        <!-- Post Düzenleme Butonu -->
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                        <!-- Post Silme Butonu -->
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
