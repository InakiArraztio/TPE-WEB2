# TPE-WEB2

Iñaki Arraztio, DNI: 41900430
Henry Melchior, DNI : 42093457


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

# DIAGRAMA 

![Diagrama](https://github.com/user-attachments/assets/cfe99dc7-2f12-4c82-9338-66048ba8a40d)
