@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Посты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a>
                            </li>
                            <li class="breadcrumb-item active">Посты</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-block btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-4">
                        {{-- TODO: Создать вывод постов --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
