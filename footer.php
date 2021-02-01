<!-- FOOTER -->

<?php $footer = get_field('footer'); ?>

<footer class="footer">
  <div class="container py-2 text-dark">
    <div class="row">
      <div class="col-lg pt-2 back-to-top">
        <a href="#" class="text-dark"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a>
      </div>
      <div class="col-lg">
        <p class="text-center text-uppercase footer-text text-dark pt-2">
          Copyright &copy; <span id="year"></span> Larry's Learners
        </p>
        <p class="text-center"><a href="tel:<?php echo $footer['telephone_number']; ?>
"><?php echo $footer['telephone']; ?></a>
        </p>
        <p class="text-center">
          <?php if ($footer['social_1']) : ?>
            <a href="<?php echo $footer['social_link_1']; ?>" target="_blank"><i class="<?php echo $footer['social_1']; ?> fa-2x text-dark"></i></a>&nbsp;
          <?php endif; ?>
          <?php if ($footer['social_2']) : ?>
            <a href="<?php echo $footer['social_link_2']; ?>" target="_blank"><i class="<?php echo $footer['social_2']; ?> fa-2x text-dark"></i></a>&nbsp;
          <?php endif; ?>
          <?php if ($footer['social_3']) : ?>
            <a href="<?php echo $footer['social_link_3']; ?>" target="_blank"><i class="<?php echo $footer['social_3']; ?> fa-2x text-dark"></i></a>&nbsp;
          <?php endif; ?>
          <?php if ($footer['social_4']) : ?>
            <a href="<?php echo $footer['social_link_4']; ?>" target="_blank"><i class="<?php echo $footer['social_4']; ?> fa-2x text-dark"></i></a>
          <?php endif; ?>
        </p>
      </div>

      <div class="col-lg pt-2 web-created">
        <small>
          Website created by
          <a class="text-dark" href="https://joshembling.co.uk" target="_blank">Josh Embling</a>
        </small> <br>
        <!-- PRIVACY -->
        <button type="button" class="footer-conditions" data-toggle="modal" data-target="#privacy">
          Privacy Policy
        </button>

        <div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacy-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="privacy-label">Privacy Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-left">
                1. Larry's Learners Driving School is committed to protecting your privacy and maintaining the security of any personal data received from you. We strictly adhere to the requirements of the data protection legislation in the UK. The purpose of this statement is to explain to you what personal data we collect and how we may use it. <br><br>

                2. When you contact us to make an enquiry, we will ask you for your name, address, postcode, phone number(s) and email address.<br><br>

                3. We will retain your personal data for a length of time dependant on the nature of our relationship with you, as follows:<br><br>

                – Larry's Learners will hold the personal data of driving lesson enquirers and those who register on our website for no more than 30 days unless DVSA practical test centres are closed in England, Scotland or Wales in which case Larry's Learners will retain data for no more than 3 months after the test centres re-open.<br>
                – For enquiries regarding training to become a Driving Instructor and for Becoming a Driving Instructor with Larry's Learners Driving School we will hold your personal data for 3 years.<br>
                – Once you become a customer of RDS Driving Services Ltd by making a purchase, booking a lesson, purchasing a training course or signing up to a franchise, we will retain your personal data for as long as you are an active customer plus 6 complete financial years of the company from your last recorded activity, in line with Financial and Accounting regulations.<br>

                4. We will only ever share personal data that we collect from you with the following third parties and only for the purpose(s) described:<br><br>

                – First Data / Cardnet – Merchant Services (payment card processing)<br>
                – RealEx – payment card processing<br>
                – Verifone – payment card processing<br>
                – Esendex – to send booking notification SMS text messaging to your Instructor<br>
                – Forfront – for Larry's Learners Driving School direct marketing emails, provided you have granted consent for us to do so<br>
                – PrintSwift – for delivery of cash voucher and gift voucher print and mailing services via post and email<br>
                – Adobe Sign – electronic contract and document processing<br>
                – FogCreek – Customer Relationship management<br>
                – Feefo, TrustPilot and e-Sales Hub – for feedback on Larry's Learners’s customer service and review ratings
                – ATOM42-for marketing analysis<br>
                – DJS and Bridge Consulting-to undertake independent research into your experiences with Larry's Learners.<br><br>

                5. We may share your personal data internally between RDS Driving Services Ltd group companies in order to provide special offers and relevant products and services.<br><br>

                6. We follow strict security procedures in the storage and disclosure of personal data which you have given us, to prevent unauthorised access in accordance with the UK data protection legislation. We do not collect sensitive data about you except when you specifically knowingly provide it. In order to maintain the accuracy of our database, you can check, update or remove your personal details by emailing blank@blank.co.uk.<br><br>

                7. We use a technology called “cookies” as part of a normal business procedure to track patterns of behaviour of visitors to our site. A cookie is an element of data that our website sends to your browser which is then stored on your system. You can set your browser to prevent this happening. Any information collected in this way can be used to identify you unless you change your browser settings.<br><br>

                8. We do not transfer any data to any organisation outside the EEA unless they operate to the standards required under the GDPR regulations.<br><br>

                9. If you have any questions about our privacy policy, please contact us via email: blank@blank.co.uk.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> <br>

        <!-- TS and CS -->
        <button type="button" class="footer-conditions" data-toggle="modal" data-target="#ts-and-cs">
          Terms and Conditions
        </button>


        <div class="modal fade" id="ts-and-cs" tabindex="-1" role="dialog" aria-labelledby="ts-and-cs-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ts-and-cs-label">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-left">
                In order to have driving lessons you must:
                <ul>
                  <li> Be aged 17 or older (16 or over if disabled)</li>
                  <li> Hold a driving licence that is valid for the UK (provisional, full or an appropriate foreign licence)</li>
                </ul>
                It is your responsibility to provide your instructor with proof that you have a valid licence to drive before the commencement of your first driving lesson. If you fail to provide this proof, your instructor is entitled to refuse to conduct the driving lesson but may still charge you for such driving lesson. <br><br>
                You must give at least 48 hours’ notice to your instructor if you wish to cancel or re-arrange a booked driving lesson. Failure to do so may result in your instructor charging you the full amount for that driving lesson.

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<!-- Button trigger modal -->


<?php wp_footer(); ?>



</body>

</html>