<div style="
    max-width:800px;
    margin:40px auto;
    padding:30px;
    font-family:Georgia, 'Times New Roman', serif;
    background:linear-gradient(145deg, #f9fafb, #f1f5f9);
    border-radius:10px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08), inset 0 0 20px rgba(0,0,0,0.03);
">

    <!-- Back link (top) -->
    <div style="margin-bottom:25px;">
        <a href="/" style="
            color:#4f46e5;
            font-weight:600;
            text-decoration:none;
            letter-spacing:0.5px;
        ">
            &larr; Back to Posts
        </a>
    </div>

    <!-- Title -->
    <h1 style="
        font-size:34px;
        margin-bottom:10px;
        color:#111827;
        letter-spacing:0.5px;
    ">
        {{ $post->title }}
    </h1>

    <!-- Timestamp -->
    <span style="
        color:#6b7280;
        font-size:13px;
        font-style:italic;
    ">
        {{ $post->created_at->format('M d, Y H:i') }}
    </span>

    <!-- Divider -->
    <div style="
        height:1px;
        background:linear-gradient(to right, transparent, #d1d5db, transparent);
        margin:20px 0;
    "></div>

    <!-- Body -->
    <p style="
        margin-top:10px;
        font-size:17px;
        line-height:1.9;
        color:#1f2937;
        white-space:pre-line;
        letter-spacing:0.3px;
    ">
        {{ $post->body }}
    </p>

    <!-- Back link (bottom) -->
    <div style="margin-top:35px;">
        <a href="/" style="
            color:#4f46e5;
            font-weight:600;
            text-decoration:none;
            letter-spacing:0.5px;
        ">
            &larr; Back to Posts
        </a>
    </div>

</div>