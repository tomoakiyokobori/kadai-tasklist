@extends('layouts.app')

@section('content')
 @if (Auth::check())
 <h1>{{ Auth::user()->name }}さんのタスク一覧</h1>

  tasks.blade.phpへコピー  @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク一覧</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @if (Auth::id() == $task->user_id)
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    @endif

     {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
     @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection