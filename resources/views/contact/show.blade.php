@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    show
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $age }}
                    {{ $contact->contact }}
                    <form action="{{ route('contact.edit', ['id' => $contact->id]) }}" method="get">
                        @csrf

                            <input type="submit" value="変更する" class="btn btn-primary">
                            <a href="{{ route('contact.index') }}" class="btn btn-info">一覧へ戻る</a>
                        </label>
                    </form>

                    <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="post" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e) {
        'use strict';
        if (confirm('削除してもいいですか?')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>

@endsection
