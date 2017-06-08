<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="text-right">
                        <?=$this->Html->link('Add New Business', ['controller' => 'businesses', 'action' => 'add'],['class' => ['btn', 'btn-success']])?>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="display responsive no-wrap table table-striped table-bordered table-hover dataTables" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th class="hidden-xs hidden-sm">Status</th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($businesses as $key => $business): ?>
                                    <tr>
                                        <td><?= $this->Number->format($key+1) ?></td>
                                        <td><?= h($business->name) ?></td>
                                        <td><a href="<?= $business->image_url ?>" target="_blank"><?= $this->Html->image($business->image_url, array('height' => 100, 'width' => 100))?></a></td>
                                        <td class="hidden-xs hidden-sm"><?= h($business->status)?'Enabled':'Disabled' ?></td>
                                        <td class="actions">
                                            <?= '<a href='.$this->Url->build(['action' => 'view', $business->id]).' class="btn btn-xs btn-success">' ?>
                                                <i class="fa fa-eye fa-fw"></i>
                                            <?= '</a>' ?>
                                            <?= '<a href='.$this->Url->build(['action' => 'edit', $business->id]).' class="btn btn-xs btn-warning"">' ?>
                                                <i class="fa fa-pencil fa-fw"></i>
                                            <?= '</a>' ?>
                                            <?php
                                                if($loggedInUser['id'] == 1){ 
                                                    echo  $this->Form->postLink(__(''), ['action' => 'delete', $business->id], ['confirm' => __('Are you sure you want to delete # {0}?', $business->id), 'class' => ['btn', 'btn-sm', 'btn-danger', 'fa', 'fa-trash-o', 'fa-fh']]);
                                                } 
                                            ?>                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th></th>
                                    <th class="hidden-xs">Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
    <!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables').DataTable({
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option><id = "init"><id/></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
     
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
     
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            },

            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Users Report'},
                {extend: 'pdf', title: 'Users Report'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                  }
                }
            ],

        });

    });
</script>