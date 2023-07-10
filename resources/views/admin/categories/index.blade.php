@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a>
                            </li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-block btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-4">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Создано</th>
                                <th scope="col">Изменено</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category['id'] }}</td>
                                    <td>{{ $category['title'] }}</td>
                                    <td>{{ date('d.m.Y H:i', strtotime($category['created_at'])) }}</td>
                                    <td>{{ date('d.m.Y H:i', strtotime($category['updated_at'])) }}</td>
                                    <td>
                                        <a href="{{ route('admin.categories.show', $category['id']) }}"><i class="far fa-eye mx-1"></i></a>
                                        <a href="#"><i class="far fa-edit mx-1"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt mx-1"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
