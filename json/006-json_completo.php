<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

// Datos JSON simulando respuesta de API
const respuestaAPI = `
{
  "status": "success",
  "data": {
    "users": [
      { "id": 1, "name": "John" },
      { "id": 2, "name": "Jane" }
    ]
  }
}
`;

// Convertir a objeto y acceder a datos
const datos = JSON.parse(respuestaAPI);
console.log(datos.data.users[0].name); // "John"    

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>