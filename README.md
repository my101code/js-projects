        Eventos del Ratón (Mouse Events)

🔹 onclick → Al hacer clic.
<button onclick="alert('¡Clic!')">Haz clic</button>

---

🔹 ondblclick → Al hacer doble clic.

<p ondblclick="this.style.color = 'red'">Haz doble clic aquí</p>
  ----------------------------------------------------------

🔹 onmouseover → Cuando el cursor entra en el elemento.

<div onmouseover="this.style.backgroundColor = 'yellow'">Pasa el ratón</div>
  ----------------------------------------------------------

🔹 onmouseout → Cuando el cursor sale del elemento.

<div 
  onmouseover="this.style.backgroundColor = 'lightblue'"
  onmouseout="this.style.backgroundColor = 'white'">
  Pasa y sal del div
</div>
  ----------------------------------------------------------

🔹 onmousedown / onmouseup → Al presionar/soltar el botón del ratón.
<button 
    onmousedown="this.innerHTML = 'Botón presionado'"
    onmouseup="this.innerHTML = 'Botón soltado'">
Presiona aquí
</button>

---

        Eventos del Teclado (Keyboard Events)

🔹 onkeydown → Al presionar una tecla.
<input onkeydown="console.log('Tecla presionada:', event.key)">

---

🔹 onkeyup → Al soltar una tecla.
<input onkeyup="console.log('Tecla liberada:', event.key)">

---

        Eventos de Formularios (Form Events)

🔹 onchange → Cuando el valor de un campo cambia.
<select onchange="alert('Seleccionaste: ' + this.value)">

  <option value="1">Opción 1</option>
  <option value="2">Opción 2</option>
</select>
  ----------------------------------------------------------

🔹 onsubmit → Al enviar un formulario.

<form onsubmit="alert('Formulario enviado'); return false">
  <input type="submit" value="Enviar">
</form>

🔹 onfocus → Cuando el campo recibe el foco.
<input onfocus="this.style.border = '2px solid green'" placeholder="Haz clic aquí">

---

🔹 oninput → Cuando el usuario escribe en un campo.
<input oninput="console.log('Texto actual:', this.value)">

---

        Eventos de la Ventana (Window Events)

🔹 onload → Cuando la página termina de cargar.

<body onload="alert('Página cargada')">
  ----------------------------------------------------------

🔹 onresize → Cuando se redimensiona la ventana.

<script>
  window.onresize = function() {
    console.log("Ventana redimensionada:", window.innerWidth, "x", window.innerHeight);
  };
</script>

---

🔹 onscroll → Al hacer scroll en la página.

<div style="height: 1000px" onscroll="console.log('Scroll detectado')">
  Haz scroll aquí...
</div>
  ----------------------------------------------------------

        Eventos de Drag & Drop (Arrastrar y Soltar)

🔹 ondragstart → Al comenzar a arrastrar un elemento.

<div draggable="true" ondragstart="console.log('Arrastrando...')">
  Arrástrame
</div>
  ----------------------------------------------------------

🔹 ondrop → Al soltar un elemento arrastrado.

<div 
  style="width: 200px; height: 100px; border: 1px solid black"
  ondragover="event.preventDefault()"
  ondrop="alert('Elemento soltado')">
  Suelta aquí
</div>
  ----------------------------------------------------------

        Eventos Multimedia (Media Events)

🔹 onplay → Cuando un video/audio inicia.
<video controls onplay="console.log('Reproduciendo')">

  <source src="video.mp4" type="video/mp4">
</video>
  ----------------------------------------------------------

🔹 onpause → Cuando se pausa.
<audio controls onpause="console.log('Audio pausado')">

  <source src="audio.mp3" type="audio/mpeg">
</audio>
