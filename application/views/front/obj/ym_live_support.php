<?php if ($this->tools_model->set_ym_widget() == 1 ) : ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Live Support</h3>
    </div>
    <div class="panel-body text-center">
        <?php foreach ($get_ym_live_support->result() as $row): ?>
        <p>
        <a href="ymsgr:sendIM?<?php echo $row->ym_support;?>"><img src="http://opi.yahoo.com/online?u=<?php echo $row->ym_support;?>&m=g&t=14" border="0" alt="YM : <?php echo $row->ym_support;?>" /></a>            
        </p>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>