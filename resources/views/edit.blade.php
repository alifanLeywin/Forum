@extends('layout.app')

@section('content')
<!-- MAIN -->
<main>
    <div class="container">
        <!-- Form untuk mengedit postingan -->
        <form id="edit-post-form" action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="create">
                <div class="create__head">
                    <div class="create__title"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New topic">Edit Postingan</div>
                </div>   
                <!-- Input Judul -->
                <div class="create__section">
                    <label class="create__label" for="title">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Disini" value="{{ old('title', $post->title) }}" required>
                </div>
                <!-- Input Konten -->
                <div class="create__section create__textarea">
                    <label class="create__label" for="content">Konten</label>
                    <textarea class="form-control" name="content" id="content" rows="5">{{ old('content', $post->content) }}</textarea>
                </div>
                <!-- Tombol Batal dan Kirim -->
                <div class="create__footer">
                    <a href="{{ route('posts.index') }}" class="create__btn-cansel btn">Batal</a>
                    <button type="submit" class="create__btn-create btn btn--type-02">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
