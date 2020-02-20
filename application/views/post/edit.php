<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('post/edit/'.$post_item['id']); ?>
    <table class="table">  
        <tr>
            <td><label for="title">Radovi</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $post_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $post_item['text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit post item" /></td>
        </tr>
    </table>
</form>