# Select2
Probando Select 2 en laravel

<a name="top"></a>

## Indice de Contenidos.

- [Instalación de requisitos](#item1)
- [Instalación de Select2](#item2)
- [Implementar Bootstrap 5](#item3)
- [Implementar Tema de Bootstrap a Select2](#item4)

<a name="item1"></a>

## Instalación de requisitos.

> Typee: en la Consola:

```console

npm install jquery

```

> En el archivo `bootstrap.js` añadimos:

```js

import $ from "jquery";
window.jQuery = window.$ = $;

```

> Typee: en la Consola:

```console

npm install sass --save-dev

```

> Crear el archivo en `resources/scss/app.scss` y añadimos:

```scss

@import "/resources/css/app.css";

```

> Abrimos el archivo en `vite.config.js` y cambiamos:

```js

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});

```

>En las vistas añadimos:

```php

@vite(['resources/scss/app.scss', 'resources/js/app.js'])

```

[Subir](#top)

**`NOTA::` Ya podemos arrancar vite `npm run dev`.**

<a name="item2"></a>

## Instalación de Select2.

> Typee: en la Consola:

```console

npm install select2 --save-dev

```

> En el archivo `bootstrap.js` añadimos:

```js

import select2 from "select2";
select2();

```

> En el archivo `app.js` añadimos:

```js

import "/node_modules/select2/dist/js/select2.js";
$(function () {
    $(".select2").select2();
});

```

> En el archivo `app.scss` añadimos:

```scss

@import "/node_modules/select2/dist/css/select2.css";

```

>En las vistas añadimos:

```html

    <h5>Select html</h5>
    <select name="sltc" id="sltc">
        <option selected>Selecciona</option>
        <option value="html">Html</option>
        <option value="css">Css</option>
        <option value="js">JavaScript</option>
    </select>
    <h5>Select 2</h5>
    <select name="sltc" id="sltc" class="select2">
        <option selected>Selecciona</option>
        <option value="html">Html</option>
        <option value="css">Css</option>
        <option value="js">JavaScript</option>
    </select>

```

**`NOTA::` La clase `select2` es la que inicia el selector modificado.**

[Subir](#top)

<a name="item3"></a>

## Implementar Bootstrap 5.

> Typee: en la Consola:

```console

npm install bootstrap @popperjs/core

```

> En el archivo `app.scss` añadimos:

```scss

@import '~bootstrap/scss/bootstrap';

```

> En el archivo `app.js` añadimos:

```js

import * as bootstrap from 'bootstrap'

```

> Abrimos el archivo en `vite.config.js` y cambiamos:

```js

import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/scss/app.scss', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
    },
  },
})
```

>En las vistas añadimos:

```html

    <h5>Select Bootstrap 5</h5>
    <select class="form-select" aria-label="Default select example">
    <option selected>Selecciona</option>
    <option value="html">Html</option>
    <option value="css">Css</option>
    <option value="js">JavaScript</option>
    </select>

```

**`NOTA::` Ya tenemos implementado `Bootstrap 5`.**

[Subir](#top)

<a name="item4"></a>

## Implementar Tema de Bootstrap a Select2.

> Typee: en la Consola:

```console

npm install select2-bootstrap-5-theme

```

> En el archivo `app.scss` añadimos:

```scss

@import "/node_modules/select2-bootstrap-5-theme/src/include-all";

```

> En el archivo `app.js` cambiamos:

```js

$(function () {
    $(".select2").select2({
        theme: "bootstrap-5",
    });
});

```

**`NOTA::` Si a la hora de compilar salta un error `[plugin:vite:css] [sass] $color2: var(--bs-border-color) is not a color.` En el mismo archivo `app.scss` para solucionar este error añadimos `$s2bs5-border-color: $border-color;` antes de `@import "/node_modules/select2-bootstrap-5-theme/src/include-all";`.**


>Pues eso es todo espero que sirva. 👍

[Subir](#top)
