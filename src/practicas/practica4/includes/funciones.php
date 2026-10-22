<?php
function generarTablaProductos(array $productos){ ?>
<table class="table table-striped table-hover">
    <thead>
     <tr>
       <th scope="col">#</th>
       <?php foreach($productos[0] as $clave => $valor):?>
        <td><?= $clave ?></td>
       <?php endforeach; ?>
     </tr>
   </thead>
   <tbody>
     <?php foreach($productos as $id => $producto): ?>
        <tr <?= ($producto["Disponibilidad"] ? "" : "class='table-danger'") ?>>
            <td><?= $id ?></td>
            <td><?= $producto["Nombre"] ?></td>
            <td><?= $producto["Descripcion"] ?></td>
            <td><?= $producto["Precio"] ?></td>
            <td class="table-<?= definirCategoria($producto["Categoria"]) ?>"><?= $producto["Categoria"] ?></td>
            <td><?= ($producto["Disponibilidad"] ? "En stock" : "Agotado") ?></td>
        </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
<?php }

function muestraInfoContacto(string $nombre, string $telefono, string $foto){ ?>
<div class="d-flex flex-column align-items-center text-center">
    <img class="w-50 img-fluid rounded-circle" src="<?= $foto ?>" alt="Foto de Perfil">
    <p><?= $nombre ?></p>
    <small><?= $telefono ?></small>
</div>

<?php }

function definirCategoria($categoria){
    switch ($categoria) {
        case 'Lacteos':
            return "primary";
        case 'Panaderia':
            return "warning";
        case 'Despensa':
            return "secondary";
        case 'Frutas':
            return "success";
        case 'Verduras':
            return "info";
        case 'Bebidas':
            return "dark";
        default:
            return "";
    }
}
?>