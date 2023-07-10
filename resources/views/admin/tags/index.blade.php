@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ config('app.name') }} | Теги</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель управления</a>
                            </li>
                            <li class="breadcrumb-item active">Теги</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{ route('admin.tags.create') }}" class="btn btn-block btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-4">
                        @if($tags->count() != 0)
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
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $tag['id'] }}</td>
                                        <td>{{ $tag['title'] }}</td>
                                        <td>{{ date('d.m.Y H:i', strtotime($tag['created_at'])) }}</td>
                                        <td>{{ date('d.m.Y H:i', strtotime($tag['updated_at'])) }}</td>
                                        <td>
                                            <a href="{{ route('admin.tags.show', $tag['id']) }}"><i
                                                    class="far fa-eye mx-1"></i></a>
                                            <a href="{{ route('admin.tags.edit', $tag['id']) }}"><i
                                                    class="far fa-edit text-cyan mx-1"></i></a>
                                            <form class="d-inline"
                                                  action="{{ route('admin.tags.delete', $tag['id']) }}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Теги отсутствуют.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
