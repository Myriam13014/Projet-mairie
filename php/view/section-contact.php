<section>
        <h3>formulaire de contact</h3>

        <form form method="GET" action="php/controller/url-traitement.php">
    <label for="contact-nom"> Nom </label>
        <input type="text" placeholder="Entrez votre nom" name="nom" required id="contact-nom">
    
        <label for="contact-email"> E-mail </label>
        <input type="email" placeholder="Entrez votre email" name="email" required id="contact-email">
        <textarea name="contact-message" id="contact-message" placeholder="Entrez votre message" cols="80" rows="6" required> </textarea>
        <button type="submit"> Envoyer le message </button>
    </form>

    </section>