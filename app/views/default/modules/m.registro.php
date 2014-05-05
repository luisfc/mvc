<div class="t"><?php echo $titulo; ?></div>
<form action="index.php" method="post">
  <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
    <tr>
      <td>DNI</td>
      <td><input type="text" name="dni"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><input type="text" name="nombre"></td>
    </tr>
    <tr>
      <td>Ap. Paterno </td>
      <td><input type="text" name="apparterno"></td>
    </tr>
    <tr>
      <td>Ap. Materno  </td>
      <td><input type="text" name="apmaterno"></td>
    </tr>
    <tr>
      <td>Carrera</td>
      <td>
        <label>
          <select name="carrera">
            <option value="Arquitectura">Arquitectura</option>
            <option value="Enfermeria">Enfermeria</option>
            <option value="Ingenieria Quimica">Ingenieria Quimica</option>
            <option value="Odontologia">Odontologia</option>
            <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
            <option value="Gas y Petroleo">Gas y Petroleo</option>
            <option value="Administración de Empresas">Administración de Empresas</option>
            <option value="Diseño de Interiores">Diseño de Interiores</option>
            <option value="Ingenieria Civil">Ingenieria Civil</option>
            <option value="Ingenieria de Perros">Ingenieria de Alimentos</option>
          </select>
        </label>
      </td>
    </tr>
    <tr>
      <td colspan=2>
          <input type="submit" name="Submit" value="   Registrar   ">
          <input type="reset" value="   Limpiar   ">
      </td>
    </tr>
  </table>
</form>