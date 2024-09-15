# TPE-WEB2
Repositorio para el trabajo final de WEB 2


### RESTAURANTE y PLATOS ###
Sistema de gestión para uin restaurante donde cada plato pertenece a una categoría de específica del menú.
Las realciones pertenecen a una cateogiría, pero una cateogiría puede tener múltiples platos (1:N). Cada cateogiría del menú (entrada, plato principal, postre, bebida), tiene "X" cantidad de opciones.
Tablas:
  a) Platos:
        ID(id unico del plato): INT número que identifica los platos de forma única.
        Nombre_Plato: VARCHAR.  
        Precio: DECIMAL.
        Categoria_ID: INT y sus valores se limitan a los ID existentes en la tabla Categorias (calve foranea).
  b) Categorias: 
        ID: INT (clave primaria)
        Nombre_Categoria: VARCHAR
