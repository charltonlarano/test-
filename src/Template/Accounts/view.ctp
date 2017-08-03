<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account $account
  */
?>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                 <!--<a href="#menu-toggle" id="menu-toggle" class="toggle" style="margin-top:40px; float:right;" > <i class="fa fa-angle-double-left" style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i></a>--></li>
                    
                <li>
                 <a href="/posv2/users/add"><i class="fa fa-user-plus" style="margin-right: 10px; margin-left: 5px" aria-hidden="true"> </i> <span>New Account</span> </a>
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
<div style="margin-top:100px;" class="col-md-12">
    <h3><?= h($account->account_name) ?></h3>
    <table class="table table-stripped" width="100%" class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $account->has('user') ? $this->Html->link($account->user->username, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Name') ?></th>
            <td><?= h($account->account_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Number') ?></th>
            <td><?= h($account->account_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debit') ?></th>
            <td><?= h($account->debit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit') ?></th>
            <td><?= h($account->credit) ?></td>
        </tr>
   
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fees') ?></h4>
        <?php if (!empty($account->fees)): ?>
        <table class="table table-stripped"  width="75%" cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Fee Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->fees as $fees): ?>
            <tr>
                
                <td><?= h($fees->fee_name) ?></td>
                <td><?= h($fees->created) ?></td>
                <td><?= h($fees->modified) ?></td>
                  <td class="btn-group">
                    <button class="btn btn-default" onclick="location.href = '/posv2/accounts/view/<?= h($account->id)?>'; " >View</button>
                    <button class="btn btn-default" onclick="location.href = '/posv2/accounts/edit/<?= h($account->id)?>'; " >Edit</button>
                    <button class="btn btn-default" href="/posv2/Fees/delete/<?= h($account->id);?>"
                                           onclick="return confirm(
                                               'Are you sure you wish to delete user # <?= h($account->id);?>'
                                           );">
                                           Delete</button>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


