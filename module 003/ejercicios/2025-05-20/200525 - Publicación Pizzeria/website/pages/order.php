<!DOCTYPE html>
<html lang="es">
<?php
require_once("../templates/head.php")
?>
<body>
    <?php
    require_once("../templates/header.php")
    ?>
  <div class="order">
    <h2 class="order__title">¡Haz tu pedido ya!</h2>

    <form class="order__form">
      <fieldset class="order__section">
        <legend class="order__legend">La Pizza</legend>

        <div class="order__group">
          <label class="order__label">Ingredientes</label>
          <div class="order__ingredients">
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="queso"> Queso</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="pimiento"> Pimiento</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="cebolla"> Cebolla</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="tomate"> Tomate Extra</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="pollo"> Pollo</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="ternera"> Ternera</label>
            <label class="order__checkbox"><input type="checkbox" name="ingredientes" value="piña"> Piña</label>
          </div>
        </div>

        <div class="order__group">
          <label class="order__label">Tamaño</label>
          <div class="order__sizes">
            <label class="order__radio"><input type="radio" name="tamano" value="pequena"> Pequeña</label>
            <label class="order__radio"><input type="radio" name="tamano" value="mediana"> Mediana</label>
            <label class="order__radio"><input type="radio" name="tamano" value="grande"> Grande</label>
          </div>
        </div>
      </fieldset>

      <fieldset class="order__section">
        <legend class="order__legend">Datos de Entrega</legend>

        <div class="order__group">
          <label class="order__label">Nombre:</label>
          <input type="text" class="order__input" name="nombre">
        </div>
        <div class="order__group">
          <label class="order__label">Dirección:</label>
          <input type="text" class="order__input" name="direccion">
        </div>
        <div class="order__group">
          <label class="order__label">Teléfono:</label>
          <input type="text" class="order__input" name="telefono">
        </div>
        <div class="order__group">
          <label class="order__label">Instrucciones especiales:</label>
          <textarea class="order__textarea" name="instrucciones" rows="4"></textarea>
        </div>
      </fieldset>

      <fieldset class="order__section">
        <legend class="order__legend">Confirmación de Pedido y Pago</legend>
        <div class="order__group">
          <label class="order__label">Método de Pago:</label>
          <select class="order__select" name="pago">
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="transferencia">Transferencia</option>
          </select>
        </div>
      </fieldset>

      <div class="order__submit">
        <button type="submit" class="order__button">Realizar Pedido</button>
      </div>
    </form>
  </div>
  <?php
    require_once("../templates/footer.php")
    ?>
</body>
</html>
