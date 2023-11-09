<body>
    <!-- Tu formulario y otros contenidos van aquí -->
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol"><br><br>

        <label for="fechacreacion">Fecha de Creación:</label>
        <input type="date" id="fechacreacion" name="fechacreacion"><br><br>

        <label for="fechamodificacion">Fecha de Modificación:</label>
        <input type="date" id="fechamodificacion" name="fechamodificacion"><br><br>

        <label for="usuariocreacion">Usuario de Creación:</label>
        <input type="text" id="usuariocreacion" name="usuariocreacion"><br><br>

        <label for="usuariomodificacion">Usuario de Modificación:</label>
        <input type="text" id="usuariomodificacion" name="usuariomodificacion"><br><br>

        <button type="submit" id="btn">Guardar</button>
    </form>
    <!-- Otros elementos HTML o código PHP de la vista -->
    <script>
       const btnAlert = document.getElementById("btn");
const form = document.querySelector("form");

btnAlert.addEventListener("click", function(event) {
  event.preventDefault(); // Evita que se envíe automáticamente el formulario

  // Obtén los valores de los campos de entrada
  const rolValue = document.getElementById("rol").value;
  const fechacreacionValue = document.getElementById("fechacreacion").value;
  const fechamodificacionValue = document.getElementById("fechamodificacion").value;
  const usuariocreacionValue = document.getElementById("usuariocreacion").value;
  const usuariomodificacionValue = document.getElementById("usuariomodificacion").value;

  // Verifica si algún campo está vacío
  if (rolValue === "" || fechacreacionValue === "" || fechamodificacionValue === "" || usuariocreacionValue === "" || usuariomodificacionValue === "") {
    alert("Por favor, completa todos los campos antes de guardar");
  } else {
    // Si todos los campos están llenos, envía el formulario
    form.submit();
    alert("Datos guardados");
  }
});
    </script>

</body>

</html>