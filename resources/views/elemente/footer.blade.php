<footer>
    <div class="containerfooter">
        <div class="info">
            <img src={{ URL('imagini/logo.png')}}>
            <div class="links">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a> 
            </div>
            <div class="program">
                <div class="loc">
                    <i class="fa-solid fa-clock"></i>
                    Program Futurology:
                </div>
                Luni - Vineri: 10:00 - 22:00<br>
                Sâmbătă - Duminică: 12:00 - 21:00
                <div class="loc" style="padding-top: 10px;">
                    <i class="fa-solid fa-phone"></i>
                    Telefon/WhatsApp:
                </div>
                0722 333 444
            </div>
        </div>
        <div class="map">
            <div class="loc">
                <i class="fa-solid fa-location-dot"></i>
                Locația noastră:
            </div>
            Str. Sferei 1, Ploiești
            <div id="map"></div>
        </div>
    </div>
</footer>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&callback=initMap" async defer></script>

<script>
    function initMap() {
        var locatie = { lat: 44.940876, lng: 25.931227 };

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: locatie
        });

        var marker = new google.maps.Marker({
            position: locatie,
            map: map
        });
    }
</script>

<style>
    footer {
        background-image: linear-gradient(to right, #04236a, #98b7f0);
        color: white;
        padding: 30px 50px;
        border-top: 1px solid white;
    }

    .containerfooter {
        display: flex; 
        justify-content: space-between;
        gap: 100px;
    }
    
    .info {
        display: flex; 
        flex-direction: column;
        gap: 20px;
    }

    .containerfooter img{
        width: 280px;
    }

    footer a {
        color: white;
        text-decoration: none;
        padding-right: 10px;
        text-shadow: 0 0 5px #04236a;
    }

    footer .links {
        padding-left: 10px;
    }

    .program {
        font-size: 20px;
        padding-left: 10px;
        line-height: 1.5;
        text-shadow: 0 0 5px #04236a;
    }

    .loc {
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 10px;
        text-shadow: 0 0 5px #04236a;
    }

    .map {
        width: 30%;
        font-size: 20px;
        padding-top: 20px;
        line-height: 1.5;
        text-shadow: 0 0 5px #04236a;
    }

    #map {
        width: 100%;
        height: 250px;
        margin-top: 15px;
        border: 1px solid white;
        text-shadow: none;
    }

    i {
        font-size: 20px;
        text-shadow: 0 0 5px #04236a;
    }
</style>