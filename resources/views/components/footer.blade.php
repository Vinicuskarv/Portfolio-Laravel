<link href="{{ asset('css/components/footer.css') }}" rel="stylesheet">

<div class="footer-container">
    <div>
        <h3>PROGRAMADOR FULL STACK</h3>
    </div>
    <div class="container-icons">
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-square-github"></i>
        <i class="fa-brands fa-square-whatsapp"></i>
        <button class="c-button c-button--gooey">Contacto
            <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
            <defs>
                <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                <feBlend in="SourceGraphic" in2="goo"></feBlend>
                </filter>
            </defs>
        </svg>
    </div>
    <div class="container-copyright">
        <label>Copyright © <a href="#">Vinicius Carv</a></label>
    </div>
</div>
