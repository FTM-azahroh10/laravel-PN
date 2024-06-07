{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4 mb-3">
        <!-- Profil Section -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="img-fluid rounded-circle mr-3" alt="Profile Picture" style="width: 80px;">
                    <div>
                        <h3 class="mb-0">{{ strtoupper($pejabat) }}</h3>
                        <p class="text-muted mb-0">{{ ucfirst($pejabat) }} Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Main Feed Section -->
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="rounded-circle mr-3" alt="Profile Picture" style="width: 50px;">
                            <div>
                                <h5 class="card-title mb-0">{{ ucfirst($pejabat) }}</h5>
                                <small class="text-muted">@jokowi</small>
                            </div>
                        </div>
                        <p class="card-text mt-2">{{ $post->content }}</p>
                        <img src="{{ asset('img/sample.jpg') }}" class="img-fluid mb-3" alt="Post Image">
                        
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <button class="btn btn-link btn-sm">Like ({{ $post->likes->count() }})</button>
                            <button class="btn btn-link btn-sm">Comment</button>
                        </div>

                        <h6>Comments</h6>
                        <ul class="list-unstyled">
                            @foreach ($post->comments as $comment)
                                <li class="media mb-3">
                                    <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="mr-3 rounded-circle" alt="Commenter Picture" style="width: 40px;">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">{{ optional($comment->user)->name }}</h5>
                                        {{ $comment->content }}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        
                        <form action="{{ route('comments.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="content" placeholder="Write a comment..." required>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-sm">Comment</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Program Kerja Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Program Kerja</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pembangunan Infrastruktur</li>
                        <li class="list-group-item">Pendidikan</li>
                        <li class="list-group-item">Kesehatan</li>
                        <li class="list-group-item">Reformasi Birokrasi</li>
                        <li class="list-group-item">Ekonomi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4 mb-3">
        <!-- Profil Section -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="img-fluid rounded-circle mr-3" alt="Profile Picture" style="width: 100px;">
                    <div>
                        <h3 class="mb-0">{{ strtoupper($pejabat) }}</h3>
                        <p class="text-muted mb-0">{{ ucfirst($pejabat) }} Indonesia</p>
                        <p class="text-muted">23 Oktober 2014 - Sekarang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Main Feed Section -->
        <div class="col-md-8">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" name="content" placeholder="What's happening?" required></textarea>
                </div>
                <input type="hidden" name="pejabat" value="{{ $pejabat }}">
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
            
            @foreach ($posts as $post)
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="rounded-circle mr-3" alt="Profile Picture" style="width: 50px;">
                            <div>
                                <h5 class="card-title mb-0">{{ ucfirst($pejabat) }}</h5>
                                <small class="text-muted">@{{ $pejabat }} • {{ $post->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <p class="card-text mt-2">{{ $post->content }}</p>
                        <img src="{{ asset('img/sample.jpg') }}" class="img-fluid mb-3" alt="Post Image">
                        
                        <div class="d-flex justify-content-between">
                            <div>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                            <div>
                                <form action="{{ route('likes.toggle', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @php
                                        $like = $post->likes->where('user_id', auth()->id())->first();
                                    @endphp
                                    <button type="submit" class="btn btn-link btn-sm">
                                        <i class="fa {{ $like ? 'fa-heart' : 'fa-heart-o' }}"></i> {{ $post->likes->count() }}
                                    </button>
                                </form>
                                <button class="btn btn-link btn-sm">
                                    <i class="fa fa-comment-o"></i> {{ $post->comments->count() }}
                                </button>
                                <button class="btn btn-link btn-sm">
                                    <i class="fa fa-share"></i>
                                </button>
                            </div>
                        </div>

                        <h6>Comments</h6>
                        <ul class="list-unstyled">
                            @foreach ($post->comments as $comment)
                                <li class="media mb-3">
                                    <img src="{{ asset('img/default-profile.png') }}" class="mr-3 rounded-circle" alt="Commenter Picture" style="width: 40px;">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">{{ optional($comment->user)->name }}</h5>
                                        {{ $comment->content }}
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        
                        <form action="{{ route('comments.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="content" placeholder="Write a comment..." required>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-sm">Comment</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Program Kerja Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Program Kerj</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item
                        <div class="d-flex justify-content-between">
                            <span>Hiburan • Populer</span>
                            <span>#zonauang</span>
                            <span>58,7 rb posts</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Sedang tren dalam topik Indonesia</span>
                            <span>Exhuma</span>
                            <span>18 rb posts</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Sedang tren dalam topik Indonesia</span>
                            <span>#AllEyesOnPapua</span>
                            <span>18 rb posts</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Sedang tren dalam topik Indonesia</span>
                            <span>UNIQLO</span>
                            <span>7,348 posts</span>
                        </div>
                    </li>
                </ul>
                <a href="#" class="card-link mt-2">Tampilkan lebih banyak</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4 mb-3">
        <!-- Profil Section -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="img-fluid rounded-circle mr-3" alt="Profile Picture" style="width: 100px;">
                    <div>
                        <h3 class="mb-0">{{ strtoupper($pejabat) }}</h3>
                        <p class="text-muted mb-0">{{ ucfirst($pejabat) }} Indonesia</p>
                        <p class="text-muted">23 Oktober 2014 - Sekarang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Main Feed Section -->
        <div class="col-md-8">
            <button class="btn btn-primary mb-3" id="create-post-button">Create Post</button>
            <div class="popup-card" id="create-post-popup">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" name="content" placeholder="What is happening?!" required></textarea>
                    </div>
                    <input type="hidden" name="pejabat" value="{{ $pejabat }}">
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" id="close-popup-button">Cancel</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
            <div class="overlay" id="popup-overlay"></div>
            
            @foreach ($posts->sortByDesc('created_at') as $post)
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{ asset('img/' . $pejabat . '.jpg') }}" class="rounded-circle mr-3" alt="Profile Picture" style="width: 50px;">
                            <div>
                                <h5 class="card-title mb-0">{{ ucfirst($pejabat) }}</h5>
                                <small class="text-muted">@{{ $pejabat }} · {{ $post->created_at->format('d M Y H:i') }}</small>
                            </div>
                        </div>
                        <p class="card-text mt-2">{{ $post->content }}</p>
                        {{-- <img src="{{ asset('img/sample.jpg') }}" class="img-fluid mb-3" alt="Post Image"> --}}
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <form action="{{ route('likes.toggle', $post->id) }}" method="POST">
                                @csrf
                                @php
                                    $like = $post->likes->where('user_id', auth()->id())->first();
                                @endphp
                                @if ($like)
                                    <button type="submit" class="btn btn-link">
                                        <img src="{{ asset('icons/icons8-love-32-red.png') }}" alt="Liked"> {{ $post->likes->count() }}
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-link">
                                        <img src="{{ asset('icons/icons8-love-32-black.png') }}" alt="Not Liked"> {{ $post->likes->count() }}
                                    </button>
                                @endif
                            </form>
                            <button type="button" class="btn btn-link btn-sm" onclick="openCommentPopup({{ $post->id }})">
                                <img src="{{ asset('icons/icons8-comment-32.png') }}" alt="Comment"> {{ $post->comments->count() }}
                            </button>
                        </div>

                        <h6>Comments</h6>
                        <ul class="list-unstyled">
                            @foreach ($post->comments as $comment)
                                <li class="media mb-3">
                                    <img src="{{ asset('img/default-profile.png') }}" class="mr-3 rounded-circle" alt="Commenter Picture" style="width: 40px;">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">{{ optional($comment->user)->name }}</h5>
                                        {{ $comment->content }}
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        
                        <form action="{{ route('comments.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="content" placeholder="Write a comment..." required>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-sm">Comment</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Program Kerja Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Program Kerja</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-road"></i> Infrastruktur dan Transportasi<br> <strong>Pembangunan Jalan Tol Trans Nusantara</strong> <br> <span class="text-muted">58,7 rb posts</span></li>
                        <li class="list-group-item"><i class="fas fa-bus"></i> Infrastruktur dan Transportasi<br> <strong>Modernisasi Sistem Transportasi Publik</strong> <br> <span class="text-muted">18 rb posts</span></li>
                        <li class="list-group-item"><i class="fas fa-heartbeat"></i> Pendidikan dan Kesehatan<br> <strong>Program Sehat Bersama</strong> <br> <span class="text-muted">18 rb posts</span></li>
                        <li class="list-group-item"><i class="fas fa-chart-line"></i> Ekonomi dan Lapangan Kerja<br> <strong>Indonesia Mandiri Ekonomi</strong> <br> <span class="text-muted">7,348 posts</span></li>
                        <li class="list-group-item"><i class="fas fa-tractor"></i> Pertanian dan Ketahanan Pangan<br> <strong>Program Ketahanan Pangan Nasional</strong> <br> <span class="text-muted">15 rb posts</span></li>
                        <li class="list-group-item"><i class="fas fa-laptop-code"></i> Teknologi dan Inovasi<br> <strong>Indonesia Digital</strong> <br> <span class="text-muted">10 rb posts</span></li>
                        <li class="list-group-item"><i class="fas fa-tree"></i> Lingkungan Hidup<br> <strong>Indonesia Hijau</strong> <br> <span class="text-muted">4,148 posts</span></li>
                    </ul>
                    <a href="#" class="card-link mt-2">Tampilkan lebih banyak</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-card" id="comment-popup">
    <form id="comment-form" method="POST">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" name="content" placeholder="Write a comment..." required></textarea>
        </div>
        <div class="text-end">
            <button type="button" class="btn btn-secondary" id="close-comment-popup-button">Cancel</button>
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
    </form>
</div>
<div class="overlay" id="comment-popup-overlay"></div>

<script>
    document.getElementById('create-post-button').addEventListener('click', function() {
        document.getElementById('create-post-popup').classList.add('active');
        document.getElementById('popup-overlay').classList.add('active');
    });

    document.getElementById('close-popup-button').addEventListener('click', function() {
        document.getElementById('create-post-popup').classList.remove('active');
        document.getElementById('popup-overlay').classList.remove('active');
    });

    document.getElementById('popup-overlay').addEventListener('click', function() {
        document.getElementById('create-post-popup').classList.remove('active');
        document.getElementById('popup-overlay').classList.remove('active');
    });

    function openCommentPopup(postId) {
        const commentPopup = document.getElementById('comment-popup');
        const commentForm = document.getElementById('comment-form');
        commentForm.action = `/posts/${postId}/comments`;
        commentPopup.classList.add('active');
        document.getElementById('comment-popup-overlay').classList.add('active');
    }

    document.getElementById('close-comment-popup-button').addEventListener('click', function() {
        document.getElementById('comment-popup').classList.remove('active');
        document.getElementById('comment-popup-overlay').classList.remove('active');
    });

    document.getElementById('comment-popup-overlay').addEventListener('click', function() {
        document.getElementById('comment-popup').classList.remove('active');
        document.getElementById('comment-popup-overlay').classList.remove('active');
    });
</script>
@endsection

