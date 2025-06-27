<?php include('../header.php')?>
<!-- ------------------------------ -->

<script>

// Clave de API gratuita (con límite de 10k req/día)
const API_KEY = 'TU_CLAVE';
fetch(`https://www.googleapis.com/youtube/v3/videos?id=VIDEO_ID&key=${API_KEY}&part=snippet`)
  .then(response => response.json())
  .then(data => console.log(data));

</script>

<!-- ------------------------------ -->
<?php include('../footer.php')?>