<form action="/actions/auth.php" method="post" class="my-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-floating mb-3">
        <input type="text" 
            class="form-control" 
            id="username" 
            name="username"
            placeholder="Username"
            required>
        <label for="username">Nom d'utilisateur</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating mb-3">
        <input type="password" 
            class="form-control" 
            id="password" 
            name="password"
            required
            placeholder="1234">
        <label for="password">Mot de passe</label>
      </div>
    </div>
  <button class="btn btn-success" type="submit">Se connecter</button>
</form>

