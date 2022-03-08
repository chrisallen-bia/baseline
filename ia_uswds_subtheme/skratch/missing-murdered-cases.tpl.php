<?php
/**
 * @file
 *  Override for displaying node of type 'Missing Murder Units'.
 */
if (module_exists("devel")) {
    dpm($node);
    //dpm($variables);
} ?>

<style>
    table.mmc {
        border: none;
    }

    table.mmc caption {
        color: #005885;
    }
    table.mmc th, table.mmc td{
        border-color: #ddd;
    }
    table.mmc tbody tr th {
        font-weight: bold;
    }
    table.mmc tbody tr:first-of-type th, table.mmc tbody tr:first-of-type td {
        border-top-color: #000;
        border-top-width: 2px;
    }
    table.mmc tbody tr:last-of-type td {
        border-bottom: none;
    }
    a:link.text-white, a:visited.text-white {
        color:white;
    }
    .node-missing-murdered-cases .usa-card__img img {
        object-fit: contain;
    }
</style>


<?php $current_url = url(current_path(), ["absolute" => true]); ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>

<?php if (!$page): ?>
    <h2 class="title">
        <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a>
    </h2>
<?php endif; ?>

<?php if (!empty($unpublished)): ?>
    <div class="unpublished"><?php print t("Unpublished"); ?></div>
<?php endif; ?>

<div class="grid-container">
    <!-- Profile -->
    <section>
        <div class="grid-row grid-gap-2">
            <div class="grid-col-12 tablet:grid-col-10">
                <div class="margin-y-2 line-height-sans-3">Missing or murdered individuals in Indian Country are members of our communities, of which our law enforcement officers are closely connected. The pictures of individuals are provided by family members to help the public share and submit tips and information that can help law enforcement give closure to families.</div>
            </div>
        </div>
        <div>
            <div class="float-right">
                <a href="/guide/missing-murdered-open-cases" class="usa-button usa-button--outline">View All</a>
            </div>
            <h2 class="call-out">Profile</h2>
        </div>
        <?php if (!empty($field_mmu_case_updates)): ?>
            <div class="usa-alert usa-alert--info usa-alert--slim">
                <div class="usa-alert__body">
                <span class="usa-alert__text measure-none">
                    <?php print render($content['field_mmu_case_updates']); ?>
                </span>
                </div>
            </div>
        <?php endif; ?>
        <div class="grid-row grid-gap-4 margin-bottom-4">
            <div class="grid-col-12">
                <ul class="usa-card-group margin-bottom-0 minihero">
                    <li class="tablet:grid-col usa-card usa-card--flag margin-bottom-0">
                        <div class="usa-card__container radius-0 border-0 bg-primary">
                            <div class="usa-card__media radius-0">
                                <div class="usa-card__img radius-0">
                                    <?php print render($content['field_profile_photo']); ?>
                                </div>
                            </div>

                            <div class="usa-card__body text-white padding-top-3">
                                <p class="text-white"><?php print render($content['field_mmu_case_information']['#items'][0]['safe_value']); ?></p>
                            </div>
                            <div class="usa-card__footer">
                                <?php if (!empty($field_mmu_last_loc)): ?>
                                    <div class="grid-row flex-no-wrap border-bottom border-white text-white margin-bottom-2">
                                        <div class="grid-col "><?php print $content['field_mmu_last_loc']['#title']; ?></div>
                                        <div class="grid-col"><span class="float-right"><?php print render($content['field_mmu_last_loc']); ?></span></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($field_mmu_case_status)): ?>
                                    <div class="grid-row flex-no-wrap border-bottom border-white text-white margin-bottom-2">
                                        <div class="grid-col "><?php print $content['field_mmu_case_status']['#title']; ?></div>
                                        <div class="grid-col"><span class="float-right"><?php print render($content['field_mmu_case_status']); ?></span></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($field_mmu_case_agent_name)): ?>
                                    <div class="grid-row flex-no-wrap border-bottom border-white text-white margin-bottom-2">
                                        <div class="grid-col "><?php print $content['field_mmu_case_agent_name']['#title']; ?></div>
                                        <div class="grid-col"><span class="float-right"><?php print render($content['field_mmu_case_agent_name']); ?></span></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($field_mmu_investigating_agency)): ?>
                                    <div class="grid-row flex-no-wrap border-bottom border-white text-white margin-bottom-2">
                                        <div class="grid-col"><?php print $content['field_mmu_investigating_agency']['#title']; ?></div>
                                        <div class="grid-col"><span class="float-right"><?php print render($content['field_mmu_investigating_agency']); ?></span></div>
                                    </div>
                                <?php endif; ?>
                                <div class="grid-row grid-gap-1  float-right">
                                    <div class="grid-col-auto">
                                        <a class="text-white" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $current_url ?>" target="_blank">
                                            <span><i class="fab fa-facebook-square fa-lg"></i></span>
                                        </a>
                                    </div>
                                    <div class="grid-col-auto">
                                        <a class="text-white" href="https://twitter.com/intent/tweet?url=<?php print $current_url ?>" target="_blank">
                                            <span><i class="fab fa-twitter-square fa-lg"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END Profile -->

    <!-- Submit Tips Actions -->
    <section>
        <h2 class="call-out">Submitting Case Information or Tips</h2>
        <div class="grid-row grid-gap-2">
            <div class="tablet:grid-col-4 blue-rounded-cards">
                <a href="sms://847411&body=BIAMMU - <?php print $title; ?>" id="sms_case_detail">Text BIAMMU and your tip to 847411</a>
            </div>
            <div class="tablet:grid-col-4 blue-rounded-cards">
                <a href="tel:1-833-560-2065" id="call_case_detail">Call in tips to 1-833-560-2065</a>
            </div>
            <div class="tablet:grid-col-4 blue-rounded-cards">
                <a href="mailto:OJS_MMU@bia.gov" id="email_case_detail">Email a Tip</a>
            </div>
        </div>
    </section>

    <!-- Tabluar Information -->
    <section>
        <div class="grid-row grid-gap">
            <div class="grid-col-12 tablet:grid-col-6">
                <table class="usa-table usa-table--borderless width-full mmc">
                    <caption>
                        <span class="font-sans-lg">Features</span>
                    </caption>
                    <thead>
                    </thead>
                    <tbody>
                    <?php if (!empty($field_mmu_hair)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_hair']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_hair']); ?> <?php print render($content['field_mmu_hair_other']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_eyes)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_eyes']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_eyes']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_height)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_height']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_height']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_weight)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_weight']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_weight']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_sex)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_sex']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_sex']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_race)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_race']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_race']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_otherfeatures)): ?>
                        <tr>
                            <th colspan="2" scope="row"><?php print $content['field_mmu_otherfeatures']['#title']; ?></th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php print render($content['field_mmu_otherfeatures']); ?></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="grid-col-12 tablet:grid-col-6">
                <table class="usa-table usa-table--borderless width-full mmc">
                    <caption>
                        <span class="font-sans-lg">Background</span>
                    </caption>
                    <thead>
                    </thead>
                    <tbody>
                    <?php if (!empty($field_date)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_date']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_date']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_mmu_last_loc)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_mmu_last_loc']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_mmu_last_loc']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_files)): ?>
                        <tr>
                            <th scope="row"><?php print $content['field_files']['#title']; ?></th>
                            <td class="text-right"><?php print render($content['field_files']); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($field_tribe)): ?>
                        <tr>
                            <th colspan="2" scope="row"><?php print $content['field_tribe']['#title']; ?></th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php print render($content['field_tribe']); ?></td>
                        </tr>
                    <?php endif; ?>

                    <?php
                    // DEV use only because the Tribe field name is different field_tribe1 instead of field_tribe
                    ?>
                    <?php if (!empty($field_tribe1)): ?>
                        <tr>
                            <th colspan="2" scope="row"><?php print $content['field_tribe1']['#title']; ?></th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php print render($content['field_tribe1']); ?></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- // End Tabluar Information section -->


    <!-- NamUs -->
    <?php if (!empty($field_link)): ?>
        <section>
            <div class="grid-row grid-gap-2 bg-primary padding-2 radius-md">
                <div class="tablet:grid-col-2 margin-right-2"><img src="https://namus.nij.ojp.gov/sites/g/files/xyckuh336/files/NamUsLogo2%400.5x.png"></div>
                <div class="tablet:grid-col margin-y-auto">
                    <p class="text-white">For additional information please visit NamUs</p>
                </div>
                <div class="tablet:grid-col-2 margin-y-auto">
                    <a href="<?php print render($content['field_link']['#items'][0]['original_url']); ?>" class="usa-button usa-button--outline usa-button--inverse" id="namus_btn_case_detail">View NamUs Case</a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- END NamUs -->


    <!-- RELATED DOCUMENTS and CONTACT US Area -->
    <section id="related-docs-and-contact" class="margin-y-4">
        <h2 class="call-out">More Information</h2>

        <div class="grid-row margin-top-2 ">
            <div class="tablet:grid-col-4 desktop:grid-col-5 padding-2">
                <?php if (field_infodetail_doc): ?>
                    <h3><?php print $content['field_infodetail_doc']['#title']; ?></h3>
                    <ul class="usa-list margin-top-0">
                        <!-- Related Information fields -->
                        <?php
                        foreach($content['field_infodetail_doc']['#items'] as $key => $value) {
                            print '<li>';
                            print render($content['field_infodetail_doc'][$key]);
                            print '</li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>
                <?php if (field_infodetail_page): ?>
                    <h3><?php print $content['field_infodetail_page']['#title']; ?></h3>
                    <ul class="usa-list margin-top-0">
                        <?php
                        foreach($content['field_infodetail_page']['#items'] as $key => $value) {
                            print '<li>';
                            print render($content['field_infodetail_page'][$key]);
                            print '</li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>
            </div><!-- /.tablet:grid-col-5 padding-2 -->
            <!-- CONTACT US Card comes in from template.php by calling the variable $contact_us_component.
                         The component needs to be wrapped in a structural element such as 'grid-col' -->
            <div class="grid-col-12 tablet:grid-col">
                <?php if($contact_us_component): ?>
                    <?php print $contact_us_component; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- /RELATED DOCUMENTS and CONTACT US Area -->

</div><!-- /grid-container -->

<!-- Schema.org -->
<?php
$mmu_case_type_for_schema = str_replace('"', '\"', str_replace(array("\r", "\n"), '', render($content['field_mmu_case_type'][0]['#markup'])));
$mmu_case_state_for_schema = str_replace('"', '\"', str_replace(array("\r", "\n"), '', render($content['field_mmu_last_loc']['#items'][0]['value'])));
$mmu_case_date_for_schema = format_date(strtotime(render($content['field_date']['#items'][0]['value'])), 'custom', 'Y-m-d');
$mmu_case_information_for_schema = str_replace('"', '\"', str_replace(array("\r", "\n"), '', render($content['field_mmu_case_information']['#items'][0]['safe_value'])));
$mmu_case_profile_photo = isset($content['field_profile_photo']) ? file_create_url($content['field_profile_photo']['#items'][0]['uri']) : '';
?>

<script type='application/ld+json'>
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php print $title . ' ' . $mmu_case_type_for_schema . ' in ' . $mmu_case_state_for_schema . ' on ' . $mmu_case_date_for_schema; ?>",
        "url": "<?php print $current_url ?>",
        "description": "<?php print $title . ' - ' . $mmu_case_type_for_schema . '. ' . $mmu_case_information_for_schema ?>",
        "dateModified": "<?php print format_date($node->changed) ?>",
        "image": {
            "url": "<?php print $mmu_case_profile_photo; ?>",
            "@type": "ImageObject"
        }
    }
</script>