@extends('elemente.layout')
@section('titlu', 'Meniu')
@section('continut')
    <h1>Meniu</h1>
    <div class="meniu">
        <div class="meniu_container">
            <h2>Preparate Tradiționale</h2>
            <p>
                Ciorbă de fasole cu afumătură<br>  
                Ciorbă de pui<br>  
                Ciorbă de burtă<br>  
                Ceafă de porc la grătar<br>  
                Cotlet de porc la grătar<br>  
                Frigărui românești<br>  
                Sarmale românești<br>  
                Tochitură moldovenească<br>  
                File de porc pane<br>  
                Păstrăv la grătar<br>  
                Mușchi de vită domnesc<br>  
                Salată de varză<br>  
                Pastramă de oaie
            </p>
        </div>
       <div class="coloana">
            <div class="meniu_container">
                <h2>Băuturi</h2>
                <p>
                    Apă Plată/Minerală<br> 
                    Limonadă<br>
                    Fresh de portocale<br>
                    Pepsi, Mirinda, Mountain<br>
                    Dew, 7UP
                </p>
            </div>
            <div class="meniu_container" style="margin-top: 20px;">
                <h2>Deserturi</h2>
                <p>
                    Electrocter<br>
                    Tiramisonic<br>
                    Intercastella Cake<br>
                    Galactic Ice Cream
                </p>
            </div>
            <div class="meniu_container" style="margin-top: 20px;">
                <p>
                    Meniu copii - Şniţel de pui<br> 
                    cu cartofi prajiți, suc şi jucărie
                </p>
            </div>
       </div>
        <div class="meniu_container">
            <h2>Preparate</h2>
            <p>
                Cyberburger<br>
                Spaghetti-fi<br>
                High-tech bruschete cu roşii<br>
                şi busuioc<br>
                Gizpacho<br>
                Techymole<br>
                Dystopian lasagna<br>
                Electricarbonara<br>
                Hyperpopaella<br>
                Cosmic strips<br>
                Funky ratatouille<br>
                Mechaka<br>
                Intergalacticurry
            </p>
        </div>
    </div>    
@endsection

<style>
    h1 {
        margin: 0px;
        padding-top: 30px;
        text-align: center;
        font-size: 40px;
    }

    .meniu {
        display: flex;
        flex-direction: row;
        gap: 70px;
        padding: 30px 0px;
        justify-content: center;
        padding-bottom: 70px;
    }

    .meniu_container {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 0px 30px;
        border-left: 1px solid white;
        border-bottom: 1px solid white; 
    }

    .coloana {
        display: flex;
        flex-direction: column;
    }

    h2 {
        text-shadow: 0 0 5px #04236a;
    }

    p {
        font-size: 20px;
        text-align: justify;
        line-height: 1.5;
        text-shadow: 0 0 10px #04236a;
    }
</style>