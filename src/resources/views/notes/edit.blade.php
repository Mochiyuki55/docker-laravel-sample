@extends('layouts.master')

@section('title','Our Notes　|　メモ編集')
@section('main')
    <p>メモを編集し、更新してください。</p>

    <div class="row">
        <form class="form" action="/notes/mynote/edit" method="post">
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
            <input class="btn btn-success" type="submit" name="" value="更新">
            <a class="btn btn-secondary" href="/notes/mynote">戻る</a>
        </form>

    </div>

@endsection
