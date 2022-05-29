<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Encuesta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Encuesta</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('index') }}">Regresar</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Correo del participante:</strong>
                        <input type="text" name="emailParticipante" class="form-control"
                            placeholder="Correo del participante">
                        @error('emailParticipante')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Edad:</strong>
                        <select name="idrangosEdad" class="form-control">
                            <option value="1">18-25</option>
                            <option value="2">26-33</option>
                            <option value="3">34-40</option>
                            <option value="4">40+</option>
                        </select>
                        @error('idrangosEdad')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Sexo:</strong>
                        <select name="sexo" class="form-control">
                            <option value="Hombre">HOMBRE</option>
                            <option value="Mujer">MUJER</option>
                        </select>
                        @error('sexo')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Red social favorita:</strong>
                        <input type="text" name="redSocialFavorita" class="form-control"
                            placeholder="Red social favorita">
                        @error('redSocialFavorita')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Tiempo promedio al día en Facebook:</strong>
                        <input type="text" name="tiempoFacebook" class="form-control"
                            placeholder="Tiempo promedio al día en Facebook" data-inputmask="'mask': '99:99:99'">
                        @error('tiempoFacebook')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Tiempo promedio al día en WhatsApp:</strong>
                        <input type="text" name="tiempoWhatsApp" class="form-control"
                            placeholder="Tiempo promedio al día en WhatsApp" data-inputmask="'mask': '99:99:99'">
                        @error('tiempoWhatsApp')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Tiempo promedio al día en Twitter:</strong>
                        <input type="text" name="tiempoTwitter" class="form-control"
                            placeholder="Tiempo promedio al día en Twitter" data-inputmask="'mask': '99:99:99'">
                        @error('tiempoTwitter')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Tiempo promedio al día en Instagram:</strong>
                        <input type="text" name="tiempoInstagram" class="form-control"
                            placeholder="Tiempo promedio al día en Instagram" data-inputmask="'mask': '99:99:99'">
                        @error('tiempoInstagram')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Tiempo promedio al día en Tiktok:</strong>
                        <input type="text" name="tiempoTiktok" class="form-control"
                            placeholder="Tiempo promedio al día en Tiktok" data-inputmask="'mask': '99:99:99'">
                        @error('tiempoTiktok')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Enviar</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js"></script>
        <script>
            $(document).ready(function() {
                $(":input").inputmask();
            });
        </script>
</body>

</html>
