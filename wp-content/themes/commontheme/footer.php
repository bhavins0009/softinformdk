
<footer class="footer">
    <div class="container">
        <ul class="footer-link">
            <li>
                <h3><span>quick links</span></h3>
                <ul class="flink">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../outsourcing.php">Outsourcing</a></li>
                    <li><a href="../project-development.php">Project Development</a></li>
                    <li><a href="../prices.php">Prices</a></li>
                    <li><a href="../about-us.php">About Us</a></li>
                    <li><a href="../contact-us.php">Contact</a></li>
                </ul>
            </li>
            <li>
                <ul class="footer-col">
                    <li>
                        <h3><span>Address</span></h3>
                        <p>Plantagevej 14 6460 Birkerød</p>
                    </li>
                    <li>
                        <h3><span>telephone</span></h3>
                        <p><a href="tel:+4542503600">+45 42 50 36 00</a></p>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="footer-col">
                    <li>
                        <h3><span>Email</span></h3>
                        <a href="mailto:info@softinform.dk">info@softinform.dk</a>
                    </li>
                    <li>
                        <h3><span>connect with us</span></h3>
                        <div class="si">
                            <a href="https://www.facebook.com/SoftInform-105077264228775/" target="_blank" class="fb"></a>
                            <a href="https://www.linkedin.com/company/soft%C2%B7inform-aps/" target="_blank" class="ld"></a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <p>Copyright &#169; 2019 Soft.inform All rights reserved.</p>
        <a href="privacy-policy.php">Read Personal data policy</a>
    </div>
</div>

<?php if(!isset($_COOKIE['cookieAccept'])) { ?>
    <div class="cookies-popup">
        <p>Privatliv og cookies: Dette websted bruger cookies. Ved at fortsætte med at bruge denne hjemmeside accepterer du deres brug. For at finde ud af mere, herunder hvordan du kontrollerer cookies, se her:
            <a href="../cookies.php">Cookie Politik</a></p>
        <input id="btnAccept" type="submit" value="Luk & Accepter">
    </div>
<?php } ?>

<a href="javascript:;" class="scroll_To_Top"></a>

<script>
    jQuery("#btnAccept").click(function(){
        jQuery.post("cookieajax.php", function(data, status){
            jQuery(".cookies-popup").hide();
        });
    });

    jQuery('.popup-close').click( function(){
        jQuery('.alert-success').hide();
    });
</script>
<?php wp_footer(); ?>
</body>
</html>