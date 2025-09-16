document.addEventListener("DOMContentLoaded", () => {
    const fechaExamen = new Date("2026-04-05T09:00:00"); // Cambia a tu fecha
  
    async function obtenerHoraActual() {
      try {
        const respuesta = await fetch("https://worldtimeapi.org/api/timezone/America/Lima");
        const data = await respuesta.json();
        return new Date(data.datetime);
      } catch (error) {
        console.error("Error al obtener la hora:", error);
        return new Date(); // Como respaldo usa la hora local
      }
    }
  
    function actualizarContador(tiempoActual) {
      const tiempoRestante = fechaExamen - tiempoActual;
  
      if (tiempoRestante <= 0) {
        document.getElementById("contador").innerHTML = "¡El examen ha comenzado!";
        return;
      }
  
      const dias = Math.floor(tiempoRestante / (1000 * 60 * 60 * 24));
      const horas = Math.floor((tiempoRestante / (1000 * 60 * 60)) % 24);
      const minutos = Math.floor((tiempoRestante / (1000 * 60)) % 60);
      const segundos = Math.floor((tiempoRestante / 1000) % 60);
  
      document.getElementById("dias").textContent = String(dias).padStart(2, '0');
      document.getElementById("horas").textContent = String(horas).padStart(2, '0');
      document.getElementById("minutos").textContent = String(minutos).padStart(2, '0');
      document.getElementById("segundos").textContent = String(segundos).padStart(2, '0');
    }
  
    async function iniciarContador() {
      let horaActual = await obtenerHoraActual();
      actualizarContador(horaActual);
  
      setInterval(() => {
        horaActual = new Date(horaActual.getTime() + 1000);
        actualizarContador(horaActual);
      }, 1000);
    }
  
    iniciarContador();
        /* Pero sabe' que no es bueno
        Bueno que yo te vuelva a llamar
        Bebé, pa' ti estoy soltero y quiero
        Repetirlo una vez má'
        Y por eso te digo "Rompe el suelo
        Dale, ponte loquita"
        Baby, tú ere' mi favorita
        Si no quiere', ¿por qué tú me sigue' texteando
        Y yo recordándote?
        Baby, dime, ¿cuál es tu plan?
        Vente aquí conmigo aunque sé que está mal
        Rompemo' nuestro pacto, pero me da igual
        Nos comemo', reseteamo', arreglamo'
        Y aunque sé que no es bueno, no freno
        Fue más la calentura que la culpa
        Así es que lo hacemo' y prendemo'
        Despué' pedimo' disculpa' */
  });
  