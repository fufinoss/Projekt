<!DOCTYPE html>
<html lang="cs">
<head>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PF67DG8MGW"></script>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="podstranky.css">
    <link rel="stylesheet" href="../responzivita.css"> -->
 
    <link rel="shortcut icon" href="../Obrazky/logo.png" type="image/x-icon">
    <title>Kontakt</title>
</head>
<body>
    <script src="ga.js"></script>
 
    <header>
        <div class = "container">

            <nav>
                <ul>
                    <li><a href="index.html">Hlavní stránka</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Top 5</a>
                        <div class="dropdown-content">
                            <a href="PremierLg.html">Premier League</a>
                            <a href="LaLiga.html">La Liga</a>
                            <a href="Bundes.html">Bundesliga</a>
                            <a href="SerieA.html">Serie A</a>
                            <a href="Ligue1.html">Ligue One</a>
                        </div>
                    </li>
                    <li><a href="zapas.html">Zápasy</a></li>
                    <li><a href="prestupy.html">Přestupy</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>

                </ul>
            </nav>
        </div>
    </header>
 
   
    <!-- PHP FORMULÁŘ -->
 
    <?php
        $name = "";
        $email = "";
        $subject = "";
        $message = "";
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $name = $_POST["jmeno"];
            $email = $_POST["email"];
            $subject = $_POST["predmet"];
            $message = $_POST["text"];
 
            $errors = [];
 
            if($name === ""){
                 $errors[] = "Prosím vložte do formuláře vaše jméno";
            }
 
            if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
                $errors[] = "Prosím vložte do formuláře váš email";
           }
 
           if($subject === ""){
            $errors[] = "Prosím vložte do formuláře předmět";
           }
 
           if($message === ""){
            $errors[] = "Prosím vložte do formuláře zprávu";
           }
 
           if(empty($errors)){
            // odešli data
           }
        }
    ?>
 
 
    <main id="main4">
        <section class="errors">
            <?php if(!empty($errors)): ?>
                <ul>
                    <?php foreach($errors as $one_error): ?>
                        <li><?= $one_error; ?></li>
                    <?php endforeach; ?>
                </ul>
 
            <?php endif; ?>
        </section>
 
        <div class="container4">
            <form action="kontakt.php" method="POST">
                <input type="text" name="jmeno" placeholder="Jméno" value="<?= $name; ?>" class="normal-input_inputo" required> <br>
                <input type="email" name="email" placeholder="E-mail" value="<?= $email; ?>" class="normal-input_inputo" required> <br>
                <input type="text" name="predmet" placeholder="Předmět" value="<?= $subject; ?>" class="normal-input_inputo" required> <br>
                <input type="textarea" name="text" placeholder="Zpráva" value="<?= $message; ?>" class="email-input_inputo" required> <br>
                <input type="submit" placeholder="Odeslat" class="submit-input_inputo"> <br>
            </form>
            <footer>
                <span class="copy-foot"><a href="ochrana-udaju.html">Ochrana osobních údajů</a></span>
            </footer>
        </div>
    </main>
    
    <div class = "eminem">
        <div class = "clanek">
        <h2>Nejnovější články</h2>
        <ul>
            <p>Real Madrid porazil ve šlágru 32. kola La Ligy Barcelonu 3:2. Katalánci, kteří toužili snížit osmibodový náskok Bílého baletu v čele tabulky, se na půdě odvěkého rivala dostali hned dvakrát do vedení. Pro jejich záměr ovšem neměl pochopení domácí Lucas Vázquez. Zkušený Španěl nejprve v první půli vybojoval penaltu a v 73. minutě bleskově vyrovnal po trefě Fermína Lópeze. Těsně před koncem navíc přihrávkou z pravé strany našel Juda Bellinghama, jenž stejně jako v říjnu rozhodl ligové El Clásico gólem ze závěrečného nastavení.
            <p>Manchester United porazil v semifinále FA Cupu Coventry 4:3 po penaltách a za měsíc svede se svým městským rivalem bitvu o nejstarší klubovou trofej. Až do 71. minuty vládli utkání Rudí ďáblové, o čemž svědčilo tříbrankové vedení, na kterém se gólem a asistencí podílel Bruno Fernandes. Pak se však totožným způsobem zapsal do statistik klíčový muž ofenzivy outsidera Ellis Simms a v nastavení proměnil pokutový kop Haji Wright. Právě penalty se nakonec staly průběžně osmému celku Championship osudnými, jelikož v rozstřelu překopl bránu kapitán Ben Sheaf.
        </ul>
        </div>
    </div>
 
    
</body>
</html>