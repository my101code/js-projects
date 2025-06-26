<?php include('../header.php')?>
<!-- ------------------------------ -->
<h2>Consulta console.log</h2>
<a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/find#ejemplos">Array/find#ejemplos</a>

<script>
// Variables (let, const, var)
let name = 'Node.js';
const version = 20;

// Function declaration
function greet(user) {
  return `Hello, ${user}!`; // Template literal (ES6)
}

// Arrow function (ES6+)
const add = (a, b) => a + b;

console.log(greet('Developer')); // Hello, Developer!
console.log(add(5, 3)); // 8
</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>