<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('name');
        echo $this->Form->input('lastname');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'cliente' => 'Cliente')
        ));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>