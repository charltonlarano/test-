<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                 <!--<a href="#menu-toggle" id="menu-toggle" class="toggle" style="margin-top:40px; float:right;" > <i class="fa fa-angle-double-left" style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i></a>--></li>
                    
                <li>
                 <a href="/posv2/users/add"><i class="fa fa-user-plus" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>New User</span> </a>
                </li>
                <li>
                    <a href="/posv2/fees/"><i class="fa fa-list" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>List Fees</span> </a>
                </li>
                <li>
                   <a href="/posv2/fees/add"><i class="fa fa-plus-square-o" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>New Fee</span> </a>
                </li>
                <li>
                    <a href="/posv2/Accounts/"><i class="fa fa-th-list" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>List Accounts</span> </a>
                </li>
                <li>
                    <a href="/posv2/Accounts/add"><i class="fa fa-plus-square" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>New Account</span> </a>
                </li>
                <!--<li>
                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>-->
            </ul>
        </div>
    </div>

</nav>

   

        <div style="margin-top:100px" class="container">
<div class="col-md=12">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
        
            
            <div class="form-group col-md-7"><?= $this->Form->control('user_id',array('class' => 'form-control'), ['options' => $users]); ?></div>
            

            <div class="form-group col-md-7"><?= $this->Form->control('account_name',array('class'=>'form-control')); ?></div>
            

            <div class="form-group col-md-7"><?= $this->Form->control('account_number',array('class'=>'form-control')); ?></div>
            

            <div class="form-group col-md-7"><?= $this->Form->control('debit',array('class'=>'form-control')); ?></div>
            

            <div class="form-group col-md-7"><?= $this->Form->control('credit',array('class'=>'form-control')); ?></div>
            

            <div class="form-group col-md-7"><?= $this->Form->control('fees._ids',array('class' => 'form-control'), ['options' => $fees]); ?></div>
            
    </fieldset>
    <div class="form-group"><?= $this->Form->submit('Create Account',array('class' => 'btn btn-default')) ?>
    <?= $this->Form->end() ?>
</div>
