<?php $title = 'Contact'; ?>
<?php ob_start(); ?>

<h1>Qui sommes-nous ?</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contactez-nous !</h3>
            <hr>
            <address>
                <strong>Email :</strong> <a href="mailto:#"> name@domain.com</a><br><br>
                <strong>Téléphone :</strong> 06-12-34-56-78
            </address>
        </div>

        <div class="col-sm-8 contact-form">
            <form id="contact" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                    </div>
                </div>
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                <br />
                <div class="row">
                    <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-primary pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
