<style>
    .modulos{
    background-color: white;
    min-width: 200px;
    height: auto;
    }
    .modulos h3{
        padding: 2rem;
        font-size: 1.8rem;
        color: black;
        text-align: center;
    }
    .modulos__menu{
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 1rem 0;
        gap: 1rem;

    }
    .opciones{
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
    .opciones:hover{
        color: white;
        background-color: #0d6efd;
        
    }
    .opciones--select {
        background-color: #0d6efd;
        color: white;
    }
    /* aqui conmiesta la parte a completar de los modulos */

    .modulos__contenido{
        width: 96%;
        height: auto;
        background-color: #004274;
        margin: auto;
        margin-bottom: 1rem;
        border-radius: 0.25rem;

    }
    .modulos__contenido__contenedor{
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        height: auto;
    }
    .modulos__contenido__contenedor__referencia{
        width: 50%;
        margin: auto;
        padding: 2rem;
        flex-grow: 1;
        flex-basis: 300px;
    }
    .modulos__contenido__contenedor__referencia h4{
        font-size: 200%;
        color: #20b8ff;

    }
    .modulos__contenido__contenedor__referencia p{
        color: #dcf1ff;
        margin-top: 1rem;
    }
    .modulos__contenido__contenedor__referencia p strong{
        color: #20b8ff;
    }

    .modulos__contenido__contenedor__unidades{
        width: 50%;
        margin: auto;
        padding: 2rem;
        flex-grow: 1;
        flex-basis: 300px;
        
    }
    .modulos__contenido__contenedor__unidades__borde{
        border-style: groove;
        border-color: white;
        border-width: 2px;
        border-radius: 0.25rem;
        padding: 1.5rem;
        width: 100%;

    }
    .modulos__contenido__contenedor__unidades__borde h5{
        font-size: 160%;
        color: #20b8ff;

    }
    .modulos__contenido__contenedor__unidades__borde h6{
        font-size: 350%;
        color: #20b8ff;

    }
    .modulos__contenido__contenedor__unidades__borde ul{
        color: #dcf1ff;

    }
    .modulos__contenido__contenedor__unidades__borde hr{
        background-color: white;
        margin: 2rem 0rem 1.5rem 0rem;
        
    }
</style>
<div class="modulos">
    <h3 class="titulos">MÓDULOS PROFESIONALES</h3>
    <div class="modulos__menu">
        <button class="opciones" onclick="executeCode('./include/modulo1.php')">MÓDULO I</button>
        <button class="opciones" onclick="executeCode('./include/modulo2.php')">MÓDULO II</button>
        <button class="opciones" onclick="executeCode('./include/modulo3.php')">MÓDULO III</button>
    </div>
    <article class="modulos__contenido">
        <div class="modulos__contenido__contenedor">
            <div class="modulos__contenido__contenedor__referencia">
                <h4 class="titulos">DISEÑO WEB Y APLICACIONES MULTIMEDIA</h4>
                <p><strong>Horas Didácticas:</strong> 756 horas</p>
                <p><strong>Competecia:</strong> Diseñar la presentación, animación, organización y navegación de los contenidos y servicios web, de acuerdo con las demandas del negocio, buenas prácticas de diseño, técnicas de diseño web, usabilidad y experiencia del usuario objetivo.</p>
            </div>
            <div></div>
            <div class="modulos__contenido__contenedor__unidades">
                <div class="modulos__contenido__contenedor__unidades__borde">
                    <h5 class="titulos">Unidades Didácticas</h5>
                    <h6 class="titulos">01</h6>
                    <hr>
                    <ul>
                      <li>Diseño y Maquetación Web</li>
                      <li>Fundamentos de Diseño Gráfico</li>
                      <li>Introducción a la Programación</li>
                      <li>Animación Gráfica</li>
                      <li>Arquitectura de Entorno Web</li>
                      <li>Redes e Internet</li>
                     </ul>
                </div>
            </div>
        </div>
    </article>
</div>
