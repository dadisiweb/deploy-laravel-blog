<h1 style="font-size:28px; margin-bottom:20px; font-family:Arial, sans-serif;">
    Edit Post
</h1>

<form method="POST" action="/posts/{{ $post->id }}" style="max-width:500px; font-family:Arial, sans-serif;">
    @csrf
    @method('PUT')

    <div style="margin-bottom:15px;">
        <label for="title" style="display:block; margin-bottom:5px; color:#333; font-weight:500;">Title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            value="{{ old('title', $post->title) }}" 
            required
            style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:14px;"
        >
    </div>

    <div style="margin-bottom:15px;">
        <label for="body" style="display:block; margin-bottom:5px; color:#333; font-weight:500;">Body</label>
        <textarea 
            name="body" 
            id="body" 
            rows="6" 
            required
            style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:14px;"
        >{{ old('body', $post->body) }}</textarea>
    </div>

    <button type="submit" style="background-color:#4f46e5; color:#fff; padding:10px 16px; border:none; border-radius:6px; font-weight:600; cursor:pointer;">
        Update Post
    </button>
</form>
