<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>JSON en Tabla</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4 text-gray-700">Información del Usuario</h2>
    
    <table class="min-w-full border border-gray-300">
      <thead class="bg-gray-200">
        <tr>
          <th class="border px-4 py-2 text-left">Propiedad</th>
          <th class="border px-4 py-2 text-left">Valor</th>
        </tr>
      </thead>
      <tbody id="demo">
        <!-- Aquí se inserta el contenido desde JavaScript -->
      </tbody>
    </table>
  </div>

  <script>
    const myJSON = '{"name":"John", "age":30, "car":null}';
    const myObj = JSON.parse(myJSON);

    let text = "";
    for (const key in myObj) {
      text += `
        <tr class="hover:bg-gray-50">
          <td class="border px-4 py-2 font-medium">${key}</td>
          <td class="border px-4 py-2">${myObj[key] !== null ? myObj[key] : "<em class='text-gray-400'>null</em>"}</td>
        </tr>
      `;
    }

    document.getElementById("demo").innerHTML = text;
  </script>
</body>
</html>
