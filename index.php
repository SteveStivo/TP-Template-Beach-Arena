<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Beach ARENA</title>
</head>

<body>
    
    <!---- All Container ---->
    <main>

        <!----- navbar ----->
        <header>
            <nav>
                <div>
                    <img class="logoBeach" src="./assets/logoBeach.png" alt="">
                </div>                
                <ul>
                    <li><a href="#">Discover</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">How it works</a></li>
                </ul>
                <button>Login</button>
            </nav>
        </header>

        <!------- card container ------->
        <div class="cardContainer">
            <div class="card">
                <h2>Make New Friends over</h2>
                <h1>Beach Football</h1>
                <p>Challenge your friends and play together a game of Beach Football at your nearest beach.</p>

                <!-- search beach php box -->
                <div class="inputBox">
                    <img class="imgMap" src="./assets/map_icon.png" alt="">
                    <form>
                        <select name="beachFootball" id="inputBeach" onchange="showBeach(this.value)">
                            <option value="">Select a Beach Arena</option>
                            <option value="1">Torredembarra, Spain</option>
                            <option value="2">Costa del Sol, El Salvador</option>
                            <option value="3">Nazaré, Portugal</option>
                            <option value="4">Figueira da Foz, Portugal</option>
                            <option value="5">Alajuela, Costa Rica</option>
                            <option value="6">Saly, Senegal</option>
                            <option value="7">Virginia Beach, USA</option>
                            <option value="8">Rio de Janeiro, Brazil</option>
                            <option value="9">Chisinau, Moldova</option>
                            <option value="10">Dubai, UAE</option>
                        </select>
                    </form>
                    <img class="imgGo" src="./assets/go_icon.png" alt="valider">
                </div>
            
            <!-- link area beach -->
            <span id="reponse"></span>
        </div>
        
        <p><strong>Popular Beach Arena</strong> Virginia, California, Texas</p>

        </div>
    </main>
    <img class="palmier" src="./assets/tree.png" alt="">

    <script src="./script.js"></script>
</body>
</html>