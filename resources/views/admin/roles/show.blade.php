@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Просмотр роли
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.roles.index') }}">
                    <i class="fa fa-arrow-left"></i> Назад к списку
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $role->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hазвание
                        </th>
                        <td>
                            {{ $role->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Разрешения
                        </th>
                        <td>
                            @foreach($role->permissions as $key => $permissions)
                                <span class="badge badge-info">{{ $permissions->localized_title }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.roles.index') }}">
                    <i class="fa fa-arrow-left"></i> Назад к списку
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
