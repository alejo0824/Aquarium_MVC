# Aquarium_MVC
## Rama inicio
                
1. Se definen las rutas iniciales del sitio web.
2. Se definen mixins para las pantallas.
3. Primeros pasos para el diseño del header. 
:boom:
4. Se instala librerías de Gulp para optimizar el tamaño de las imagen
	+ Gulp cache: Para almacenarlas en las imágenes en el caché.
	+ Gulp-imagemin: Para reducir el tamaño de la imagenes.
5. Se agrego imagenes de fondo dependiendo el caso si o no es el home page.
6. Se agega Mixins para botones.
7. Se optimiza el header en el home page.
8. Se instala la librería gulp-terser-js para optimizar código JavaScript
:boom:
9. En pantallas móviles las opciones de la barra están escondidas, pero aparece un botón de menú de hamburguesa. 
10. El botón Hamburguesa solo está disponible en dispositivos menores de 768 píxeles de ancho.
11. Al dar clic en el botón de hamburguesa aparecerá las opciones cubriendo la pantalla de un fondo negro con las respectivas opciones de la barra y sin poder hacer scroll. También desaparece el botón de menú de hamburguesa y aparece el botón de para cerrar en forma de ‘X.
12. Si el usuario da clic en el  botón de X, se cierra las opciones de la barra y se podrá hacer scroll, volviendo al diseño inicial en la interfaz, desaparece el botón de cerrar y vuelve el menú hamburguesa, 
13. Si el usuario tiene un celular y está viendo la página de modo vertical y cambia la vista en manera horizontal, este se tomara como dispositivo tablet, es decir, un dispositivo mayor a 768 píxeles y desaparecerá el diseño para móviles automáticamente. Esto gracias a JavaScript.
:boom:
14. Se crea el diseño del footer para todas las paginas del sitio web.
15 Se crea el diseño de la página de error 404 cuando el usuario ingrese una dirección no válida.
:boom: