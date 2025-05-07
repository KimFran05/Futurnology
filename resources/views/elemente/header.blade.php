<header>
    <img src={{ URL('imagini/logo.png')}}> 
    <div class="links">
        <a href="/">Acasă</a>
        <a href="/meniu">Meniu</a>
        <a href="/ghid">Ghid</a>
        <a href="/rezervari">Rezervări</a>
    </div>
</header>
 
<style>
    header {
        background-image: linear-gradient(to right, #04236a, #98b7f0);
        padding: 10px 20px;
        position: sticky;
        top: 0;
        color: white;
        text-align: center;
        font-size: 24px;
        display: flex;
        gap: 200px;
        border-bottom: 1px solid white;
    }

    header {
        justify-content: space-between;
        align-items: center;
    }

    header img {
        padding-left: 30px;
        width: 150px;
    }

    header .links {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding-right: 24%; 
        gap: 10px;
    }

    header .links a {
        color: white;
        text-decoration: none;
        padding: 10px;
        font-size: 20px;
        text-align: center;
        text-shadow: 0 0 5px #04236a;
    }
</style>