<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div>
    @inject('dateFormatPresenter', 'MyBlog\Presenters\DateFormatPresenter')
    @foreach($users as $user)
        <div>
            <h2>{{ $user->name }}</h2>
            <h2>{{ $user->email }}</h2>
            <h2>{{ $dateFormatPresenter->showDateFormat($user->created_at) }}</h2>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>