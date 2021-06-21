<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    @foreach($post as $posts)
        <div>
            <h3>{{ $posts->tittle }}<h3>
        </div>
    @endforeach
    {{ $post->links() }}

    {{ $user }}
</body>
</html>