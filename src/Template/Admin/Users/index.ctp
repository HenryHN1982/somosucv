<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<section class="content-header">
    <h1> Usuarios <small></small> </h1>
    
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="sort"><?= $this->Paginator->sort('id', ['ID']) ?></th>
                    <th class="sort"><?= $this->Paginator->sort('first_name', ['Nombres']) ?></th>
                    <th class="sort"><?= $this->Paginator->sort('last_name', ['Apellidos']) ?></th>
                    <th class="sort"><?= $this->Paginator->sort('email', ['Correo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username', ['Usuario']) ?></th>
                    <th class="sort"><?= $this->Paginator->sort('role', ['Rol']) ?></th>
                    <th class="sort"><?= $this->Paginator->sort('state', ['Estado']) ?></th>
                    <th>Acciones</th>
                </tr>
                
                <?php foreach ($users as $user): ?>
                <tr id="row-<?= $this->Number->format($user->id) ?>">
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td>
                        <?php
                            if ($user->state == 1){
                                echo '<span class="text-green">Activo</span>';
                            } else {
                                echo '<span class="text-red">Inactivo</span>'; 
                            }
                        ?>
                    </td>
                    <td class="actions">
                        <div class="input-group input-group-sm">
                            <div class="input-group-btn">
                            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['escape' => false, 'class' => 'btn btn-success btn-flat']) ?>
                            <?= $this->Html->link('Eliminar', '#', ['escape' => false, 'class' => 'btn btn-danger btn-flat', 'data-toggle' => 'modal', 'data-target' => '#confirmModal-'.$user->id]) ?>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="confirmModal-<?= $user->id ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title">Mensaje</h4>
                                    </div>
                                    <div class="modal-body">¿Desea eliminar al usuario <b><?= $user->first_name . ' ' . $user->last_name ?>.?</b></div>
                                    <div class="modal-footer">  
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                                        <?= $this->Form->postLink('Aceptar', ['action' => 'delete', $user->id], ['class' => 'btn btn-primary']); ?>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            
            </table>
            
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first(__('Primero')) ?>
                    <?= $this->Paginator->prev(__('Anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('Siguiente')) ?>
                    <?= $this->Paginator->last(__('Último')) ?>
                </ul>
            </div>
        </div>

        <div class="box-footer">
            <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} registros de {{count}} en total.'); ?>
        </div>
  
    </div>
</section>
<!-- /.content -->
