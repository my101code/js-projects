<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario JSON</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-green-700">Generador de JSON</h2>

    <form id="jsonForm" class="space-y-4">
      <!-- Aquí se agregan los campos dinámicamente -->
      <div id="camposContainer">
        <div class="flex space-x-2">
          <input type="text" name="clave" placeholder="Propiedad" class="w-1/2 p-2 border rounded" required>
          <input type="text" name="valor" placeholder="Valor" class="w-1/2 p-2 border rounded" required>
        </div>
      </div>

      <button type="button" onclick="agregarCampo()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Añadir otro campo
      </button>

      <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
        Generar JSON
      </button>
    </form>

    <h3 class="mt-6 text-lg font-semibold">Resultado JSON:</h3>
    <pre id="resultado" class="bg-gray-200 p-4 rounded mt-2 overflow-x-auto text-sm"></pre>
  </div>

  <script>
    function agregarCampo() {
      const contenedor = document.getElementById("camposContainer");
      const nuevoCampo = document.createElement("div");
      nuevoCampo.className = "flex space-x-2 mt-2";

      nuevoCampo.innerHTML = `
        <input type="text" name="clave" placeholder="Propiedad" class="w-1/2 p-2 border rounded" required>
        <input type="text" name="valor" placeholder="Valor" class="w-1/2 p-2 border rounded" required>
      `;
      contenedor.appendChild(nuevoCampo);
    }

    document.getElementById("jsonForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const claves = document.getElementsByName("clave");
      const valores = document.getElementsByName("valor");

      const jsonResult = {};

      for (let i = 0; i < claves.length; i++) {
        const key = claves[i].value.trim();
        const value = valores[i].value.trim();
        jsonResult[key] = value;
      }

      document.getElementById("resultado").textContent = JSON.stringify(jsonResult, null, 2);
    });
  </script>
</body>
</html>
