
<!-- head -->
{if $user}
<form action="agregar_categoria" method="POST" class="mb-3">
  <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" class="form-control" name="categoria" aria-describedby="emailHelp" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</form>
{/if}