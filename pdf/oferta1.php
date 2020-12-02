<?php 
    require_once 'oferta.entidad.php';
    require_once 'oferta.model.php';

    // Logica
    $alm = new Oferta();
    $model = new OfertaModel();
?>
    
<h1>Mi primer reporte</h1>
<p>Hemos creado nuestro reporte usando PHP y HTML :).</p>

<table>
    <thead>
        <tr>
            <th style="text-align:left;">Nombre</th>
            <th style="text-align:left;">Costo</th>
            <th style="text-align:left;">Descripcion</th>
            <th style="text-align:left;">vencimiento</th>
        </tr>
    </thead>
    <?php foreach($model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('nombre'); ?></td>
            <td><?php echo $r->__GET('costo'); ?></td>
            <td><?php echo $r->__GET('descripcion'); ?></td>
            <td><?php echo $r->__GET('vencimiento'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>   