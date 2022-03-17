<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilosparaforms.css">
    <title>App GESEM Toldopamba</title>
  </head>
  <body>
    <div class="container">
      <div class="container-background">
        <div class="container-title">
          <h1>Toldopamba S.A.S</h1>
          <h2>Recepción Café Pergamino Seco </h2>
        </div>
      </div>
      <form class="" action="registrar.php" method="post">
        <div class="formulario">
          <div class="codigo-muestra">
            <label for="">Codigo de Muestra</label>
            <input type="text" name="" value="">
          </div>
          <h3>Datos Básicos de Recepción</h3>
          <div class="origen">
            <label>Origen:</label>
            <select class="" name="">
                <option value="1">SMA</option>
                <option value="2">YCA</option>
                <option value="3">SFE</option>
            </select>
            <label>Fecha de recepcion:</label>
            <input name="fecha-recepcion" type="date" id="fecha-recepcion" >
          </div>
          <h3>Datos de Productor</h3>
          <div class="productor">
            <label>Nombre del Productor:</label>
            <input type="text" name="" value="">
            <label>Cédula:</label>
            <input type="text" name="" value="">
            <label>Celular:</label>
            <input type="text" name="" value="">
            <label>Nombre Finca:</label>
            <input type="text" name="" value="">
          </div>
          <h3>Datos de muestra</h3>
          <div class="muestra">
            <label>Kilogramos Brutos:</label>
            <input type="text" name="" value="">
            <label>Kilogramos Netos:</label>
            <input type="text" name="" value="">
            <label>Tipo de empaque:</label>
            <select class="" name="">
              <option value="rayado">Rayado</option>
              <option value="fique">Fique</option>
              <option value="saca-plastica">Saca Plástica</option>
            </select>
            <h4>¿La muestra presenta Olor Característico?:</h4>
            <div>
              <input type="radio" id="si-olor" name="drone1" value="si-olor" checked>
              <label for="si-olor">Si</label>
            </div>
            <div>
                <input type="radio" id="no-olor" name="drone1" value="no-olor">
                <label for="no-olor">No</label>
            </div>
            </div>
            <h4>¿La muestra presenta Color Característico?:</h4>
            <div>
              <input type="radio" id="si-color" name="drone2" value="si-color" checked>
              <label for="si-olor">Si</label>
            </div>
            <div>
              <input type="radio" id="no-color" name="drone2" value="no-color">
              <label for="no-olor">No</label>
            </div>
        </div>

        </div>
      </form>
    </div>
  </body>
</html>
