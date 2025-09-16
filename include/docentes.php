<style>
    .planadocente{
    background-color: white;
    width: 100%;

    }
    .planadocente h4{
        font-size: 2.3rem;
        padding: 1rem;
    }

    /* Contenedor principal */
    .docentes {
        padding: 20px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        flex-wrap: wrap;
    }

    .docentes h4 {
        display: flex;
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    /* Estilos para cada tarjeta */
    .docentes__card {
        width: 350px;
        max-width: 370px;
        height: 120px;
        display: flex;
        flex-grow: 1;
        align-items: center;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #005594;
        color: white;
        border-radius: 0.50rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        gap: 15px;
    }
    .docentes__card:hover {
        transform: translateY(-5px);
    }
    .docentes__card__img {
        flex-shrink: 0; /* Evita que la imagen se deforme */
        width: 100px; /* Ancho fijo */
        height: 100px; /* Alto fijo */
        border-radius: 50%; /* Hace la imagen circular */
        overflow: hidden; /* Oculta el contenido fuera del contenedor circular */
        border: 2px solid #007BFF; /* Borde azul */
    }

    /* Imagen dentro del contenedor */
    .docentes__card__img img {
        width: 100%; /* Asegura que la imagen ocupe todo el ancho del contenedor */
        height: 100%; /* Asegura que la imagen ocupe todo el alto del contenedor */
        object-fit: cover; /* Ajusta la imagen para que se recorte correctamente */
    }
    .docentes__card__text{
        width: 70%;
        line-height: 1.5;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.603);
    }
    .docentes__card__text h5{
        font-size: 16px;

    }
    .docentes__card__text p{
        font-size: 12px;

    }
</style>
<div class="planadocente">
    <h4 class="titulos">Plana Docente</h4>
    <div class="docentes">
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="../img/noticia1.jpeg" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Lic. Edgard Montes Sheperd.</h5>
                <p>Coordinador</p>
                <p>jefatura_dpw@institutocajas.info</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="../img/moledos2dpw.png" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Vilma Gave Quintana</h5>
                <p>Docente</p>
                <p>vgaveq@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Vilma Calderón Cuyutupac</h5>
                <p>Docente</p>
                <p>vcalderonc@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Alejandra Fortunata Blanco</h5>
                <p>Docente</p>
                <p>ablancoh@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="img/docentes/luis.jpeg" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Ing. Luis Chávez</h5>
                <p>Docente</p>
                <p>lchavezl@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Juan Pablo López</h5>
                <p>Docente</p>
                <p>jplopezc@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Andy Padillo Casas</h5>
                <p>Docente</p>
                <p>apadilloc@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Ing. Raúl Fernández Bejarano</h5>
                <p>Docente</p>
                <p>rfernandezb@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Lic. Hércules Huamán Paucar</h5>
                <p>Docente</p>
                <p>hhuamanp@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Ing. Enrique Huaylinos</h5>
                <p>Docente</p>
                <p>ehuaylinosg@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Cpc. Ivan Poma</h5>
                <p>Docente</p>
                <p>ipoma@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="img/docentes/miguel.jpg" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Miguel Huamán</h5>
                <p>Docente</p>
                <p>mhuamanh@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="img/docentes/mesias.jpeg" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Prof. Mesias Perez Zanabria</h5>
                <p>Docente</p>
                <p>mperez@institutocajas.edu.pe</p>
            </div>
        </div>
        <div class="docentes__card">
            <div class="docentes__card__img">
                <img src="" alt="foto">
            </div>
            <div class="docentes__card__text">
                <h5>Dr. Justino Gen Montalván</h5>
                <p>Docente</p>
                <p>jgenm@institutocajas.edu.pe</p>
            </div>
        </div>


    </div>
</div>


