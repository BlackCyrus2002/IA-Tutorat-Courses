{{-- Ligne 82 Bouton commencer --}}

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/mooc-afrique-elearning-850x478.jpg') }}" class="d-block w-100" alt="..."
                style="height: 700px">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/tutorat-en-ligne-professeur-d-afrique-masculine-casque-ayant-cours-de-web-avec-ordinateur-portable-un-enseignant-africain-mâle-207946628.webp') }}"
                class="d-block w-100" alt="..." style="height: 700px">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/b4ac33f6fe81d54ed9a9247555ae868c_XL.jpg') }}" class="d-block w-100"
                alt="..." style="height: 700px">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
