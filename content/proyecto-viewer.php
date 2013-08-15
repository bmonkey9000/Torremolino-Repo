<section id="content">

    <section id="project-img">
        <img src="{PATH_IMG}img-proy1.png"/>
    </section>

    <section id="project-info">
        <div id="img-navigator">
            <a class="prev">Anterior</a>
            <a class="next">Siguiente</a>
        </div>

        <aside class="left">
            <h2>Categoría:</h2>
            <h2>_</h2>
            <ul>
                <li>{PROJECT.CATEGORY}</li>
            </ul>
        </aside>

        <div class="center">
            <h1>{PROJECT.TITLE}</h1>
            <p>{PROJECT.CONTENT}</p>

            <h4><span>Ubicación: </span>{PROJECT.LOCATION}</h4>
            <h4><span>Año de Ejecución: </span>{PROJECT.YEAR}</h4>
            <h4><span>Arquitecto: </span>{PROJECT.ARCHITECT}</h4>

            <div class="facebook-container"></div>
        </div>

        <aside class="right">
            <a href="" class="llamenos"></a>
            <a href="" class="download">Brochure</a>
            <a href="" class="download">Planos</a>
        </aside>

    </section>

    <section id="project-location">
        <div id="googleMap" style="width:940px;height:270px;"></div>
    </section>

</section>

