@extends('layouts.master')

@section('title','Our Notes　|　新規登録')
@section('main')
    <p>ノートに追加したいメモを入力し、登録してください。</p>

    <div class="row">
        <form class="form" action="/notes/mynote/add" method="post">
            @csrf
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="memo_title" value="phpのバージョンを確認する"></td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td><input type="text" name="memo_content" value="php --version"></td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td><?php echo date('Y/m/d h:m:s'); ?></td>
                </tr>
            </table>
            <input class="btn btn-success" type="submit" name="" value="登録">
            <a class="btn btn-secondary" href="/notes/mynote">戻る</a>
        </form>

    </div>

@endsection
