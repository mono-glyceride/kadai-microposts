@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンいいねボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('いいね解除', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
 @else
    {{-- いいねボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id],'method' => 'post']) !!}
        {!! Form::submit('いいね', ['class' => 'btn btn-primary btn-sm']) !!}
    {!! Form::close() !!}
@endif