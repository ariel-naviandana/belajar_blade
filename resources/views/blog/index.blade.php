@extends('../master')

@section('title', 'Blog')

@section('content')
    <h2>Selamat Datang di Blog Kami</h2>
    <p>Ini adalah halaman utama blog</p>

    <article>
        <h3>Blog Post Judul 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut elit vel lorem scelerisque pretium.</p>
    </article>

    <article>
        <h3>Blog Post Judul 2</h3>
        <p>Curabitur tincidunt, ligula eu dictum vulputate, magna nulla luctus enim, at aliquet justo turpis in nulla.</p>
    </article>

    <h3>{{ $title }}</h3>
    <p>Berikut adalah daftar penulis yang ada di blog ini:</p>

    <ul>
        @foreach ($penulis as $p)
            <li>{{ "Nama : ". $p->nama ." | Alamat : ". $p->alamat}}</li>
        @endforeach
    </ul>
@endsection
