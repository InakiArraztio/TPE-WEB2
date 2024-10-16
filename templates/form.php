<!DOCTYPE html>
<html lang="en">

<!-- head -->
<form action="agregar" method="POST" class="mb-3">
  <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" name="precio" required>
    </div>
    <div class="mb-3 form-check">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" class="form-control" name="categoria" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</form>