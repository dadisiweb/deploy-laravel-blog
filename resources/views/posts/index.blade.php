<h1 style="font-size:28px; margin-bottom:20px; font-family:Arial, sans-serif;">
    Posts
</h1>

<!-- Success message -->
@if(session('success'))
    <div style="padding:10px; background-color:#d1fae5; border:1px solid #10b981; margin-bottom:20px; border-radius:6px;">
        {{ session('success') }}
    </div>
@endif

<a href="/create"
    style="display:inline-block; margin-bottom:15px; color:#4f46e5; text-decoration:none; font-weight:600; font-family:Arial, sans-serif;">
    Create Post
</a>

<ul style="list-style:none; padding:0; font-family:Arial, sans-serif;">
    @foreach($posts as $post)
        <li style="padding:10px; border:1px solid #ddd; border-radius:6px; margin-bottom:10px; transition:0.2s; cursor:pointer;"
            onmouseover="this.style.backgroundColor='#f9fafb';" onmouseout="this.style.backgroundColor='white';">
            <strong>
                <a href="/posts/{{ $post->id }}" style="text-decoration:none; color:#1e40af;">
                    {{ $post->title }}
                </a>
            </strong>
            <span style="color:#6b7280; font-size:12px;">({{ $post->created_at->format('M d, Y H:i') }})</span>
            <br>
            <span>{{ \Illuminate\Support\Str::limit($post->body, 150) }}</span>

            <div style="margin-top:8px;">
                <a href="/posts/{{ $post->id }}/edit" style="color:#16a34a; font-weight:600; margin-right:10px;">Edit</a>

                <form method="POST" action="/posts/{{ $post->id }}" style="display:inline;"
                    onsubmit="return confirm('Are you sure you want to delete this post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        style="color:#dc2626; font-weight:600; background:none; border:none; cursor:pointer;">
                        Delete
                    </button>
                </form>
            </div>
        </li>
    @endforeach
</ul>