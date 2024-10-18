<!DOCTYPE html>
<html lang="en">

<!-- head -->
<form action="agregar_plato" method="POST" class="mb-3">
  <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" required>
  </div>
  
  <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" name="precio" required>
  </div>
  
  <div class="mb-3">
      <label for="categoria" class="form-label">Categoría</label>
      <select class="form-control" name="id_categoria" required>
          {foreach from=$categorias item=categoria}
              <option value="{$categoria->id_categoria}">{$categoria->tipo_categoria}</option>
          {/foreach}
      </select>
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
