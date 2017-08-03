<?php
  /**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $accounts
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
                    <a  href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                </li>-->
            </ul>
        </div>
    </div>
                                           
<div style="margin-top:120px;" class="container">
<div class="col-lg-12">
    <h3><?= __('Accounts') ?></h3>
    <table class="table table-stripped " width="90%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>                
                <th scope="col"><?= $this->Paginator->sort('account_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= h($account->account_name) ?></td>
                <td><?= h($account->account_number) ?></td>
                <td>&#8369; <?= h($account->debit) ?></td>
                <td>&#8369; <?= h($account->credit) ?></td>
                <td><?= h($account->created) ?></td>
                <td><?= h($account->modified) ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
