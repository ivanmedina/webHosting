<?php 
    require_once 'oferta.entidad.php';
    require_once 'oferta.model.php';

    // Logica
    $alm = new Oferta();
    $model = new OfertaModel();
?>
<link rel="stylesheet" href="estilotabla.css">
 <body>   
    <center>
<h1>WEBHOSTING </h1>
<p>Ficha tecnica.</p>

<br>
<table >
    

    <form action="../bs-slider/index.php" method="post" class="pure-form pure-form-stacked" style="margin-bottom:50px;" bacground="red">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:1000px;" background="red">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Precio Mensual</th>
                            <td><input type="text" name="precio" value="<?php echo $alm->__GET('precio'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Espacio en Disco</th>
                            <td><input type="text" name="espacio" value="<?php echo $alm->__GET('espacio'); ?>" style="width:100%;" required/></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Transferencia Mensual</th>
                            <td><input type="text" name="transferencia" value="<?php echo $alm->__GET('transferencia'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Sitios a hospedar</th>
                            <td><input type="text" name="sitio" value="<?php echo $alm->__GET('sitio'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Reg. de Dominio Incluido</th>
                            <td><input type="text" name="registro" value="<?php echo $alm->__GET('registro'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Cuentas de Correo</th>
                            <td><input type="text" name="cuentas" value="<?php echo $alm->__GET('cuentas'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Bases de Datos</th>
                            <td><input type="text" name="bases" value="<?php echo $alm->__GET('bases'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Subdominios</th>
                            <td><input type="text" name="subdominios" value="<?php echo $alm->__GET('subdominios'); ?>" style="width:100%;" required/></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Garantía de Disponibilidad</th>
                            <td><input type="text" name="garantia" value="<?php echo $alm->__GET('garantia'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Panel de Control</th>
                            <td><input type="text" name="panel" value="<?php echo $alm->__GET('panel'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Tecnologia</th>
                            <td><input type="text" name="tecnologia" value="<?php echo $alm->__GET('tecnologia'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Soporte</th>
                            <td><input type="text" name="soporte" value="<?php echo $alm->__GET('soporte'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha de Vencimiento</th>
                            <td><input type="text" name="vencimiento" value="<?php echo $alm->__GET('vencimiento'); ?>" style="width:100%;" required /></td>
                        </tr>

        
          <tr><th style="text-align:left;">Nombre</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('nombre'); ?></td>
            <?php endforeach; ?> </tr>
          <tr><th style="text-align:left;">Precio Mensual</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('precio'); ?></td>
            <?php endforeach; ?> </tr>
          <tr><th style="text-align:left;">Espacio en Disco</th>
            <?php foreach($model->Listar() as $r): ?> 
            <td><?php echo $r->__GET('espacio'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Transferencia Mensual</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('transferencia'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Sitios a Hospedar</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('sitio'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">1 Registro de Dominio Incluido</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('registro'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Cuentas de Correo</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('cuentas'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Bases de Datos</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('bases'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Subdominios</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('subdominios'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Garant&iacute;a de Disponibilidad</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('garantia'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Panel de Control</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('panel'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Tecnolog&iacute;a</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('tecnologia'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Soporte</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('soporte'); ?></td>
            <?php endforeach; ?></tr>
          <tr><th style="text-align:left;">Fecha Vencimiento</th>
            <?php foreach($model->Listar() as $r): ?>
            <td><?php echo $r->__GET('vencimiento'); ?></td>
            <?php endforeach; ?></tr>

        
    

</table>   