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
                    edit
                    <form action="{{ route('contact.update', ['id' => $contact->id]) }}" method="post">
                        @csrf
                        <label>
                            氏名
                            <input type="text" name="your_name" value="{{ $contact->your_name }}">
                        </label>
                        <br>
                        <label>
                            件名
                            <input type="text" name="title" value="{{ $contact->title }}">
                        </label>
                        <br>
                        <label>
                            メールアドレス
                            <input type="email" name="email" value="{{ $contact->email }}">
                        </label>
                        <br>
                        <label>
                            ホームページ
                            <input type="url" name="url" value="{{ $contact->url }}">
                        </label>
                        <br>
                        <label><input type="radio" name="gender" value="0" @if($contact->gender === 0) checked @endif >男性</label>
                        <label><input type="radio" name="gender" value="1" @if($contact->gender === 1) checked @endif>女性</label>
                        <br>
                        <label>年齢</label>
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1" @if($contact->age === 1) selected @endif>~19歳</option>
                            <option value="2" @if($contact->age === 2) selected @endif>20歳~29歳</option>
                            <option value="3" @if($contact->age === 3) selected @endif>30歳~39歳</option>
                            <option value="4" @if($contact->age === 4) selected @endif>40歳~49歳</option>
                            <option value="5" @if($contact->age === 5) selected @endif>50歳~59歳</option>
                            <option value="6" @if($contact->age === 6) selected @endif>60歳~</option>
                        </select>
                        <br>
                        <label>
                            お問い合わせ内容
                            <textarea name="contact">{{ $contact->contact }}</textarea>
                            <br>

                            <input type="submit" value="更新する" class="btn btn-primary">
                            <a href="{{ route('contact.index') }}" class="btn btn-info">一覧へ戻る</a>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
