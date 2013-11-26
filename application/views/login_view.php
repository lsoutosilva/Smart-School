<?= $base ?>

<!--  CONTENT -->


<div class="container-fluid">

    <div class="row-fluid">


        <div class="span4 offset4">
            <div style="margin:0 auto;">
                <div class="login"><a href="#" class="brand">The<span>Vira</span><i>v1.0</i></a>
                </div>
            </div>


            <!-- LABEL -->
            <div class="wrap-login">
                <div class="nest">
                    <div class="body-nest">
                        <?= validation_errors(); ?>
                        <div class="logo-login">
                            <span class="entypo-key"></span>
                        </div>
                        <?php
                            echo form_open(base_url('login'));

                            echo form_input(['type' => 'text', 'name' => 'username', 'class' => 'text-center input-block-level', 'placeholder' => "Usuário"]);

                            echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'text-center input-block-level', 'placeholder' => "Senha"]);

                            $submit = Array("name" => "submit", "value" => "Entrar", "class" => "btn btn-block btn-primary btn-large tooltip-tip");

                            echo form_submit($submit);

                            form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
<?= $footer?>
