@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Добавление поста</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
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
                        <form action="{{ route('admin.posts.store') }}" method="post">
                            {{-- TODO: Создать форму для поста --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection