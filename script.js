function mostrarTrailer(videoId) {
    const modal = document.getElementById("modal");
    const iframe = document.getElementById("trailerFrame");
    iframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
    modal.style.display = "block";
  }
  
  function cerrarModal() {
    const modal = document.getElementById("modal");
    const iframe = document.getElementById("trailerFrame");
    modal.style.display = "none";
    iframe.src = ""; // Detener el video
  }
  