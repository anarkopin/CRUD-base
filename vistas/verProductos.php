<div class="panel panel-primary">
      <div class="panel-heading">Lista de personas</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#mAgregar">Agregar</button>
        </div>
      </div>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>id</th>
                  <th>Producto</th>
                  <th>Categoria</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th style="text-align:center;" >Eliminar</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $per): ?>
              <tr>
                  <td><?php echo $per["id"];?></td>
                  <td><?php echo $per["Producto"];?></td>
                  <td><?php echo $per["Categoría"];?></td>
                  <td><?php echo $per["Precio"];?></td>
                  <td><?php echo $per["Stock"];?></td>
                  <td style="text-align:center;"><a href="#" class="glyphicon glyphicon-remove" data-placement='top' data-toggle='tooltip' title='Eliminar'
                  <?php 
                    echo "onclick='mdlEliminar(\"".$per['id']."\")'"
                  ?>
                  ></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>

      </div>
</div>


<div id="mAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Producto</h4>
      </div>
      <div class="modal-body">

        <form action="?c=Producto&a=guardar" method="POST">
              <div class="form-group">
                  <label for="email">Producto:</label>
                  <input type="text" class="form-control" id="email" name="txtProducto">
              </div>
              <div class="form-group">
                  <label for="email">Categoria:</label>
                  <input type="text" class="form-control" id="email" name="txtCategoria">
              </div>
              <div class="form-group">
                  <label for="email">Precio:</label>
                  <input type="text" class="form-control" id="email" name="txtPrecio">
              </div>
              <div class="form-group">
                  <label for="text">Stock:</label>
                  <input type="int" class="form-control" id="email" name="txtStock">
              </div>
              <button type="submit" class="btn btn-default">Guardar</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="mEliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form action="?c=Producto&a=eliminar" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title" id="modTitulo"></h2>
      </div>
      <div class="modal-body">
        
      <input type="text" id="txtid" name="txtid" value="">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script>
  function mdlEliminar(vid) {
      $('#mEliminar').modal('show');
      $('#modTitulo').html('Eliminar Persona?');
      $('#txtid').val(vid);
    }

</script>