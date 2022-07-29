
    <ul class="list-group list-unstyled">
    <li class="list-item">
        <input type="hidden" class="form-control" name="id" id="id" value="">
    </li>
    <li class="list-item">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" value="" required>
    </li>
    <li class="list-item">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" value="" required>
    </li>
    <li class="list-item">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="" required>
    </li>
    <li class="list-item mt-2">
        <button type="button" id="updateDB" class="button-dark">Modifier la fiche client</button>
        <button type="button" id="cancel" class="button-dark">Annuler</button>
    </li>
    <div id="reponse" class="text-center"></div>
</ul>

