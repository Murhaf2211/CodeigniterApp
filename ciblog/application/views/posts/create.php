<h2><?= $title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open_multipart('posts/create'); ?> 
    <div class="form-group">
      <label  class="form-label mt-4">Title</label>
      <input type="text" class="form-control"  name="title" placeholder="Add Title">
    </div>   
    <div class="form-group">
      <label  class="form-label mt-4">Body</label>
      <textarea id="editor1" class="form-control" name="body" rows="3" placeholder="Add Body"></textarea>
    </div>
    <br>
    <div class="form-group">
      <label>Category</label>
      <select name="category_id" class="form-control">
        <?php foreach ($categories as $category): ?> 
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
      
    </div>
    <br>
    <div class="form-group">
      <label>Upload Image</label>
      <br>
      <input type="file" name="userfile" size="20">
    </div>
    <br>
    <button type="submit" class="btn btn-secondary">Submit</button>  
</form>