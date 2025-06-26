<?php include('../header.php')?>
<!-- ------------------------------ -->
<h2>Consulta console.log</h2>
<a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/find#ejemplos">Array/find#ejemplos</a>

<script>

// 1. Callbacks (traditional)
function fetchData(callback) {
  setTimeout(() => {
    callback('Data received!');
  }, 1000);
}

// 2. Promises (ES6+)
const fetchDataPromise = () => {
  return new Promise((resolve) => {
    setTimeout(() => resolve('Promise resolved!'), 1000);
  });
};

// 3. Async/Await (ES8+)
async function getData() {
  const result = await fetchDataPromise();
  console.log(result);
}

getData(); // Call the async function

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>