<div class="module">

    <div class="flex-module">

        <h2>Activate Account</h2>

        <?php if ( $validator->isError() ): ?>
            <div class="error_msg">
                <?php echo $validator->showError(); ?>
            </div>
        <?php endif; ?>

        <?php if ( $session->check( 'success_msg' ) ): ?>
            <div class="success_msg">
                <?php echo $session->get( 'success_msg' ); ?>
            </div>
        <?php endif; ?>


        <?php echo $form->formStart( APP_PATH . 'activation', false ) ?>
        <ul class="form">
            <li><label>Email:</label> <?php echo $form->text( 'email' ) ?></li>
            <li><label>Activation code:</label> <?php echo $form->text( 'activation_code' ) ?></li>
            <li><label>&nbsp;</label> <?php echo $form->submit( 'submit' ) ?><a href="<?php echo APP_PATH . 'send_activation' ?>">Resend activation</a></li>
        </ul>
        <?php echo $form->formEnd() ?>

    </div>

</div>