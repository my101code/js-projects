<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

const jsonString = '{"nombre": "Luisa", "edad": 25}';
const objeto = JSON.parse(jsonString);
console.log(objeto.nombre); // "Luisa"

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>