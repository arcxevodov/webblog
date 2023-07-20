@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Добавление тега</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Теги</a></li>
                            <li class="breadcrumb-item active">Добавление</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <form action="{{ route('admin.tags.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputText">Имя</label>
                                <input type="text" name="title" class="form-control shadow-sm" id="inputText" aria-describedby="textHelp" placeholder="Введите имя тега">
                                @error('title')
                                    <small id="textHelp" class="form-text text-danger">Это поле необходимо для заполнения.</small>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary shadow-sm" value="Добавить">
                            <a href="{{ route('admin.tags.index') }}" class="btn btn-link">Отменить</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
