<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1>Prueba Select</h1>
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
    <h5>Select Bootstrap 5</h5>
    <select class="form-select" aria-label="Default select example">
    <option selected>Selecciona</option>
    <option value="html">Html</option>
    <option value="css">Css</option>
    <option value="js">JavaScript</option>
    </select>
    <h5>Select2 con Bootstrap 5</h5>
    <select class="form-select select2" aria-label="Default select example">
    <option selected>Selecciona</option>
    <option value="html">Html</option>
    <option value="css">Css</option>
    <option value="js">JavaScript</option>
    </select>
</body>

</html>
