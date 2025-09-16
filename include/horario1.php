<style>
  /* Ajuste de la sección de opciones */
  .horario__opciones {
      width: 100%;
      display: flex;
      justify-content: center;
      padding: 1rem 0;
      gap: 1rem;
  }

  .horario__opciones__bt {
      color: #0d6efd;
      background-color: white;
      text-align: center;
      text-decoration: none;
      border: 1px solid #0d6efd;
      border-radius: 0.25rem;
      transition: all 0.3s ease;
      font-size: 1rem;
      padding: 0.5rem 1rem;
      cursor: pointer;
      font-weight: bold;
  }

  .horario__opciones__bt:hover {
    color: #fff;
    background-color: #0d6efd;
  }

  /* Título principal */
  .modulos__titulo h2 {
    font-size: 2rem;
    text-align: center;
    padding: 2rem;

  }

  /* Estilos para subtítulos */
  .modulos__diurno__titulo h3 {
    font-size: 1.5rem;
    color: #333;
    text-align: center;
    margin-top: 20px;
  }

  /* Tabla de horarios */
  table.modulos__diurno__contenido__tabla {
    margin: auto;
    width: 100%;
    max-width: 990px;
    border-collapse: collapse;
    font-size: 0.9rem;
  }

  th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
    vertical-align: middle;
  }

  thead th {
    background-color: black;
    color: #fff;
    font-weight: bold;
  }

  .modulos__diurno__contenido__tabla__cuerpo td {
    height: 70px;
    font-size: 0.9rem;
  }

  /* Colores de fondo de los días */
  td.numero {
    background-color: #f3f4f6;
    font-weight: bold;
  }

  /* Ajustes de colores de materias */
  td[style*="background-color:#C2F2F2"] { /* Ejemplo de color personalizado */
    background-color: #b8e2e2 !important;
  }

  td[style*="background-color:#E9EFF2"] {
    background-color: #d0e7f2 !important;
  }

  td[style*="background-color:#367FBF"] {
    background-color: #367FBF !important;
    color: #fff;
  }

  td[style*="background-color:#1A80D9"] {
    background-color: #1A80D9 !important;
    color: #fff;
  }

  td[style*="background-color:#4adbcf"] {
    background-color: #4adbcf !important;
  }

  td[style*="background-color:#074073"] {
    background-color: #074073 !important;
    color: #fff;
  }

  /* Responsividad para dispositivos móviles */
  @media (max-width: 768px) {
    table.modulos__diurno__contenido__tabla {
      font-size: 0.8rem;
    }
    
    .horario__opciones__bt {
      width: 80px;
      padding: 8px;
      font-size: 0.8rem;
    }

    th, td {
      padding: 6px;
    }
  }
  /* Escala de la tabla en dispositivos móviles pequeños */
  @media (max-width: 480px) {
    .modulos__diurno__contenido__tabla {
      font-size: 0.7rem;
    }

    .horario__opciones__bt {
      width: 60px;
      padding: 6px;
      font-size: 0.7rem;
    }

    th, td {
      padding: 4px;
    }
  }

  /* Habilitar desplazamiento horizontal en móviles */
  .modulos__diurno__contenido {
    overflow-x: auto;
    /* Un poco de espacio extra para el scroll horizontal */
    padding-bottom: 10px;
  }

  /* Ajustes para hacer la tabla más compacta en pantallas pequeñas */
  @media (max-width: 480px) {
    .modulos__diurno__contenido__tabla {
      min-width: 600px; /* ancho mínimo para forzar scroll en móviles */
    }
  }
</style>
  <main class="modulos">
    <div class="modulos__titulo">
      <h2 class="titulos">HORARIO-2024</h2>
    </div>
    <div class="horario__opciones">
      <button class="horario__opciones__bt" onclick="executeCode('./include/horario1.php')">Horarios II</button>
      <button class="horario__opciones__bt" onclick="executeCode('./include/horario2.php')">Horarios IV</button>
      <button class="horario__opciones__bt" onclick="executeCode('./include/horario3.php')">Horarios VI</button>
    </div>
    <section class="modulos__diurno">
      <div class="modulos__diurno__titulo">
        <h3>Turno Diurno</h3>
      </div>
      <article class="modulos__diurno__contenido">
        <table class="modulos__diurno__contenido__tabla">
          <thead class="modulos__diurno__contenido__tabla__encabezado">
            <tr>
              <th>N°</th>
              <th>Hora</th>
              <th>Lunes</th>
              <th>Martes</th>
              <th>Miércoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
            </tr>
          </thead>
          <tbody class="modulos__diurno__contenido__tabla__cuerpo">
            <tr>
              <td class="numero">1</td>
              <td class="numero">08:15 - 09:00</td>
              <td rowspan="3" style="background-color: #C2F2F2 ">Cultura Fisica<br><b>Prof: A Tacay</b><br>Aula: 25</td>
              <td style="background-color: #E9EFF2" rowspan="2">Hoja de Calculo<br><b>Prof: A Padillo</b><br>Aula: 25</td>
              <td style="background-color: #E9EFF2" rowspan="3">Hoja de Calculo<br><b>Prof: A Padillo</b><br>Aula: 25</td>
              <td style="background-color:#367FBF" rowspan="4">Adm. Pagina Web<br><b>Prof: M Huaman</b><br>Aula: 25</td>
              <td style="background-color:#1A80D9" rowspan="4">Arquitectura Web<br><b>Prof: M Perez</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">2</td>
              <td class="numero">09:00 - 09:45</td>
            </tr>
            <tr>
              <td class="numero">3</td>
              <td class="numero">09:45 - 10:30</td>
              <td style="background-color:#367FBF" rowspan="2">Adm. Pagina Web<br><b>Prof: M Huaman</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">4</td>
              <td class="numero">10:30 - 11:15</td>
              <td style="background-color:#1A80D9" rowspan="3">Arquitectura Web<br><b>Prof: M Perez<br>Aula: 25</td>
              <td style="background-color:#4adbcf" rowspan="3">Animación Grafica<br>Prof: A Blanco<br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">5</td>
              <td class="numero">11:15 - 12:00</td>
              <td style="background-color:#074073" rowspan="2">Ingles<br><b>A Blanco</b><br>Aula: 26</td>
              <td style="background-color:#074073" rowspan="2">Ingles<br><b>A Blanco</b><br>Aula: 26</td>
              <td style="background-color:#4adbcf" rowspan="2">Animación Grafica<br><b> A Blanco</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">6</td>
              <td class="numero">12:00 - 12:45</td>
            </tr>
          </tbody>
        </table>
      </article>
    </section>
    <section class="modulos__diurno">
      <div class="modulos__diurno__titulo">
        <h3>Turno Vespertino</h3>
      </div>
      <article class="modulos__diurno__contenido">
        <table class="modulos__diurno__contenido__tabla">
          <thead class="modulos__diurno__contenido__tabla__encabezado">
            <tr>
              <th>N°</th>
              <th>Hora</th>
              <th>Lunes</th>
              <th>Martes</th>
              <th>Miércoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
            </tr>
          </thead>
          <tbody class="modulos__diurno__contenido__tabla__cuerpo">
            <tr>
              <td class="numero">1</td>
              <td class="numero">02:00 - 02:45</td>
              <td style="background-color:#E9EFF2" rowspan="3">Hoja de Calculo<br><b>Prof: A Padillo</b><br>Aula: 25</td>
              <td style="background-color:#074073" rowspan="2">Ingles<br><b>Prof: A. Blanco</b><br>Aula: 26</td>
              <td style="background-color:#074073" rowspan="2">Ingles<br><b>Prof: A. Blanco</b><br>Aula: 26</td>
              <td style="background-color:#4adbcf" rowspan="1">Animación Grafica<br><b>Prof: L. Chavez</b><br>Aula: 25</td>
              <td style="background-color:#E9EFF2" rowspan="2">Hoja de Calculo<br><b>Prof: A. Padillo</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">2</td>
              <td class="numero">02:45 - 03:30</td>
                <td style="background-color:#367FBF" rowspan="2">Adm. Pagina Web<br><b>Prof: M. Huaman</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">3</td>
              <td class="numero">03:30 - 04:15</td>
              <td style="background-color:#367FBF" rowspan="4">Adm. Pagina Web<br><b>Prof: M. Huaman</b><br>Aula: 25</td>
              <td style="background-color:#1A80D9" rowspan="4">Arquitectura Web<br><b>Prof: H. Huaman</b><br>Aula: 25</td>
              <td style="background-color:#4adbcf" rowspan="4">Animación Grafica<br><b>Prof: L. Chavez</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">4</td>
              <td class="numero">04:15 - 05:00</td>
              <td rowspan="3">Cultura Fisica<br>Prof: A Tacay<br>Aula: 25</td>
              <td style="background-color:#1A80D9" rowspan="3">Arquitectura Web<br><b>Prof: H. Huaman</b><br>Aula: 25</td>
            </tr>
            <tr>
              <td class="numero">5</td>
              <td class="numero">05:00 - 05:45</td>
              
            </tr>
            <tr>
              <td class="numero">6</td>
              <td class="numero">05:45 - 06:30</td>
            </tr>
          </tbody>
        </table>
      </article>
    </section>
  </main>