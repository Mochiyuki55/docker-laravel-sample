@extends('layouts.master')

@section('title','Your Note')
@section('main')
    <p>好きなメモを記録してください。<br>
    このページでは、自分のメモのCRUD処理が可能です。</p>

    <div class="row my-3">
        <a class="btn btn-primary" href="/notes/mynote/add">自分のメモを追加する</a>

        <form action="/notes/mynote" method="post">
            @csrf
            <label for="">自分のメモを検索：</label>
            <input type="text" name="" value="">
            <input class="btn btn-secondary" type="submit" name="" value="検索">

        </form>

    </div>

    <div class="row">
        <table class="table">
            <tr>
                <th>ID:</th>
                <th>Title</th>
                <th>Content</th>
                <th>Updated</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>Gitのバージョンを確認</td>
                <td>$ git --version</td>
                <td><?php echo date('Y/m/d h:m:s'); ?></td>
                <td><a class="btn btn-primary" href="/notes/mynote/edit?id=1">編集</a>
                <a class="btn btn-secondary" href="/notes/mynote/delete?id=1">削除</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Gitの設定を確認</td>
                <td>$ git config -l</td>
                <td><?php echo date('Y/m/d h:m:s'); ?></td>
                <td><a class="btn btn-primary" href="/notes/mynote/edit?id=2">編集</a>
                <a class="btn btn-secondary" href="/notes/mynote/delete?id=2">削除</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Gitのユーザー名を設定</td>
                <td>$ git config --global user.name "ユーザー名"</td>
                <td><?php echo date('Y/m/d h:m:s'); ?></td>
                <td><a class="btn btn-primary" href="/notes/mynote/edit?id=3">編集</a>
                <a class="btn btn-secondary" href="/notes/mynote/delete?id=3">削除</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Gitのメールアドレスを設定</td>
                <td>$ git config --global user.email "メールアドレス"</td>
                <td><?php echo date('Y/m/d h:m:s'); ?></td>
                <td><a class="btn btn-primary" href="/notes/mynote/edit?id=4">編集</a>
                <a class="btn btn-secondary" href="/notes/mynote/delete?id=4">削除</a></td>
            </tr>

        </table>
    </div>

@endsection
