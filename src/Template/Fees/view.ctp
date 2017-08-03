<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Fee $fee
  */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/posv2/webroot/js/total.js" type="text/javascript" ></script>



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




<div style="margin-top:100px;" class="fees view large-9 medium-8 columns content">
    <h3><?= h($fee->fee_name) ?></h3>
    <table class="table table-stripped" width="75%;" class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fee Name') ?></th>
            <td><?= h($fee->fee_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fee->modified) ?></td>
        </tr>
    </table>
    
    <div class="related">
        <h4><?= __('Breakdown of fees') ?></h4>
        <?php if (!empty($fee->accounts)): ?>
        <table class="table table-stripped" id="fees" width="90%" cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Account Name') ?></th>
                <th scope="col"><?= __('Account Number') ?></th>
                <th scope="col"><?= __('Debit') ?></th>
                <th scope="col"><?= __('Credit') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fee->accounts as $accounts): ?>
            <tr>
                
                <td><?= h($accounts->account_name) ?></td>
                <td><?= h($accounts->account_number) ?></td>
                <td>&#8369; <span class="DataListed"><?= h($accounts->debit) ?><span></td>
                <td>&#8369; <span class="DataSold"><?= h($accounts->credit) ?></span></td>
                <td><?= h($accounts->created) ?></td>
                <td><?= h($accounts->modified) ?></td>
                   <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $accounts->id]) ?>
                    <?= $this->Html->link(__('Tag Payment'), ['action' => 'tagpayment', $accounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
             <tr class="totalColumn">
        <td><h5>Total:</h5></td>
   
        <td></td>
        <td>&#8369; <span class="totalColListed"></td>
        <td>&#8369; <span class="totalColSold"></td>
    </tr>
    <tr>
    <td><h4>Total: &#8369; <p style="margin-top:-18px; font-weight: 800; font-size: 16px; margin-left:72px;" class="total"></p></div> </td>
    </tr>
        </table>
        <?php endif; ?>
    </div>
</div>
