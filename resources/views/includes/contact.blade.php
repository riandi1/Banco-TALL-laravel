<div class="container">
    <div class="justify-center row">
        <div class="w-full mx-4 lg:w-1/2">
            <div class="pb-10 text-center section-title">
                <h4 class="title">Contactanos</h4>
                <p class="text">Escribenos y comentanos que tal te parece este trabajo, si te gusto o algo para mejorar. :) </p>
            </div> <!-- section title -->
        </div>
    </div> <!-- row -->
    <div class="justify-center row">
        <div class="w-full lg:w-2/3">
            <div class="contact-form">
                <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <div class="mx-4 mb-6 single-form form-group">
                                <input type="text" name="name" placeholder="Tu Nombre" data-error="Name is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="mx-4 mb-6 single-form form-group">
                                <input type="email" name="email" placeholder="Tu Correo" data-error="Valid email is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="mx-4 mb-6 single-form form-group">
                                <input type="text" name="subject" placeholder="Asunto" data-error="Subject is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="mx-4 mb-6 single-form form-group">
                                <input type="text" name="phone" placeholder="Telefono" data-error="Phone is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="w-full">
                            <div class="mx-4 mb-6 single-form form-group">
                                <textarea rows="5" placeholder="Tu Mensaje" name="message" data-error="Please, leave us a message." required="required"></textarea>
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <p class="mx-4 form-message"></p>
                        <div class="w-full">
                            <div class="mx-4 mt-2 text-center single-form form-group">
                                <button type="submit" class="main-btn gradient-btn focus:outline-none">Enviar Mensaje</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                </form>
            </div> <!-- row -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->