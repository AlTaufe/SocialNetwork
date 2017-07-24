<?php $this->layout('layout', ['title' => 'Ajouter une activité']); // On hérite du fichier layout.php ?>

<?php $this->start('main_content'); ?>

  <form method="POST">
      <div class="form-group">
          <label for="content">Contenu de l'activité:</label>
          <input type="text" name="content" id="content" class="form-control">
      </div>
      <div class="form-group">
          <label for="type">Type:</label>
          <select class="form-control" name="type" id="type">
            <option value="text"></option>
            <option value="video"></option>
            <option value="photo"></option>
          </select>
      </div>
      <button class="btn btn-default">Ajouter l'activité</button>
  </form>

<?php $this->stop('main_content'); ?>
