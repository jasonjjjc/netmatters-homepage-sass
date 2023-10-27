<div class="section bottom container">

        <div class="row">
          <!-- Contact Info -->
          <div class="col-lg-4 col-lg-push-8">

            <div>
              <div class="cms-block" id="partial-79391">
                <p><strong>Email us on:</strong><br></p>
                <p><a href="mailto:sales@netmatters.com" class="h3 text-web">sales@netmatters.com</a></p>
                <p><strong>Business hours:</strong></p>
                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>

              </div>
            </div>
            <div>
              <div class="cms-block" id="partial-79394">
                <div class="container">
                  <div class="accordion out-of-hours">
                    <div class="question out-of-hours">
                      <h4>
                        <a href="#" id="toggleChevron">
                          <p class="question-text">Out of Hours IT Support <em style="font-style: normal" class="fa fa-chevron-down rotate"></em></p>
                        </a>
                      </h4>
                      <div id="answer" class="answer initiallyHidden">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p><strong>Monday - Friday 18:00 - 22:00
                          </strong><strong>Saturday 08:00 - 16:00
                          </strong><br><strong>Sunday 10:00 - 18:00</strong></p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <!-- Contact Form -->
          <div class="col-lg-8 col-lg-pull-4">


            <form method="POST" action="process_form.php" accept-charset="UTF-8" id="contact-form" class="" novalidate="novalidate">

              <!-- if the form is successfully submitted, display a success message -->
              <?php if ($success) : ?>
                <div class="alert alert-success">
                  Your message has been sent!
                  <button type="button" class="close" data-dismiss="alert">×</button>
                </div>
              <?php endif; ?>


              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="required">Your Name</label>
                    <?php if (isset($errors['name'])) : ?>
                      <div class="alert text-danger">Name is required.</div>
                    <?php endif; ?>
                    <input class="form-control<?php echo isset($errors['name']) ? ' is-invalid' : '' ?>" name="name" type="text" value="<?php echo isset($formData['name']) ? htmlspecialchars($formData['name']) : ''; ?>" id="name">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company" class="">Company Name</label>
                    <input class="form-control" name="company" type="text" value="" id="company">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="required">Your Email</label>
                    <?php if (isset($errors['email'])) : ?>
                      <div class="alert text-danger">Please enter a valid email address.</div>
                    <?php endif; ?>
                    <input class="form-control<?php echo isset($errors['email']) ? ' is-invalid' : '' ?>" name="email" type="email" value="<?php echo isset($formData['email']) ? htmlspecialchars($formData['email']) : ''; ?>" id="email">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone" class="required">Your Telephone Number</label>
                    <?php if (isset($errors['telephone'])) : ?>
                      <div class="alert text-danger">Please enter a valid telephone number.</div>
                    <?php endif; ?>
                    <input class="form-control<?php echo isset($errors['telephone']) ? ' is-invalid' : '' ?>" name="telephone" type="text" value="<?php echo isset($formData['telephone']) ? htmlspecialchars($formData['telephone']) : ''; ?>" id="telephone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="message" class="required">Message</label>
                <?php if (isset($errors['message'])) : ?>
                  <div class="alert text-danger">Please write your message.</div>
                <?php endif; ?>
                <textarea class="form-control<?php echo isset($errors['message']) ? ' is-invalid' : '' ?>" name="message" cols="50" rows="10" id="message"><?php echo isset($formData['message']) ? htmlspecialchars($formData['message']) : 'Hi, I am interested in discussing an Our Offices solution, could you please give me a call or send an email?'; ?></textarea>
              </div>

              <div class="form-group">
                <div class="contact-form-marketing">
                  <input id="contact-form-marketing-checkbox" name="marketing" class="contact-form-marketing-checkbox" type="checkbox" value=1 />
                  <label for="contact-form-marketing-checkbox" class="contact-form-marketing-label">Please tick this box if you wish to receive marketing
                    information from us. Please see our Privacy Policy for more
                    information on how we keep your data safe.</label>
                </div>
              </div>

              <div class="action-block">
                <button name="submit" class="btn btn-primary">
                  Send Enquiry
                </button>
                <small class="helper-text"><span class="text-danger">*</span> Fields Required</small>

              </div>

            </form>


          </div>

        </div>

      </div>