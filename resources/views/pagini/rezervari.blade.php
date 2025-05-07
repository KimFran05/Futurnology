@extends('elemente.layout')
@section('titlu', 'Rezervări')
@section('continut')
    <h1>Rezervări</h1>
    <div class="rezervari">
        <form action="/rezervari" method="post">
            @csrf
            <div class="grup">
                <div>
                    Nume: <br>
                    <input type="text" name="nume">
                </div>
                <div>
                    Prenume: <br>
                    <input type="text" name="prenume">
                </div>
            </div>
            <div class="grup">
                <div>
                    Telefon: <br>
                    <input type="text" name="telefon">
                </div>
                <div>
                    Email: <br>
                    <input type="text" name="email">
                </div>
            </div>
            <div class="grup">
                <div>
                    Data: <br>
                    <input type="date" name="data" min="{{ date('Y-m-d', strtotime('+1 day')) }}" max="{{ date('Y-m-d', strtotime('+1 month')) }}">
                </div>
                <div>
                    Ora: <br>
                    <input type="time" name="ora" min="10:00" max="20:00">
                </div>
            </div>
            Număr persoane: <br>
            <input type="number" name="numar_persoane" min="1" max="6" style="margin-bottom: 10px"> <br>
            @error('nume')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('prenume')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('telefon')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('email')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('data')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('ora')
                <div class="eroare">{{ $message }}</div>
            @enderror
            @error('numar_persoane')
                <div class="eroare">{{ $message }}</div>
            @enderror
            <button>Trimite</button>
        </form>
    </div>
@endsection

<style>
    h1 {
        margin: 0px;
        padding-top: 30px;
        text-align: center;
        font-size: 40px;
    }

    .rezervari {
        padding-top: 30px;
        padding-left: 35%;
        width: 20%;
        font-size: 20px;
        text-shadow: 0 0 5px #04236a;
    }

    .grup {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 15px;
    }

    input {
        margin-top: 5px;
        width: 230px;
        height: 35px;
        font-size: 16px;
        color: #04236a;
    }

    .rezervari button {
        margin-top: 10px;
        height: 40px;
        width: 50%;
        font-size: 18px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        text-shadow: 0 0 5px #04236a;
        border-left: 1px solid #ffffff;
        border-bottom: 1px solid #ffffff;
        border-right: none;
        border-top: none;
        cursor: pointer;
        margin-bottom: 50px;
    }

    .eroare {
        color: red;
        font-size: 14px
    }
</style>