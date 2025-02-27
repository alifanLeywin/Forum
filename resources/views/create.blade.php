@extends('layout.app')

@section('content')
<!-- MAIN -->
<main>
    <div class="container">
        <!-- Form untuk membuat postingan -->
        <form id="create-post-form" action="{{ route('create.post') }}" method="post">
            @csrf <!-- Token CSRF untuk validasi Laravel -->
            <div class="create">
                <div class="create__head">
                    <div class="create__title"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New topic">Buat Postingan</div>
                    <span>ForumFarlifan</span>
                </div>   
                <!-- Input Judul -->
                <div class="create__section">
                    <label class="create__label" for="title">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Disini" value="{{ old('title') }}" required>
                </div>
                <!-- Input Konten -->
                <div class="create__section create__textarea">
                    <label class="create__label" for="description">Konten</label>
                    <textarea class="form-control" name="content" id="content" rows="5">{{ old('content') }}</textarea>
                </div>
                <!-- Tombol Batal dan Kirim -->
                <div class="create__footer">
                    <a href="#" class="create__btn-cansel btn">Batal</a>
                    <button type="submit" class="create__btn-create btn btn--type-02">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection