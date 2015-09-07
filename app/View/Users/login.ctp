<h2><?php echo __('User'); ?></h2>

<div id="users-login" class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Login'); ?></h3>
    </div>

    <div class="panel-body" style="overflow: auto;">

<?php
    echo $this->Form->create('User', array(
        'inputDefaults' => array(
            'label' => array('class' => 'control-label'),
            'div' => 'form-group',
            'class' => 'form-control',
        )
    )); ?>

    <fieldset>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php
    echo $this->Form->end(array(
        'label' => __('Login'),
        'div' => array(
            'class' => 'form-group'
        ),
        'class' => 'btn btn-primary'
     ));
?>
    </div>

</div>
