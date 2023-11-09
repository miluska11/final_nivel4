
<body>
    <!-- Tu formulario y otros contenidos van aquí -->
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol"><br><br>

        <label for="fechacreacion">Fecha de Creación:</label>
        <input type="text" id="fechacreacion" name="fechacreacion"><br><br>

        <label for="fechamodificacion">Fecha de Modificación:</label>
        <input type="text" id="fechamodificacion" name="fechamodificacion"><br><br>

        <label for="usuariocreacion">Usuario de Creación:</label>
        <input type="text" id="usuariocreacion" name="usuariocreacion"><br><br>

        <label for="usuariomodificacion">Usuario de Modificación:</label>
        <input type="text" id="usuariomodificacion" name="usuariomodificacion"><br><br>

        <button type="submit">Guardar</button>
    </form>
    <!-- Otros elementos HTML o código PHP de la vista -->
</body>
</html>
