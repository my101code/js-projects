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
    <button onclick="descargarJSON()" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
      📥 Descargar JSON
    </button>

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

    // esta function es para convertir los valores que engresamos
    // devuelve booleano, numero o texto.
    // esta function sera llamada abajo
    function parseValue(value) {
  value = value.trim();

  if (value === "true") return true;
  if (value === "false") return false;
  if (value === "null") return null;
  if (!isNaN(value) && value !== "") return Number(value);

  if ((value.startsWith("{") && value.endsWith("}")) || 
      (value.startsWith("[") && value.endsWith("]"))) {
    try {
      return JSON.parse(value);
    } catch (error) {
      return value;
    }
  }

  return value;
}


   function mostrarBonito(resultado) {
  const contenedor = document.getElementById("resultado");
  contenedor.innerHTML = ""; // limpiar anterior

  // OBJETO → mostrar como tabla
  if (typeof resultado === "object" && resultado !== null && !Array.isArray(resultado)) {
    const tabla = document.createElement("table");
    tabla.className = "min-w-full border border-gray-300 bg-white";

    const thead = document.createElement("thead");
    thead.innerHTML = `
      <tr class="bg-gray-200">
        <th class="px-4 py-2 border">Clave</th>
        <th class="px-4 py-2 border">Valor</th>
      </tr>`;
    tabla.appendChild(thead);

    const tbody = document.createElement("tbody");
    for (const clave in resultado) {
      const fila = document.createElement("tr");
      fila.className = "hover:bg-gray-50";
      fila.innerHTML = `
        <td class="px-4 py-2 border font-semibold">${clave}</td>
        <td class="px-4 py-2 border">${JSON.stringify(resultado[clave])}</td>
      `;
      tbody.appendChild(fila);
    }

    tabla.appendChild(tbody);
    contenedor.appendChild(tabla);
    return;
  }

  // ARRAY → mostrar como lista
  if (Array.isArray(resultado)) {
    const ul = document.createElement("ul");
    ul.className = "list-disc pl-6 bg-white p-4 rounded shadow";
    resultado.forEach(item => {
      const li = document.createElement("li");
      li.textContent = typeof item === "object" ? JSON.stringify(item) : item;
      ul.appendChild(li);
    });
    contenedor.appendChild(ul);
    return;
  }

  // Otro tipo → texto simple
  const p = document.createElement("p");
  p.className = "p-4 bg-yellow-100 rounded shadow text-gray-800 font-mono";
  p.textContent = String(resultado);
  contenedor.appendChild(p);
}
      let resultadoGenerado = null; // Variable global para guardar resultado

document.getElementById("jsonForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const claves = document.getElementsByName("clave");
  const valores = document.getElementsByName("valor");

  const jsonResult = {};

  for (let i = 0; i < claves.length; i++) {
    const key = claves[i].value.trim();
    const value = parseValue(valores[i].value);
    jsonResult[key] = value;
  }

  resultadoGenerado = jsonResult; // guardar para descargar
  mostrarBonito(jsonResult);
});

function descargarJSON() {
  if (!resultadoGenerado) {
    alert("Primero genera el JSON.");
    return;
  }

  const jsonStr = JSON.stringify(resultadoGenerado, null, 2);
  const blob = new Blob([jsonStr], { type: "application/json" });
  const url = URL.createObjectURL(blob);

  const enlace = document.createElement("a");
  enlace.href = url;
  enlace.download = "datos.json";
  enlace.click();

  URL.revokeObjectURL(url);
}

  </script>
</body>
</html>
