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
    // funcion para crear campo a rellenar.
    function agregarCampo() {
      const contenedor = document.getElementById("camposContainer");
      const nuevoCampo = document.createElement("div"); // crear un nuevo elemeto DIV
      nuevoCampo.className = "flex space-x-2 mt-2"; // dar class a Div creado 
        // resultado: <div class="flex space-x-2 mt-2">

      nuevoCampo.innerHTML = `
        <input type="text" name="clave" placeholder="Propiedad" class="w-1/2 p-2 border rounded" required>
        <input type="text" name="valor" placeholder="Valor" class="w-1/2 p-2 border rounded" required>
      `;    // aqui metemos una parte html dentro de DIV creado
            // resultado (nuevoCampo):
            /*  <div class="flex space-x-2 mt-2">
                  <input type="text" name="clave" placeholder="Propiedad" class="w-1/2 p-2 border rounded" required="">
                  <input type="text" name="valor" placeholder="Valor" class="w-1/2 p-2 border rounded" required="">
                </div>
            */ 
      contenedor.appendChild(nuevoCampo); // asi haremos que (nuevoCampo) sea hijo de (contenedor) cuyo ID camposContainer.
    }

    // evento a pulsar el buton submit Generar JSON:
    document.getElementById("jsonForm").addEventListener("submit", function(e) {
      e.preventDefault(); //  Evita que el formulario se envíe de forma tradicional (es decir, que recargue la página).

      const claves = document.getElementsByName("clave"); // obtener valor cuyo "name" es clave.
      const valores = document.getElementsByName("valor"); // obtener valor cuyo "name" es clave.

      const jsonResult = {}; // Crea un objeto vacío donde se van a ir guardando los pares clave/valor.

      for (let i = 0; i < claves.length; i++) {
        const key = claves[i].value.trim(); // key toma el valor del input de propiedad (por ejemplo "nombre")
        const value = valores[i].value.trim(); // value toma el valor del input de valor (por ejemplo "Juan")
        jsonResult[key] = value; 
      }

      document.getElementById("resultado").textContent = JSON.stringify(jsonResult, null, 2);
      /*
        🔹 Convierte el objeto a texto JSON usando JSON.stringify.

        🔹 El null, 2 es para que el texto quede bien formateado y legible (indentado con 2 espacios).

        🔹 Luego muestra ese JSON dentro del elemento con id="resultado" (por ejemplo, en un <pre>).
      */
    });
  </script>
</body>
</html>
