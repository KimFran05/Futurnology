@extends('elemente.layout')
@section('titlu', 'Acasă')
@section('continut')
    <div class="home">
        <div class="slogan"><h1>“Clientul nostru, <br> stăpânul nostru!”</h1></div>
        <h2 style="padding-top: 20px">Cine suntem noi?</h2>
        <p>Suntem un restaurant futuristic cu digitalizare avansată.</p>
        <h2>În ce constă această digitalizare?</h2>
        <p>Digitalizarea restaurantului nostru constă în mese
        inteligente, unde clientul poate comanda direct de pe o
        tabletă atașată de aceasta. În acest fel,
        clientul poate consulta cu ușurință meniul restaurantului și
        este mai accesibil pentru persoanele cu dizabilități.
        Sistemul nostru de comenzi oferă o funcționalitate specială 
        numită "mod audio", care permite citirea meniului și a
        descrierilor preparatelor pentru persoanele cu deficiențe de
        vedere. Aceasta este o caracteristică inovatoare care
        îmbunătățește experiența clienților cu dizabilități și le oferă
        acces la informațiile necesare pentru a face o alegere
        adecvată în ceea ce privește preparatele disponibile.
        </p>
        <h2>Cum ne diferențiem noi față de celelalte restaurante?</h2>
        <p>Restaurantul nostru se diferențiază prin comanda
        directă, unde nu este nevoie de solicitarea unui chelner, se comandă direct de pe
        tableta digitală. Meniul poate fi tradus în peste 20 de limbi străine, fiind
        convenabil pentru turiști și persoanle străine.
        Pe tableta pot fi găsite jocuri pentru copii puse la dispoziție pentru ocuparea 
        timpului de așteptare. Plata se poate face contactless, direct pe tableta digitală. 
        Prin simpla apropiere a cardului de aceasta, nota este achitată. 
        Dacă se dorește plata în cash, se poate chema un chelner 
        prin apăsarea unui buton aflat pe tabletă.</p>
        <h2>Ce ne propunem pentru viitor?</h2>
        <p>Pentru viitor ne propunem să ajungem un restaurant 
        mult mai cunoscut, datorită stilului nostru unic și 
        prin preparatele delicioase pe care le oferim clienților.
        </p>
        <h2>De ce este o necesitate să includem persoanele cu dizabilități?</h2>
        <p>Pentru o diversitate cât mai mare de clienți este
        necesar un astfel de sistem în cazul în care
        personalul este unul necalificat (de exemplu când
        personalul nu cunoaște limbajul semnelor sau limbi străine).
        </p>
        <h2>Despre caracteristica nostră specială din meniu</h2>
        <p style="padding-bottom: 50px">Restaurantul nostru oferă un meniu diferit pentru
        persoanele cu alergii. În momentul plasării comenzii, există
        o secțiune specială unde se pot selecta alergii, iar 
        în funcție de acestea, sistemul nostru va crea 
        automat un meniul cu preparate sigure pentru consum, fără alergeni.
        </p>
    </div>
@endsection

<style>
    .home {
        padding: 0px 20%;
    }

    h1 {
        font-size: 75px;
        text-align: center;
        padding: 20% 0px;
    }

    .slogan {
        background-image: url('{{ asset('imagini/element.png') }}');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        height: 77%;
    }

    h2 {
        text-shadow: 0 0 5px #04236a;
        line-height: 1.5;
    }

    .home p {
        font-size: 20px;
        text-align: justify;
        padding-bottom: 30px;
        line-height: 1.5;
        text-shadow: 0 0 5px #04236a;
    }
</style>