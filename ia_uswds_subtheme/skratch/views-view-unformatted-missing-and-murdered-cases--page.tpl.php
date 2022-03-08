<?php

/**
 * @file
 * Default simple view template to display a list of rows using USWDS card styles
 * @author fermin.aguilar@bia.gov
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<!-- Adds MMU Grid style cards 3 across -->
<ul class="usa-card-group">
    <?php foreach ($rows as $id => $row){
        print '<li class="tablet:grid-col-4 usa-card usa-card--header-first"><div class="usa-card__container">';
        print $row;
        print '</div></li>'; }
    ?>
</ul>