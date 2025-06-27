<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

// Suponiendo que tenemos un archivo "empleados.json" en el servidor:
fetch('empleados.json')
  .then(response => response.json()) // Convierte la respuesta a JSON
  .then(data => {
    console.log(data); // Objeto JavaScript con los datos
    // Ejemplo: Mostrar datos en el html
    // document.getElementById("nombre").textContent = data.nombre;

    // llanada a toda la fila
    console.log(data.employees[1]);

    // llamada a un componente de una fila
    console.log(data.employees[1]["firstName"]);
  })
  .catch(error => console.error("Error al cargar el JSON:", error));

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>