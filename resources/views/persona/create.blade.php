<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    body {
      display: flex;
      align-items: center; 
      height: 100vh;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

 <form method="POST" action="{{ route('persona.store') }}">
   @csrf
    
    <div class="mb-3">
      <label for="ci" class="form-label">CI</label>
      <input type="text" class="form-control @error('ci') is-invalid @enderror" id="ci" name="ci" value="{{ old('ci') }}">
      @error('ci')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
      @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}">
      @error('apellidos')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="sexo" class="form-label">Sexo</label>
      <select class="form-select @error('sexo') is-invalid @enderror" id="sexo" name="sexo">
        <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
        <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
      </select>
      @error('sexo')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
      <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
      @error('fecha_nacimiento')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

</body>
</html>
