@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Категории | {{ $category['title'] }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Категории</a></li>
                            <li class="breadcrumb-item active">{{ $category['title'] }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-block btn-primary" href="{{ route('admin.categories.edit', $category['id']) }}">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <form class="d-inline" action="{{ route('admin.categories.delete', $category['id']) }}" method="post">
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
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $category['id'] }}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{ $category['title'] }}</td>
                            </tr>
                            <tr>
                                <td>Создан</td>
                                <td>{{ date('d.m.Y H:i', strtotime($category['created_at'])) }}</td>
                            </tr>
                            <tr>
                                <td>Изменен</td>
                                <td>{{ date('d.m.Y H:i', strtotime($category['updated_at'])) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
