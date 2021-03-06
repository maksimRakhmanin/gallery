@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ url('/profile/'.$user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}
        <div class="control-group col-md-4">
            <div class="form-group">
                <img class="user-avatar" src="{{ asset('assets/avatars/'.$user->avatar ) }}">
                <input type="file" name="upavatar" value="Изменить аватар">
                <input type="submit" name="uploadavatar" class="btn btn-warning" value="Изменить аватар">
                @if ($errors->has('upavatar'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('upavatar') }}</strong>
                    </span>
                @endif
            </div>



        </div>
        <div class="col-md-8">

            <table class="table table-condensed">
                <tr>
                    <th><b>Ваше имя</b></th><td>
                        {{$user->name}}</td><td>
                        <div class="form-group">
                            <input type="text" class="sel" name="upname" placeholder="Введите новое Имя" value="{{ old('upname') }}">
                            @if ($errors->has('upname'))
                                <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('upname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </td><td><input type="submit" name="uploadname" class="btn-small btn-danger" value="Изменить">

                    </td>
                </tr>
                <tr>
                    <td>Ваш email</td><td>
                        {{$user->email}}</td><td>
                        <div class="form-group">
                        <input type="text" class="sel" name="upemail" placeholder="Введите новый email" value="{{ old('upemail') }}">
                            @if ($errors->has('upemail'))
                                <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('upemail') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </td><td><input type="submit" name="uploademail" class="btn-small btn-danger" value="Изменить"></td>
                </tr>
                <tr>
                    <td>Ваш логин</td><td>
                        {{$user->login}}</td><td>
                        <div class="form-group">
                        <input type="text" class="sel" name="uplogin" placeholder="Введите новый логин" value="{{ old('uplogin') }}">
                            @if ($errors->has('uplogin'))
                                <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('uplogin') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </td><td><input type="submit" name="uploadlogin" class="btn-small btn-danger" value="Изменить"></td>
                </tr>
            </table>

        </div>
        </form>
        @if(session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
    </div>


@endsection   