@if (!empty($post))
    <h6>{{$post->title}}</h6><br>
    <p>{{$post->description}}</p>
@elseif(!empty($posts))
    @foreach ($posts as $post)
        <h6>{{$post->title}}</h6><br>
        <p>{{$post->description}}</p>
    @endforeach
@else
    <h1>Nothing</h1>
@endif