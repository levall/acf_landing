
<?php
$socialNetworks = get_field('social_networks', 'project_settings');
$phoneNumbers = get_field('phone_number', 'project_settings');
$email = get_field('e-mail', 'project_settings');
$title = get_field('footer_title', 'project_settings');
$text = get_field('footer_text', 'project_settings');

?>
<footer class="footer">
    <div class="container">
    <div class="left">
        <div class="title"><?php echo $title;?></div>
        <div class="text"><?php echo $text;?></div> 
    </div>

    <div class="right">
        <div class="email">E-mail: <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></div>

         <div class="phone-numbers"><?php
             foreach ($phoneNumbers as $item) {
                ?><div>Tel.: <a href="tel:<?php echo $item['phone_number'];?>"><?php echo $item['phone_number'];?></a></div><?php
             }
         ?></div>

        <div class="social-networks"><?php
            foreach ($socialNetworks as $social) {
                ?><div><a href="<?php echo $social['link'];?>" target="_blank">
                    <?php echo $social['social_network'];?>
                </a></div><?php
            }
        ?></div>

    </div>

    </div>

</footer>

<div class="popup-details" id="popup-details" style="display: none;"> 
    <div class="content">

    </div>
</div>


<?php wp_footer(); ?>


</body>
</html>