<?php
  require_once __DIR__.'\layout\header.php';
?>
  <div class="card">
    <div class="card-header">
      Entrada de Datos
      <hr>
    </div>
    <div class="card-body">
      <form class="form" id="profile">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Nombre</label>
              <input name="employ_name" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Apellido</label>
              <input name="employ_lastname" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Fecha de Nacimiento</label>
              <input type="date" name="employ_birthdate" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Sexo</label>
              <select class="form-control">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Dirección</label>
              <input name="employ_address" class="form-control" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>User</label>
              <input name="user_name" class="form-control" disabled />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Clave</label>
              <input name="pwd" type="password" class="form-control" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Email</label>
              <input name="user_name" autocomplete="off" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Tel.</label>
              <input name="pwd" type="password" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Cel.</label>
              <input name="pwd" type="password" class="form-control" />
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success">Mostrar Datos</button>
      </form>
    </div>
    <div class="card-footer"></div>
  </div>
</div>
<?php require_once __DIR__.'/layout/footer.php'; ?>