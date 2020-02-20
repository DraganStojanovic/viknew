

<h2><?php echo $title; ?></h2>
<div class="table-responsive">
        <table class="table table-striped">
    <tr>
        <td><strong>Broj</strong></td>
        <td><strong>Radovi</strong></td>
        <td><strong>Datum</strong></td>
        
    </tr>
<?php foreach ($alert as $alert_item): ?>
        <tr>
        <td><?php echo $alert_item['id']; ?></td>
       
            <td><?php echo $alert_item['title']; ?></td>
            <td><?php echo $alert_item['text']; ?></td><hr>       
        </tr>
        
<?php endforeach; ?>
</table><hr>
<a class="btn btn-info" href="<?php echo site_url('alert/'.$alert_item['slug']); ?>">View</a> 
                <a class="btn btn-primary" href="<?php echo site_url('alert/edit/'.$alert_item['id']); ?>">Edit</a> 
                <a class="btn btn-danger float-right" float-right" href="<?php echo site_url('alert/delete/'.$alert_item['id']); ?>" onClick="return confirm('Да ли сте сигурни да желите да обришете Обавештење?')">Delete</a>
</div>
</div><br><hr>