<h1 style="font-size:28px; margin-bottom:20px; font-family:Arial, sans-serif;">
    {{ isset($post) ? 'Edit Post' : 'Create Post' }}
</h1>

@if($errors->any())
    <div style="color:#b91c1c; margin-bottom:15px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ isset($post) ? '/posts/'.$post->id : '/store' }}" style="max-width:500px; font-family:Arial, sans-serif;">
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif

    <div style="margin-bottom:15px;">
        <label for="title" style="display:block; margin-bottom:5px; color:#333; font-weight:500;">Title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            value="{{ old('title', $post->title ?? '') }}" 
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
        >{{ old('body', $post->body ?? '') }}</textarea>
    </div>

    <button type="submit" style="background-color:#4f46e5; color:#fff; padding:10px 16px; border:none; border-radius:6px; font-weight:600; cursor:pointer;">
        {{ isset($post) ? 'Update Post' : 'Save Post' }}
    </button>
</form>
