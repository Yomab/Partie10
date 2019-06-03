<!Doctype html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UFT-8" />
        <title>Exercice1Partie10</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Anton|Quicksand|Ramabhadra&display=swap" rel="stylesheet">


    </head>  
    <body>
        <h1>Merci de remplir le formulaire</h1>
        <form action="" method="get" class="form-example">
            <div class="form">
                <div>
                    <label for="Lastname">Nom :</label>
                    <input type="text" name="nom" id="name" required><br/>
                </div>
                <div>
                    <label for="Lastname">Prénom :</label>
                    <input type="text" name="nom" id="name" required><br/>
                </div>
                <div>
                    <label for="Birthday">Date de naissance :</label>
                    <input type="date" name="Birthday" id="birthday" required><br/> 
                </div> 
                <div>
                    <p>Lieu de naissance :</p>
                </div>
                <div>
                    <SELECT name="Lieu de naissance" size="1">
                        <OPTION>France
                        <OPTION>Autre
                    </SELECT>
                </div>
                <div>
                    <p>Nationalité :</p>
                </div>
                <div>
                    <SELECT name="Origin" size="1">
                        <OPTION>Française
                        <OPTION>autre
                    </SELECT>
                </div>
                <div>
                    <label for="Address">Adresse :</label>
                    <input type="Address" name="Address" id="Address" required><br/>
                </div>
                <div>    
                    <label for="email">Courriel :</label>
                    <input type="email" name="email" id="email" required><br/>
                </div>
                <div>
                    <label for="Phone">Téléphone :</label>
                    <input type="tel" name="phone" id="phone" required><br/>
                </div> 
                <div>
                    <p>Diplômes:</p>
                </div>
                <div>
                    <SELECT name="Diplômes" size="1">
                        <OPTION>Bacalauréat
                        <OPTION>Bacalauréat +2
                        <OPTION selected>Bacalauréat +3
                        <OPTION>Supérieur
                    </SELECT> 
                </div>  
                <div>
                    <label for="Number">ID pôle emploi  :</label>
                    <input type="text" name="pole" id="pole" required><br/>
                </div>
                <div>
                    <p>Nombre de badges :</p>
                </div>
                <div>
                    <SELECT name="Origin" size="1">
                        <OPTION>1
                        <OPTION>2
                        <OPTION>3
                        <OPTION>4
                        <OPTION>5
                        <OPTION>6
                        <OPTION>7
                        <OPTION>8 
                        <OPTION>9
                        <OPTION>10
                        <OPTION>Plus de 10     
                    </SELECT>
                </div>
                <div> 
                    <label for="url">Lien codacademy:</label>
                    <input type="url" name="url" id="url"
                           placeholder="https://example.com"
                           required>    
                </div>
                <div>
                    <label for="story">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <textarea id="story" name="story"
                              rows="5" cols="33">
                    </textarea>
                </div>
                <div>
                    <label for="story">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea id="story" name="story"
                              rows="5" cols="33">
                    </textarea>
                </div>
                <div>
                    <label for="story">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea id="story" name="story"
                              rows="5" cols="33">
                    </textarea>
                </div>
                <div>
                    <input type="submit" value="souscrire!" class="button">
                </div>
            </div>       
        </form>





    </body>
</html>