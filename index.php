<?php
  require_once __DIR__.'\layout\header.php';
?>
  <div class="card">
    <div class="card-header">
      Cálculo de Próximo Período
      <hr>
    </div>
    <div class="card-body">
      <form class="form" id="profile">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Nombre</label>
              <input name="user_name" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Fecha de último ciclo</label>
              <input type="date" name="last_cycle" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Categoría Reproductiva</label>
              <select class="form-control">
                <option value="regular">Regular</option>
                <option value="irregular">Irregular</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Estado de ánimo</label>
              <select class="form-control">
                <option value="happy">Feliz</option>
                <option value="sad">Triste</option>
                <option value="angry">Enojado</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Día Fuerte o Alto</label>
              <select class="form-control">
                <option value="first">Primero</option>
                <option value="second">Segundo</option>
                <option value="third">Tercero</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success">Calcular</button>
      </form>
    </div>
    <div class="card-footer"></div>
  </div>
</div>
<?php require_once __DIR__.'/layout/footer.php'; ?>