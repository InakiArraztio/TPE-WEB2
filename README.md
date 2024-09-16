# TPE-WEB2
Repositorio para el trabajo final de WEB 2


### RESTAURANTE y PLATOS ###
Este proyecto es un sistema de gestión para un restaurante que organiza los platos de un menú en diferentres categorías.
La relación entre platos y las categorías es de uno a muchos (1:N). Cada plato pertenece a una única cateogiría, pero una categoría puede tener múltiples platos.
Estructura:
Categorías del Menú: cada categoría puede representar un tipo de plato como entrada, plato principal, postre o bebida.
Platos: cada plato tiene un nombre, precio y está asociado a una categoría específica.
Tablas:
  a) Platos:
        ID(id unico del plato): INT número que identifica los platos de forma única.
        Nombre_Plato: VARCHAR.  
        Precio: DECIMAL.
        Categoria_ID: INT (calve foranea), relacionado con el ID de la tabla Categorías.
  b) Categorias: 
        ID: INT (clave primaria), número único que identifica cada categoría.
        Nombre_Categoria: VARCHAR, nombre de las categorías.

