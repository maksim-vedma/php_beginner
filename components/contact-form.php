<form action="/contact.php" method="post" class="my-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-floating mb-3">
        <input type="text" 
            class="form-control" 
            id="lastname" 
            name="lastname"
            placeholder="Dupont"
            required
>
        <label for="lastname">Nom de famille</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating mb-3">
        <input type="text" 
            class="form-control" 
            id="firstname" 
            name="firstname"
            required
            placeholder="Jean">
        <label for="firstname">Prénom</label>
      </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="email" 
              class="form-control" 
              id="email" 
              name="email"
              required
              placeholder="name@example.com">
          <label for="email">Votre adresse email</label>
        </div>
    </div>
    <div class="col-md-6">
      <select class="form-select mb-3" name="job" required>
        <option selected>Votre métier</option>
        <option value="developer">Développeur</option>
        <option value="designer">Designer</option>
        <option value="gamer">Gamer</option>
      </select>
    </div>
    <div class="col-md-12">
      <div class="form-floating">
        <textarea class="form-control"
          name="message"
          id="message"
          required
          style="height: 10rem;"
          placeholder="Votre message"></textarea>
        <label for="message">Votre message</label>
      </div>
      <div class="form-check form-switch my-3">
        <input class="form-check-input"
          type="checkbox" 
          role="switch"
          required
          id="conditions" 
          name="conditions">
        <label class="form-check-label" for="conditions">J'accepte toutes vos conditions</label>
      </div>
    </div>
  </div>
  <button class="btn btn-success" type="submit">Envoyer</button>
</form>
