 

<?php wp_footer(); ?>

 

<footer id="footer" class="section text-light <?php if (is_page_template('templates/contact.php')) { ?> p-0 <?php } ?>" <?php if (!is_page_template('templates/contact.php')) { ?>  style="background: url('<?php echo get_template_directory_uri(); ?>/img/footer.png')" <?php }?>>
  
<?php if (!is_page_template('templates/contact.php')) { ?>
  <div class="container text-center text-md-start">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-md-start">
        <h2>Get In Touch</h2>
        <a class="btn btn-primary light" href="/contact">LETS WORK TOGETHER</a>
      </div>
      <div class="footerHello pt-5 mt-5 mb-4">
        <h4>Say Hello</h4>
        <a href="mailto:hello@halopresent.com">hello@halopresent.com</a>
        <a href="tel:+44 (0)7597 700100">+44 (0)7597 700100</a>
      </div>

      <div class="footerFollow mb-5 mb-md-0">
        <h4>Follow us</h4>
        <div class="socialIcons">
          <a target="_blank" href="https://www.linkedin.com/company/halopresent/"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
 
  </div> 
<? } ?>
  <div class="footer-base py-5 <?php if (is_page_template('templates/contact.php')) { ?> position-relative <?php } ?>" <?php if (is_page_template('templates/contact.php')) { ?> style="background-color: #1D2023!important;" <?php } ?>>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-10">
          <div class="smallText mb-3">
            Registered in England and Wales. Company registration number: 11825431.</br>Registered Office: 37 Great Pulteney Street, Bath, BA2 4DA, UK</br>
                © 2022 HALO Present is a part of Emberson Group.
          </div> 
          <div class="smallNav">
            <a href="/terms-conditions/">Terms & Conditions</a> | <a href="/privacy-statement/ ">Privacy Statement</a> | <a href="/cookie-policy/ ">Cookie Policy</a>
          </div>
        </div>

        <div class="col-2 text-end">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
        </div>
      
      </div>
    </div>
    
  </div>
</footer>
<script src=https://r1-t.trackedlink.net/_dmpt.js type="text/javascript"></script>


 </body>

 </html>