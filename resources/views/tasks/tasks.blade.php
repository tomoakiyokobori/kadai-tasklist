<<<<<<< HEAD
 <h1> {{ Auth::user()->name }}さんのタスク一覧</h1>
     @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク一覧</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
 {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
=======
<ul class="list-unstyled">
    @foreach ($tasks as $task)
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $task->user->name, ['id' => $task->user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasks->links('pagination::bootstrap-4') }}
>>>>>>> 56c3f64f58bf0554cc26fac7a1a41ed8bc47e827
