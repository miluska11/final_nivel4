<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Tu formulario y otros contenidos van aquí -->
    <form action="{{ route('roles.store') }}" method="POST" class="max-w-md mx-auto mt-6 p-6 bg-white rounded shadow-md">
    @csrf
    <div class="mb-4">
        <label class="block text-sm text-sm font-bold mb-2" for="rol">Rol:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rol" type="text" name="rol">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-bold mb-2" for="fechacreacion">Fecha de Creación:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fechacreacion" type="date" name="fechacreacion">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-bold mb-2" for="fechamodificacion">Fecha de Modificación:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fechamodificacion" type="date" name="fechamodificacion">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-bold mb-2" for="usuariocreacion">Usuario de Creación:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="usuariocreacion" type="text" name="usuariocreacion">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-bold mb-2" for="usuariomodificacion">Usuario de Modificación:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="usuariomodificacion" type="text" name="usuariomodificacion">
    </div>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="btn">
        Guardar
    </button>
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