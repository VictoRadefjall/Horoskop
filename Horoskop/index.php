<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Condiment" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Horoskop - Se & Lär</title>

<style>
    body{
        margin: 0;
        background: url('./Img/deep.jpg') no-repeat;
        /* background: linear-gradient(rgba(22, 2, 53, 0.822), rgba(27, 108, 155, 0.788)); */
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }

    .card {
        background: rgba(0, 0, 0, 0.349);
        height: 300px;
        width: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 6px;
        border-top: solid 12px #ffd100;
    }

    .butts{
        margin-top: 50px;
    }

    input {
        font-size: 1.7rem;        
        box-shadow: 6px 6px 3px 1px rgba(53, 53, 54, 0.2);
        color: rgb(236, 211, 219);
        background: none;
        border-radius: 100px;
        padding: .8rem;
        
    }
    button {
        padding: 1rem;
        margin: 10px;
        border-radius: 100px;
        border: solid white 3px;
        background: none;
        text-transform: uppercase;
        box-shadow:  6px 6px 3px 1px rgba(53, 54, 53, 0.2);
    }
    form {
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    label {
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
        color: rgb(247, 247, 247);
        font-weight: 700;
        font-size: 1.6rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }
    h1 {
        font-family:   'Condiment', cursive;
        font-size: 5rem;
        color: whitesmoke;
        margin: 0;
        letter-spacing: 6px;
    }
    .show-sign {
        display: flex;
        background: rgb(250, 167, 12, .30);
        border-radius: 6px;
    }
    .return-feedback{
        color: whitesmoke;
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    }
    .fas, .far, .fab {
        margin-right: 1rem;
    }
    #green {color: rgb(124, 241, 124);}
    #yellow {color: rgb(255, 255, 0);}
    #red {color: rgb(255, 0, 0);}
    #orange {color: rgb(250, 167, 12);}
    .test{
        border: solid 5px white;
        height: 50px;
        width: 80%;
        box-shadow:  6px 6px 3px 1px rgba(53, 54, 53, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
    }
    .testa {
        color: white;
        text-shadow: 1px 1px 4px rgba(53, 54, 53, 0.2);
        text-transform: uppercase;
    }

</style>
</head>

<body>
    

    <h1>HOROSKOP</h1>

    <section class="card">
        <div class="insert">
            <form name="formular">
                <label for="insert">Skriv in din födelsedata</label>
                <input type="date" name="insert" id="date">
            </form>
        </div>

        <div class="butts">
            <button type="submit" class="btn" onclick="getHoroscope()" id="orange"><i class="fab fa-get-pocket"></i>Hämta</button>
            <button type="submit" class="btn" onclick="addHoroscope()" id="green"> <i class="far fa-save"></i>Spara</button>
            <button type="submit" class="btn" onclick="updateHoroscope()" id="yellow"><i class="fas fa-sync"></i>Uppdatera</button>
            <button type="submit" class="btn" onclick="deleteHoroscope()" id="red"><i class="fas fa-backspace"></i>Rensa</button>
        </div>
    </section>

    <div class="show-sign">
            <h2 class="return-feedback"></h2>
    </div>
    
</body>
</html>
<script src="main.js"></script>