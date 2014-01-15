<?php if ($this->tools_model->set_contact_widget() == 1 ) : ?>
<div class="thumbnail">
    <?php foreach ($get_shop_contact->result() as $row): ?>
        <img class="img-rounded" src="/source/img/contact.jpg" width="100%">
        <div class="caption">
            <h3><?php echo $row->name; ?></h3>
            <address>
                <strong>Address</strong><br>
                <?php echo $row->address; ?>
            </address>
            <?php if($row->phone !== "") : ?>
                <address>
                    <strong>Phone</strong><br>
                    <?php echo $row->phone; ?>
                    <?php if($row->phone1 !== "") : ?>
                    <?php echo '<br />'.$row->phone1; ?>
                    <?php endif; ?>
                     <?php if($row->phone2 !== "") : ?>
                    <?php echo '<br />'.$row->phone2; ?>
                    <?php endif; ?>
                </address>
            <?php endif; ?>
            <?php if($row->email !== "") : ?>
                <address>
                    <strong>Email</strong><br>
                    <?php echo $row->email; ?>
                </address>
            <?php endif; ?>
        </div>
     <?php endforeach; ?>
    </div>
<?php endif; ?>