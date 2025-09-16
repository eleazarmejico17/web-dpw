<style>
    /* Estilos generales */
    .students {
        padding: 20px;
        width: 100%;
    }

    .students h4 {
        font-size: 2.2rem;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .students h5 {
        font-size: 24px;
        color: #444;
        margin: 30px 0 15px;
    }

    /* Contenedor de tarjetas */
    .delegates__container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;

    }

    /* Tarjetas individuales */
    .delegates__container__card {
        flex-grow: 1;
        width: 300px;
        height: 200px;
        max-width: 300px;
        min-width: 300px;
        background-color: #004274;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding: 15px;
        transition: transform 0.3s ease;
        margin: auto;
        
    }

    .delegates__container__card:hover {
        transform: translateY(-5px);
    }

    /* Imagen del delegado */
    .delegates__container__card__img img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        border: 3px solid #eee;
    }

    /* Texto dentro de la tarjeta */
    .delegates__container__card__text h6 {
        font-size: 18px;
        color: white;
        margin: 0;
    }

    .delegates__container__card__text p {
        font-size: 14px;
        color: #fff;
        margin: 5px 0 0;
    }

</style>
<div class="students">
    <h4 class="titulos">Delegados</h4>
    <div class="delegates">
        <h5 class="titulos">I Semestre</h5>
        <div class="delegates__container">  
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="img/delegados/" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6></h6>
                    <p>Diurno</p>
                </div>
            </div>
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6>Mariela chancos huaman</h6>
                    <p>Vespertino</p>
                </div>
            </div>
        </div> 
        <h5 class="titulos">III Semestre</h5>
        <div class="delegates__container">
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="img/delegados/jose.jpg" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6>Palomino Barba Jose Manue</h6>
                    <p>Diurno</p>
                </div>
            </div>
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6>Lozano Caso Annette Stefany</h6>
                    <p>Vespertino</p>
                </div>
            </div>
        </div> 
        <h5 class="titulos">V Semestre</h5>
        <div class="delegates__container"> 
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="img/delegados/eleazar.jpg" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6>Mejico de la Cruz Eleazar Natanael</h6>
                    <p>Diurno</p>
                </div>
            </div>
            <div class="delegates__container__card">
                <div class="delegates__container__card__img">
                    <img src="" alt="">
                </div>
                <div class="delegates__container__card__text">
                    <h6>Reynoso Jauregui Gerardo Kevin</h6>
                    <p>Vespertino</p>
                </div>
            </div>
        </div>
    </div>
</div>
