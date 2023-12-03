# decisionforge
This is a experiment to create an interactive adventure book for PC, catering to narrative rogue-like games, all within a web-based environment. /// Experimento destinado a desarrollar un libro de aventuras interactivo para PC, dirigido a juegos narrativos tipo rogue-like, todo dentro de un entorno basado en la web.

![Captura del index de DecisionForge](cap1.jpg)

It's a PHP script, so simply set up a local development server and access it from your favorite web browser. /// Es un script en PHP, por lo que simplemente establece un servidor de desarrollo en local y accede desde tu navegador web favorito.

# Explaination
In this example, we have the fictional game 'Crónicas de la Ilusión' as a reference. The script of the game has been created by ChatGPT and images are also AI generated with Stable Diffusion based on ChatGPT script. This is a example on how to create a easy framework for interactive adventure book-type games. 

The format of each line is as follows:

    Unique identifier;Description;Button 1 text[Destination identifier];Button 2 text[Destination identifier];Button 3 text[Destination identifier]...

Unique identifier: An alphanumeric string of any kind. Identifies the level.

Description: Text displayed when the level is loaded.

Button text: Text for one of the displayed options.

[Destination identifier]: The identifier of the world to which we'll go when that button is pressed. 
Important: You can add as many buttons (options) as you want, just keep adding Text button + identifier. 

Images: Every time the script loads a screen, it loads the image whose name is the same as the ID and is in the 'images' folder, with the JPG extension. Just place the image there with the name matching the ID. Example: ID: AAAAAAAAA, image: AAAAAAAAA.jpg

To keep your actual game state, simpy copy the UI in the actual URL (i.ex. ayyYprXF4uHg4N7Gcpk6). In the home page, you will find a textbox to paste it and go to that screen directly.

# Explicación

En este ejemplo, tenemos el juego ficticio 'Crónicas de la Ilusión' como referencia. El guión del juego ha sido creado por ChatGPT y las imágenes han sido generadas por Stable Diffusion en base a la historia que escribió el primero. Este es un ejemplo de cómo crear un marco sencillo para juegos interactivos tipo libro de aventuras.

El formato de cada línea es el siguiente:

    Identificador único;Descripción;Texto del botón 1[Identificador de destino];Texto del botón 2[Identificador de destino];Texto del botón 3[Identificador de destino]...

Identificador único: Una cadena alfanumérica de cualquier tipo. Identifica el nivel.

Descripción: Texto que se muestra al cargar el nivel.

Texto del botón: Texto de una de las opciones mostradas.

[Identificador de destino]: El identificador del mundo al que iremos cuando se presione ese botón.
Importante: Puedes agregar tantos botones (opciones) como desees, simplemente sigue agregando texto de botón + identificador.

Imágenes: Cada vez que el script carga una pantalla, carga la imagen cuyo nombre es igual al ID y está en la carpeta 'images', con la extensión JPG. Simplemente coloca la imagen allí con el nombre que coincida con el ID. Ejemplo: ID: AAAAAAAAA, imagen: AAAAAAAAA.jpg

Para mantener el estado actual del juego, simplemente copia el identificador único de la URL actual (por ejemplo, ayyYprXF4uHg4N7Gcpk6). En la página principal, encontrarás un cuadro de texto para pegarlo y dirigirte directamente a esa pantalla.

# Screenshots / Capturas

![Captura de una pantalla de juego en DecisionForge](cap2.jpg)
