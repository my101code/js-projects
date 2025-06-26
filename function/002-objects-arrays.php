<?php include('../header.php')?>
<!-- ------------------------------ -->
<h2>Consulta console.log</h2>
<a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/find#ejemplos">Array/find#ejemplos</a>

<script>
// Object
const user = {
  name: 'Alice',
  age: 25,
  greet() {
    console.log(`Hi, I'm ${this.name}`);
  }
};

// Array
const colors = ['red', 'green', 'blue'];

// Array methods (ES6+)
colors.forEach(color => console.log(color));
const lengths = colors.map(color => color.length);
</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>