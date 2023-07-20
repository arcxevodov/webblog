@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Добавление категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Категории</a></li>
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
                        <form action="{{ route('admin.categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputText">Название</label>
                                <input type="text" name="title" class="form-control shadow-sm" id="inputText" aria-describedby="textHelp" placeholder="Введите название категории">
                                @error('title')
                                    <small id="textHelp" class="form-text text-danger">Это поле необходимо для заполнения.</small>
                                @enderror
                                <small id="textHelp" class="form-text text-muted">Название должно быть уникальным.</small>
                            </div>
                            <input type="submit" class="btn btn-primary shadow-sm" value="Добавить">
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-link">Отменить</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
