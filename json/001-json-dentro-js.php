<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

// JSON de ejemplo (simulando una respuesta de API o un archivo .json)
const datosJSON = `
  {
    "nombre": "Ana",
    "edad": 28,
    "hobbies": ["leer", "programar", "viajar"],
    "contacto": {
      "email": "ana@ejemplo.com",
      "telefono": "123456789"
    }
  }
`;

// Convertir el JSON string a un objeto JavaScript
const usuario = JSON.parse(datosJSON);

// Acceder a los datos
console.log(usuario.nombre); // "Ana"
console.log(usuario.hobbies[1]); // "programar"
console.log(usuario.contacto.email); // "ana@ejemplo.com"

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>