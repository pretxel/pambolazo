@extends('layouts.layoutPam')

@section('content')

 <div class="row">
                    <div class="small-2 large-2 columns">
                        <i class="step fi-page-edit size-72 right"></i>
                    </div>
                    <div class="small-10 large-10 columns">
                        <h1 class="left">Perfil</h1>
                    </div>
                </div>
                <br>
                <form data-abide>
                    <div class="row">
                        <div class="small-12 large-4 columns">
                            <label>Alias:
                                <input type="text" name="alias" required pattern="[a-zA-Z]+[0-9]*" value="{{$User->alias}}">
                            </label>
                            <small class="error">El Alias debe contener caracteres o numericos.</small>
                        </div>
                        <div class="small-12 large-4 columns">
                            <label>Lugar Origen:
                                <input type="text" name="lugar" required pattern="[a-zA-Z]+">
                            </label>
                            <small class="error">El Lugar es obligatorio y debe ser una cadena de caracteres</small>
                        </div>
                        <div class="small-12 large-4 columns">
                            <label>Equipo Favorito:
                                <input type="text" name="favorito" required pattern="[a-zA-Z]+">
                            </label>
                            <small class="error">Tu euipo favorito es obligatorio y debe ser una cadena de caracteres</small>
                        </div>
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <label>Email:
                                    <input type="text" name="email" disabled value="{{$User->email}}">
                                </label>
                            </div>
                            <div class="small-12 large-6 columns">
                                <label>Foto (próximamente):
                                    <input type="file" name="photo">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="button expand">Guardar</button>
                        </div>
                </form>

                </div>
@stop