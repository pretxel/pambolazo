@extends('layouts.layoutPam')

@section('content')

<div class="row">

                    <div class="small-2 large-2 columns">
                        <i class="step fi-web size-60 right"></i>
                    </div>
                    <div class="small-10 large-10 columns">
                        <h1 class="left">Liga Nueva</h1>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="small-12 large-8 columns">
                        <label>
                            Nombre de la Liga
                            <input type="text">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">



                        <a href="ligaNueva.html" class="button expand" style="padding-top: 0; padding-bottom: 0;">
                            <div class="step fi-eye size-48"></div>
                            <div>¿Existe Liga?</div>
                        </a>
                    </div>
                    <div class="small-6 large-2 columns">
                        <a href="ligaNueva.html" class="button expand " style="padding-top: 0; padding-bottom: 0;">
                            <div class="step fi-play-video size-48"></div>
                            <div>Crear</div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div data-alert class="alert-box success radius">
                        El nombre de la liga esta disponible.
                        <a href="#" class="close">&times;</a>
                    </div>
                </div>

                <div class="row">
                    <div data-alert class="alert-box alert radius">
                        El nombre de la liga esta ocupado.
                        <a href="#" class="close">&times;</a>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 large-12 columns" style="background: grey;">
                        <i class="step fi-torsos-all size-60"></i>
                        <h2>Invita a tus amigos</h2>
                    </div>
                </div>


                <div class="row" style="border: 1px solid grey;">
                    <div class="small-12 large-6 columns">

                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>email o alías</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Content Goes Here</td>
                                </tr>
                                <tr>
                                    <td>Content Goes Here</td>
                                </tr>
                                <tr>
                                    <td>Content Goes Here</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="small-12 large-6 columns">

                        <form data-abide>
                            <label>
                                Email:
                                <input type="email" name="email" placeholder="example@domain.com" required>
                            </label>
                            <small class="error">Debe ser un correo valido.</small>
                            <label>
                                <button type="submit" class="button expand">Agregar</button>
                            </label>
                        </form>
                    </div>
                </div>
@stop