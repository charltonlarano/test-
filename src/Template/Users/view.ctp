<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                 <!--<a href="#menu-toggle" id="menu-toggle" class="toggle" style="margin-top:40px; float:right;" > <i class="fa fa-angle-double-left" style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i></a>--></li>
                    
                <li>
                 <a href="/posv2/users/edit/<?= h($user->id)?>"><i class="fa fa-pencil-square-o" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>Edit Account</span> </a>
                </li>
                <li>
                    <a href="/posv2/Users/delete/<?= h($user->id)?>" onclick="return confirm(
                                               'Are you sure you wish to delete user # <?= h($user->id)?>'
                                           );"><i class="fa fa-trash" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>Delete</span> </a>
                </li>
                <li>
                   <a href="/posv2/Users"><i class="fa fa-plus-square-o" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>List Users</span> </a>
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


<div class="col-md-12">

    <h3>Username: <?= h($user->username) ?></h3>
    <table class="table table-stripped table-bordered" width="70%" class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fee') ?></th>
            <td><?= $user->has('fee') ? $this->Html->link($user->fee->fee_name, ['controller' => 'Fees', 'action' => 'view', $user->fee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->First_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($user->Middle_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->Last_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
  
</div>
