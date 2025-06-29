<!DOCTYPE html>
<html>
<body>

<h2>Looping Object Properties</h2>
<p id="demo"></p>

<script>
const myJSON = '{"name":"John", "age":30, "car":null}';
const myObj = JSON.parse(myJSON);

let text = "";
for (const x in myObj) { //// Es un bucle for...in que recorre todas las claves (propiedades) del objeto myObj
  text += x + ": " + myObj[x] + "<br>"; // X: es lapropirdad  // myObj[x]: permite acceder al valor de la propiedad x
}
document.getElementById("demo").innerHTML = text;

</script>

</body>
</html>