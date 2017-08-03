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
                 <a href="/posv2/users/"><i class="fa fa-list" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>List Users</span> </a>
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

<div style="margin-top:100px;">
<div class="container">
<div class="col-lg-12">
 <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
             

          
            
            <div class="form-group col-lg-7">
            <?= $this->Form->control('username',array('class'=>'form-control')); ?>
            </div>

            <div class="form-group col-lg-7">
            <?= $this->Form->control('password',array('class'=>'form-control')); ?>
            </div>

            <div class="form-group col-lg-7">
            <?= $this->Form->control('First_Name',array('class'=>'form-control')); ?>
            </div>

            <div class="form-group col-lg-7">
            <?= $this->Form->control('Middle_Name',array('class'=>'form-control')); ?>
            </div>

            <div class="form-group col-lg-7">
            <?= $this->Form->control('Last_Name',array('class'=>'form-control')); ?>
            </div>
 
    </fieldset>
 <div class="form-group">
    <?= $this->Form->submit('Save', array(
        'div' => false,
        'class' => 'btn btn-default'
      ));  ?>
      </div>
    <?= $this->Form->end() ?>
</div>
</div>
</div>


