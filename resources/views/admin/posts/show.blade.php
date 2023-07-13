@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Посты | {{ $post['title'] }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">{{ $post['title'] }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-block btn-primary" href="{{ route('admin.posts.edit', $post['id']) }}">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <form class="d-inline" action="{{ route('admin.posts.delete', $post['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-4">
                        <table class="table">
                            {{-- TODO: Создать информацию о посте --}}
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
