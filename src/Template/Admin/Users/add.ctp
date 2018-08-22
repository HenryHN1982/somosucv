<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Nuevo Usuario <small></small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?= $this->Form->create($user, [
                        'novalidate' => 'novalidate',
                        'templates' => [
                            'inputContainer' => '<div class="form-group">{{content}}</div>',
                            'inputContainerError' => '<div class="form-group has-error input {{type}}{{required}} error">{{content}}{{error}}</div>',
                            'error' => '<div class="help-block error-message">{{content}}</div>'
                        ],
                    ]);
    ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">

                    <?php echo $this->Form->control('first_name', [
                                'label' => ['text' => 'Nombres'],
                                'class' => 'form-control',
                                'placeholder' => 'Robi'
                    ]); ?>
                    
                    <?php echo $this->Form->control('last_name', [
                                'label' => ['text' => 'Apellidos'],
                                'class' => 'form-control',
                                'placeholder' => 'Alfaro Ballena'
                    ]); ?>

                    <div class="form-group <?= ($this->Form->isFieldError('role'))? 'has-error': '' ; ?> ">
                        <label for="role">Rol</label>
                        <?php
                            $options = ['admin' => 'Administrador', 'user' => 'Usuario'];
                            echo $this->Form->select('role', $options,  [
                                        'class' => 'form-control',
                                        'id' => 'role',
                                        'empty' => '-SELECCIONE-'
                            ]);
                            
                            if ($this->Form->isFieldError('role')) {
                                echo $this->Form->error('role', 'Seleccione un rol.');
                            }

                        ?>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->control('email', [
                                    'label' => ['text' => 'Correo'],
                                    'class' => 'form-control',
                                    'placeholder' => 'alfarobr@gmail.com'
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->control('password', [
                                    'label' => ['text' => 'Contraseña'],
                                    'class' => 'form-control',
                            ]); ?>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
            
        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                    
                    <label>
                        <?php 
                        echo $this->Form->checkbox('state', [
                            'label' => false, 
                            'class' => 'minimal'
                          ]);
                        echo ' Activo';
                        ?>
                    </label>
                    
                </div>
                <div class="box-footer clearfix">
                    <?= $this->Form->button('Aplicar', ['name'=>'apply', 'class' => 'btn btn-default btn-flat']) ?>
                    <?= $this->Form->button('Guardar', ['name'=>'save', 'class' => 'btn btn-success btn-flat']) ?>
                    <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-info btn-flat']) ?>
                </div>
            </div>
        </div>
    
    </div>
    
    <?= $this->Form->end() ?>
</section>
<!-- /.content -->
