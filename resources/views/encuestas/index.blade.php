<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Encuesta EMQU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Encuesta EMQU</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('create') }}"> Crear Encuesta</a>
                    <a class="btn btn-info" href="{{ route('graficas') }}"> Estadisticas</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Correo del participante</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Red social favorita</th>
                <th>Tiempo promedio al día en Facebook</th>
                <th>Tiempo promedio al día en WhatsApp</th>
                <th>Tiempo promedio al día en Twitter</th>
                <th>Tiempo promedio al día en Instagram</th>
                <th>Tiempo promedio al día en Tiktok</th>
            </tr>
            @foreach ($encuestas as $encuesta)
                <tr>
                    <td>{{ $encuesta->emailParticipante }}</td>

                    @switch($encuesta->idrangosEdad)
                        @case(1)
                            <td>18-25</td>
                        @break

                        @case(2)
                            <td>26-33</td>
                        @break

                        @case(3)
                            <td>34-40</td>
                        @break

                        @case(4)
                            <td>40+</td>
                        @break

                        @default
                            <span>Something went wrong, please try again</span>
                    @endswitch

                    <td>{{ $encuesta->sexo }}</td>
                    <td>{{ $encuesta->redSocialFavorita }}</td>
                    <td>{{ $encuesta->tiempoFacebook }}</td>
                    <td>{{ $encuesta->tiempoWhatsApp }}</td>
                    <td>{{ $encuesta->tiempoTwitter }}</td>
                    <td>{{ $encuesta->tiempoInstagram }}</td>
                    <td>{{ $encuesta->tiempoTiktok }}</td>
                    {{-- <td>
                        <form action="{{ route('encuesta.destroy', $encuesta->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar Encuesta</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </table>
        {{ $encuestas->links() }}
</body>

</html>
