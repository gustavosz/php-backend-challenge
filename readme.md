# Talently Challenge

## Configuración

Este repositorio incluye la configuración inicial para este problema, incluyendo los specs. Usa la librería de [Kahlan](http://kahlan.readthedocs.org/en/latest/), que probablemente no has usado. Pero no te preocupes, no hay mucho que aprender. Revisa los specs y entenderás la sintaxis básica en menos de un minuto.

Tu tarea es:

1. Refactorizar el código en la clase `VillaPeruana.php`.
2. Agregar un nuevo typo de elemento, "Café". Las especificaciones para este elemento están comentadas en el archivo `VillaPeruanaScpec.php`.

## Flujo

Debes tener instalado docker en tu computadora para usar nuestros comandos del flujo de trabajo

- Usa el comando `./start` para inicializar el docker
- Usa el comando `./test` para correr los tests
- Usa el comando `./finish` para desactivar el docker

# Reglas

Hola y bienvenido al equipo La Villa Peruana. Como sabes, somos una pequeña posada, con una excelente ubicación en una ciudad importante, administrada por nuestra amigable Allison. También compramos y vendemos los más finos productos. Desafortunadamente, nuestros productos se van desgradando constantemente en calidad conforme se acercan a su fecha de vencimiento. Tenemos un sistema que actualiza nuestro inventario por nosotros. Fue desarrollado por un desarrollador llamado Elmo, quien ha ido en busca de nuevas aventuras.

Queremos agregar una nueva categoría de productos al sistema y para ello necesitamos tu ayuda.

Primero, una introducción a nuestro sistema:

- Todos los productos tienen un SellIn que denota el número de días que se tienen para vender el producto
- Todos los productos tienen un Quality que denota cuán valioso es el producto
- Al final de cada día, nuestro sistema disminuye los ambos valores para cada producto

Bastante simple, ¿verdad? Bueno, acá se pone interesante:

- Cuando la fecha de venta ha pasado, el Quality se degrada dos veces más rápido
- El Quality de un producto nunca es negativo
- Los productos "Pisco Peruano", en realidad, incrementan en Quality mientras más viejos están
- El Quality de un producto nunca es mayor a 50
- Los productos "Tumi", siendo un producto legendario, nunca debe ser vendido o bajaría su Quality
- Los "Tickets VIP", así como "Pisco Peruano", incrementan su Quality conforme su SellIn se acerca a 0, el Quality incrementa en 2 cuando faltan 10 días o menos y en 3 cuando faltan 5 días o menos, pero el Quality disminuye a 0 después del concierto.

Recientemente hemos firmado un contrato con un proveedor de productos de "Café". Esto require una actualización para nuestro sistema:

- Los productos de "Café" se degradan en Quality el doble que los productos normales

Para dejarlo claro, un producto nunca puede incrementar su Quality mayor a 50, sin embargo "Tumi" es un producto legendario y como tal su Quality es 80 y nunca cambia.

# Entregable o Expectativa del reto
- Será indispensable el uso de los principios S.O.L.I.D.
- Organización de código
- Manejo de errores
- Deseable el uso de Domain drive design (usa los conceptos de ddd, aggregates, value objects, domain services, etc)
- La limpieza y legibilidad del código será considerada.
- La eficiencia del código en cuestiones de rendimiento sumarán para esta prueba.
- Al finalizar el reto, enviar el enlace de la solución a emmanuel.barturen@talently.tech con copia a paula.anselmo@talently.tech con título "Reto Talently Backend"

# Preguntas de conocimiento en Laravel

1. Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)
    - `Para levantar un sistema de administración rápidamente, se puede utilizar el paquete de Laravel Nova o Laravel Voyager, el cual nos permite crear un sistema de administración con autenticación y CRUDs de forma rápida y sencilla.`
2. Una breve explicación de cómo laravel utiliza la injección de dependencias
    - `En Laravel, se utiliza el contenedor de inyección de dependencias para resolver y crear las instancias de las clases que se necesitan en una aplicación.`
    - `Cuando se llama a una clase en Laravel, el contenedor busca en su registro si ya existe una instancia de esa clase. Si existe, se devuelve esa instancia. Si no existe, se crea una nueva instancia y se registra en el contenedor. Además, el contenedor también se encarga de resolver las dependencias de la clase, es decir, las clases que necesita para funcionar.`
    - `Por ejemplo, si tienes un controlador que depende de una clase de servicio, puedes inyectar la clase de servicio en el constructor del controlador. El contenedor se encargará de crear una instancia de la clase de servicio y pasarla al constructor del controlador.`
    - `De esta manera, se logra una mayor flexibilidad y seguridad al desarrollar aplicaciones con Laravel, ya que se pueden inyectar clases concretas en lugar de instanciarlas directamente, lo cual permite una mejor testing, mantenimiento y escalabilidad de la aplicación.`
3. En qué casos utilizarías un Query Scope?
    - `Aplicar un filtro común a un conjunto de consultas, como solo mostrar los registros activos o los registros creados en un rango de fechas específico.`
    - `Simplificar el código al llamar a un método en lugar de escribir una consulta compleja cada vez que se necesite ese filtro.`
4. Qué convenciones utilizas en la creación e implementación de migraciones?
    - `Nomenclatura: Las migraciones deben tener un nombre descriptivo que refleje el cambio que realizan en la base de datos, como "create_users_table" o "add_age_column_to_users_table".`
    - `Orden: Las migraciones deben estar ordenadas cronológicamente, para que siempre se apliquen en el orden correcto.`
    - `Utilizar el comando "php artisan migrate:status" para verificar el estado de las migraciones y asegurar que se han aplicado correctamente.`
    - `Utilizar "php artisan migrate:rollback" para revertir las últimas migraciones.`
    - `Utilizar "php artisan migrate:refresh" para revertir y volver a aplicar las migraciones.`
