<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

// Suponiendo que tenemos un archivo "datos.json" en el servidor:
fetch('datos.json')
  .then(response => response.json()) // Convierte la respuesta a JSON
  .then(data => {
    console.log(data); // Objeto JavaScript con los datos
    // Ejemplo: Mostrar datos en el html
    // document.getElementById("nombre").textContent = data.nombre;

    // Ejemplo: Mostrar datos en la consola
    console.log(data.nombre);
  })
  .catch(error => console.error("Error al cargar el JSON:", error));

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>