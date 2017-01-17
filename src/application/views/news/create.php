<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

  <div>
    <label for='title'>Title</label>
    <input type='text' name='title'>
  </div>

  <div>
    <label for='body'>Body</label>
    <textarea name='body'></textarea>
  </div>

  <button type='submit' name='submit'>
    Create news item
  </button>

</form>
