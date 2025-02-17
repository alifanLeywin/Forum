@extends('layout.app')

@section('content')
<main>
    <div class="container">
        <div class="nav">
            <!-- Navigasi bisa ditambahkan di sini -->
        </div>

        <div class="posts">
            <!-- Header hanya ditampilkan sekali -->
            <div class="posts__head">
                <div class="posts__topic">Topik</div>
            </div>

            <!-- Body berisi daftar postingan -->
            <div class="posts__body">
                    @foreach ($data as $item)
                        <div class="posts__item">
                            <div class="posts__section-left">
                                <div class="posts__topic">
                                    <div class="posts__content">
                                        <a href="#">
                                            <h3>{{ $item->title }}</h3> <!-- Judul postingan -->
                                        </a>
                                        <p>{{ $item->content }}</p> <!-- Konten postingan -->
                                    </div>
                                </div>
                            </div>
                            <div class="posts__section-right">
                                <div class="posts__users js-dropdown">
                                    <div>
                                        <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar" data-dropdown-btn="user-b"></a>
                                        <div class="posts__users-dropdown dropdown dropdown--user dropdown--reverse-y" data-dropdown-list="user-b">
                                            <div class="dropdown__user">
                                                <a href="#" class="dropdown__user-label bg-218380">B</a>
                                                <div class="dropdown__user-nav">
                                                </div>
                                                <div class="dropdown__user-info">
                                                    <a href="#">{{$item->user->name}}</a>
                                                    <p>Joined {{ \Carbon\Carbon::parse($item->user->created_at)->diffForHumans() }}</p>
                                                </div>
                                                <div class="dropdown__user-icons">
                                                    <a href="#"><img src="fonts/icons/badges/Intermediate.svg" alt="user-icon"></a>
                                                    <a href="#"><img src="fonts/icons/badges/Bot.svg" alt="user-icon"></a>
                                                    <a href="#"><img src="fonts/icons/badges/Animal_Lover.svg" alt="user-icon"></a>
                                                </div>
                                                <div class="dropdown__user-statistic">
                                                    <div>Threads - <span>1184</span></div>
                                                    <div>Posts - <span>{{ $item->user->posts_count }}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <!-- Tombol Hapus -->      <!-- Tombol Edit -->
                                    <form action="{{ route('posts.destroy', $item->id) }}" method="POST" style="display: inline-block;" class="edpus">
                                        <a href="{{ route('posts.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">Hapus</button>
                                    </form>

                                <div class="posts__activity">{{ $item->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                    @endforeach

                    {{-- PAGINATION --}}    
                    <div class="pagination-container">
                        {{$data->links('pagination::bootstrap-5')}}
                    </div>
            </div><
        </div>
    </div>
</main>
@endsection

<style>
    /* Menambah style untuk posts__item */
.posts__item {
    background-color: #ffffff;
    border-radius: 8px; /* Membuat sudut lebih lembut */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan agar lebih modern */
    margin-bottom: 20px;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Memperhalus tampilan konten */
.posts__content {
    margin-bottom: 10px;
}

.posts__topic h3 {
    font-size: 18px;
    color: #333;
}

.posts__topic p {
    font-size: 14px;
    color: #666;
}

/* Styling untuk avatar */
.posts__users .avatar img {
    border-radius: 50%;
    width: 35px;
    height: 35px;
}

/* Styling dropdown user */
.posts__users-dropdown {
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

/* Perbaiki pagination */
.pagination-container {
    text-align: center;
    margin-top: 30px;
}
.pagination-container .pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination-container .pagination li {
    margin: 0 5px;
}

.pagination-container .pagination li a {
    padding: 10px 15px;
    background-color: #f1f1f1;
    border-radius: 4px;
    text-decoration: none;
    color: #333;
}

.pagination-container .pagination li a:hover {
    background-color: #007bff;
    color: #fff;
}

.posts__activity {
    margin-left: 3px; /* Memberikan jarak antara activity dan elemen sebelumnya */
    margin-right: 3rem; /* Memberikan jarak antara activity dan elemen sebelumnya */
}

.edpus {
    margin: auto;
    padding-right: 1rem;
}
</style>