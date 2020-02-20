<h2><?php echo $title; ?></h2>
<div class="table-responsive">
        <table class="table table-striped">
    <tr>
        <td><strong>Broj</strong></td>
        <td><strong>Radovi</strong></td>
        <td><strong>Datum</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($post as $post_item): ?>
        <tr>
        <td><?php echo $post_item['id']; ?> .</td>
       
            <td><?php echo $post_item['title']; ?> године</td>
            <td><?php echo $post_item['text']; ?></td>
            <td>
                <a class="btn btn-info" href="<?php echo site_url('post/'.$post_item['slug']); ?>">View</a> 
                <a class="btn btn-primary" href="<?php echo site_url('post/edit/'.$post_item['id']); ?>">Edit</a> 
                <a class="btn btn-danger float-right" href="<?php echo site_url('post/delete/'.$post_item['id']); ?>" onClick="return confirm('Да ли сте сигурни да желите да обришете Обавештење?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
</div>