<!DOCTYPE html>
<html>
<body>

<h2>Looping Object Properties</h2>
<p id="demo"></p>

<script>
const myJSON = '{"name":"John", "age":30, "car":null}';
const myObj = JSON.parse(myJSON);

let text = "";
for (const x in myObj) { // Es un bucle for...in que recorre todas las claves (propiedades) del objeto myObj
  text += x + ", "; // >> x es el nombre de la propiedad: "name", "age", "car"
}
document.getElementById("demo").innerHTML = text;
// resultado: name, age, car,

</script>

</body>
</html>