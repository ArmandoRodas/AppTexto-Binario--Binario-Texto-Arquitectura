<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Texto - Binario</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> Binario - Texto</button>
        </div>
    
        

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="mb-3">
                    <form action="{{route('textoBinario')}}" method="POST">
                        @csrf
                        <label for="exampleFormControlInput1" class="form-label">Ingrese Texto:</label>
                        <textarea class="form-control" placeholder="Hola" id="text" name="text"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary"> Convertir </button>
                    </form>
                </div>
                @if (isset($resultado))
                    <br>
                    <h5 class="card-title"> Resultado ({{ $tipo }}) :</h5>
                    <textarea class="form-control">{{ $resultado }}</textarea>
                @else
                @endif
            </div>
        </div>
        

            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-home" tabindex="0">
                <div class="mb-3">
                    <form action="{{route('binarioTexto')}}" method="POST">
                        @csrf
                        <label for="exampleFormControlInput1" class="form-label">Ingrese Texto Binario:</label>
                        <textarea class="form-control" placeholder="Hola" id="binario" name="binario"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary"> Convertir </button>
                    </form>
                </div>
                @if (isset($resultado))
                    <br>
                    <h5 class="card-title"> Resultado ({{ $tipo }}) :</h5>
                    <textarea class="form-control">{{ $resultado }}</textarea>
                @else
                    <h2>No se encontro ningun resultado</h2>
                @endif
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>