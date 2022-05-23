<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    use \App\Http\Controllers\TemplateController;
    $url = TemplateController::getUrl();

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Noticia</title>
    <script src="<?=$url?>/javascript/jquery-3.6.0.js"></script>
    <!-- Importacion BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            padding-top: 25px;
        }
    </style>
</head>
<body>
    <form id="formularioADD" method="post" action="{{route('addNoticia')}}" dataclass="d-flex flex-column bd-highlight mb-3" style="width: 90%;" enctype="multipart/form-data" >
        <h1>Agregar Noticia</h1>


        <div class="mb-3">
            <label class="form-label">Nombre de noticia</label>
            <input type="text" class="form-control" id="nombreNoticia" name="nombreNoticia" placeholder="Nombre de noticia" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" id="categoria" name="categoria" required>
                <option value="" selected="selected">Seleccione</option>

                <?php
                    $categorias = TemplateController::getCategorias();
                    foreach ($categorias  as $listado){
                        echo "<option value='{$listado->id}'>{$listado->nombre}</option>";
                    }
                ?>
            </select>
        </div>



        <div class="form-floating" style="margin-bottom: 15px;">
            <textarea class="form-control" id="descripcionNoticia" name="descripcionNoticia" rows="10" cols="50" required></textarea>
            <label for="floatingTextarea">Descripción Noticia</label>
        </div>

        <div class="mb-3">
            <label class="form-label">Agregar Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/png, image/jpeg">
        </div>



        <button id="agregar"  class="btn btn-primary" type="submit" >Agregar Noticia</button>
    </form>

</body>
</html>
