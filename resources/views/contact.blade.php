
      
    @include('layouts.header')


    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
   <div class="normal_main_content ">
      <h1 class="page-title center">
         Contact
      </h1>
      <section id="shopify-section-template--14217818406996__contact-banner" class="shopify-section">
         <div class="page-width">
            <div class="row">
               <div class="contact-form-information">
                  <div class="contact-banner col-lg-6 col-md-12">
                     <div class="image-container">
                        <a role="link" aria-disabled="true">
                        <img class="lazyload"
                           data-src="{{ asset('assets/images/About-image2.jpg') }}"
                           alt="Contact Banner Image">
                        </a>
                     </div>
                  </div>
                  <div class="information-container col-lg-6 col-md-12">
                     <div class="title-container">
                        <h3 class="heading">GET IN TOUCH</h3>
                        <span class="subheading">We&#39;d Love to Hear From You, Lets Get In Touch!</span>
                     </div>
                     <div class="list-contact-info col-xs-12">
                        <div class="contact_info_item col-xs-6">
                           <h3>Address</h3>
                           <p>4005, Silver Business Point</p>
                           <p>India</p>
                        </div>
                        <div class="contact_info_item col-xs-6">
                           <h3>Phone</h3>
                           <p>+(012)99999999</p>
                        </div>
                        <div class="contact_info_item col-xs-6">
                           <h3>Email</h3>
                           <p>
                              <a href="mailto:info@gmail.com">
                              info@gmail.com
                              </a> 
                           </p>
                        </div>
                        <div class="contact_info_item col-xs-6">
                           <h3>Additional Information</h3>
                           <p>We are open: Monday - Saturday, 10AM - 5PM and closed on sunday sorry for that.</p>
                        </div>
                        <div class="contact_info_item col-xs-12">
                           <h3>Social</h3>
                           <ul class="social-icons">
                              <li class="facebook">
                                 <a class="social-icons__link" href="../index.html" title="Techayo Sectioned Shopify Theme on Facebook" target="_blank">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li class="instagram">
                                 <a class="social-icons__link" href="../index.html" title="Techayo Sectioned Shopify Theme on Instagram" target="_blank">
                                 <i class="fa fa-instagram" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li class="tiktok">
                                 <a class="social-icons__link" href="../index.html"  title="Techayo Sectioned Shopify Theme on Tiktok" target="_blank">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon " viewBox="0 0 18 18">
                                       <svg x="6%" y="0%">
                                          <path d="M8.02 0H11s-.17 3.82 4.13 4.1v2.95s-2.3.14-4.13-1.26l.03 6.1a5.52 5.52 0 11-5.51-5.52h.77V9.4a2.5 2.5 0 101.76 2.4L8.02 0z" fill="currentColor"></path>
                                       </svg>
                                    </svg>
                                 </a>
                              </li>
                              <li class="snapchat">
                                 <a class="social-icons__link" href="../index.html" title="Techayo Sectioned Shopify Theme on Snapchat" target="_blank">
                                 <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li class="vimeo">
                                 <a class="social-icons__link" href="../index.html" title="Techayo Sectioned Shopify Theme on Vimeo" target="_blank">
                                 <i class="fa fa-vimeo" aria-hidden="true"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style type="text/css">
            #shopify-section-template--14217818406996__contact-banner {
            margin-bottom: 70px;
            }
            @media (max-width: 767px) {
            #shopify-section-template--14217818406996__contact-banner {
            margin-bottom: 30px;
            }
            }
         </style>
      </section>
      <section id="shopify-section-template--14217818406996__iframe" class="shopify-section">
         <div class="contact-map">
            <div class="section-header section-header-inner center">
            </div>
            <div id="iframe-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d112173.0227855024!2d77.1389451881658!3d28.527485061500744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1606909721649!5m2!1sen!2sin" style="border:0;" width="100%" height="400" frameborder="0"></iframe>
            </div>
         </div>
         <style type="text/css">
            #shopify-section-template--14217818406996__iframe {
            margin-bottom: 30px;
            }
            @media (max-width: 767px) {
            #shopify-section-template--14217818406996__iframe {
            margin-bottom: 0px;
            }
            }
         </style>
      </section>
      <section id="shopify-section-template--14217818406996__form" class="shopify-section">
         <div class="contact-form-bottom page-width">
            <div class="title-container">
               <h3 class="heading">LEAVE US A MESSAGE</h3>
               <span class="subheading">-Good For Nature, Good For You-</span>
            </div>
            <form method="post" action="https://techayo-ishi.myshopify.com/contact#ContactForm" id="ContactForm" accept-charset="UTF-8" class="contact-form">
               <input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
               <div class="contact__fields">
                  <div class="field">
                     <input class="field__input" autocomplete="name" type="text" id="ContactForm-name" name="contact[Name]" value="" placeholder="Name">
                     <label class="field__label" for="ContactForm-name">Name</label>
                  </div>
                  <div class="field field--with-error">
                     <input
                        autocomplete="email"
                        type="email"
                        id="ContactForm-email"
                        class="field__input "
                        name="contact[email]"
                        spellcheck="false"
                        autocapitalize="off"
                        value=""
                        aria-required="true"
                        placeholder="Email"
                        >
                     <label class="field__label " for="ContactForm-email">Email <span aria-hidden="true">*</span></label>
                  </div>
                  <div class="field">
                     <input type="tel" id="ContactForm-phone" class="field__input" autocomplete="tel" name="contact[Phone number]" pattern="[0-9\-]*" value="" placeholder="Phone number">
                     <label class="field__label" for="ContactForm-phone">Phone number</label>
                  </div>
               </div>
               <div class="field">
                  <textarea
                     rows="10"
                     id="ContactForm-body"
                     class="text-area field__input"
                     name="contact[Comment]"
                     placeholder="Comment"
                     ></textarea>
                  <label class="form__label field__label" for="ContactForm-body">Comment</label>
               </div>
               <div class="submit-button">
                  <button type="submit" class="button">
                  Send
                  </button>
               </div>
            </form>
         </div>
         <style type="text/css">
            #shopify-section-template--14217818406996__form {
            margin-bottom: 70px;
            }
            @media (max-width: 767px) {
            #shopify-section-template--14217818406996__form {
            margin-bottom: 30px;
            }
            }
         </style>
      </section>
   </div>
</main>
      
      @include('layouts.footer')
</html>
