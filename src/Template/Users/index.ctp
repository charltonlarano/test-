<?php
/**
  * @var \App\View\AppView $this
  */
?>
<head>
<meta http-Equiv="Cache-Control" Content="no-cache">
<meta http-Equiv="Pragma" Content="no-cache">
<meta http-Equiv="Expires" Content="0">
<script src="webroot/js/search.js"></script>
<link rel="stylesheet" type="text/css" href="webroot/css/modal.css">
<script src="webroot/js/jquery1.9.1.js"></script>

</head>
<body>
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
    </div>
    </div>

<div>
<div class="container">
<div class="col-lg-12">
<h3><?= __('User List') ?></h3>

    </div>
   <div class="form-group">
    <div class="col-lg-4" >
          <input type="text" class="form-control"   type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for...">
      
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
    <table class="table table-striped" id="myTable" cellpadding="0"  data-tableName="Test Table 2" id="myTable" cellspacing="0">
        <thead class="thead-default">
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('First_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Middle_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Last_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><center><?= __('Actions') ?></center></th>
            </tr>
        </thead>



        <tbody>

            <?php foreach ($users as $user): ?>
            <tr> 
                <td><?= h($user->username) ?></td>
                <td>
                 <a onclick="$('#id01').hide().delay(750).fadeIn('slow');" href="fees/iframe/<?php if(isset($user->fee)){
                                            
                      echo h($user->fee->id);
                                                            
                      }?>" target="iframe_a">
                     <?php if(isset($user->fee)){
                                            
                      echo h($user->fee->fee_name);
                                                            
                      }
                       
                      ?> </a>

          

                 <div id="id01" class="w3-modal">
                
                    <div class="w3-modal-content" style="width:1130px; position: ">
                       <span onclick="getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        
                
                
                 <h1><center>Fees Summary</center></h1>
                      <div class="w3-container">
                        <div id="loader-wrapper">
                
                        
                 
                 </div>
                 <div id="myDIV" style="display:block;">

                      <iframe  style="  position:relative; " src=""  scrolling="no"  height="700px" width="1100px" name="iframe_a"></iframe>
                              
                  </div>
                        
                      </div>
                    </div>
                  </div>
             

        
                </td>

                <td><?= h($user->First_Name) ?></td>
                <td><?= h($user->Middle_Name) ?></td>
                <td><?= h($user->Last_Name) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                 <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Tag Payment'), ['action' => 'tagpayment', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>


       <div>
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
</body>
             
       
          

