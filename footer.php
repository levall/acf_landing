
<?php
$socialNetworks = get_field('social_networks', 'project_settings');
$phoneNumbers = get_field('phone_number', 'project_settings');
$email = get_field('e-mail', 'project_settings');
$title = get_field('footer_title', 'project_settings');
$text = get_field('footer_text', 'project_settings');

?>
<footer>
    <div class="left">
        <div class="title"><?php echo $title;?></div>
        <div class="title"><?php echo $text;?></div>
        <div class="text"></div>
    </div>

    <div class="right">
        <div class="email">E-mail: <?php echo $email;?></div>

         <div class="phone-numbers"><?php
             foreach ($phoneNumbers as $item) {
                ?><div>Tel.: <?php echo $item['phone_number'];?></div><?php
             }
         ?></div>

        <div class="social-networks"><?php
            foreach ($socialNetworks as $social) {
                ?><div><a href="<?php echo $social['link'];?>" target="_blank">
                    <img src="<?php echo $social['social_network'];?>">
                </a></div><?php
            }
        ?></div>

    </div>

</footer>

<div class="popup-details" id="popup-details" style="display: none;">
    <div class="close">
        <svg data-fancybox-close width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2007 1.79541C13.4871 1.50903 13.4871 1.04471 13.2007 0.758321C12.9143 0.471937 12.45 0.471936 12.1636 0.758321L6.97828 5.94365L1.79318 0.758554C1.5068 0.472169 1.04248 0.472169 0.756095 0.758554C0.46971 1.04494 0.46971 1.50926 0.756094 1.79564L5.94119 6.98074L0.755624 12.1663C0.469238 12.4527 0.469239 12.917 0.755624 13.2034C1.04201 13.4898 1.50633 13.4898 1.79271 13.2034L6.97828 8.01783L12.1641 13.2036C12.4505 13.49 12.9148 13.49 13.2012 13.2036C13.4876 12.9172 13.4876 12.4529 13.2012 12.1665L8.01537 6.98074L13.2007 1.79541Z" fill="#1A1A1A"/>
        </svg>
    </div>
    <div class="content">

    </div>
</div>


<?php wp_footer(); ?>


</body>
</html>