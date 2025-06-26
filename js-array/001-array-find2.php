<?php include('../header.php')?>
<!-- ------------------------------ -->
<h2>Consulta console.log</h2>
<a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/find#ejemplos">Array/find#ejemplos</a>

<script>

const inventario = [
  { nombre: "manzanas", cantidad: 2 },
  { nombre: "bananas", cantidad: 0 },
  { nombre: "cerezas", cantidad: 5 },
];

const resultado = inventario.find((fruta) => fruta.nombre === "cerezas");

console.log(resultado); // { nombre: 'cerezas', cantidad: 5 }


</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>