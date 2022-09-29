<?php
$cortex_gallery_type                            = get_field('gallery_type');
$cortex_images                                  = get_field('gallery_photos');
if (empty($cortex_images)) {
    $cortex_images  = get_field('images');
}
$cortex_columns                                 = get_field('columns');

if (!empty($cortex_images)) { ?>


    <div class="entry-content-gallery-container">

        <?php
        switch ($cortex_gallery_type) {

            case 'grid':
        ?>
                <div class="entry-content-gallery-grid mar20T">
                    <div class="grid">
                        <div class="grid-sizer <?php echo $cortex_columns; ?>"></div>
                        <div class="gutter-sizer <?php echo $cortex_columns; ?>"></div>
                        <?php
                        if (!empty($cortex_images)) {
                            foreach ($cortex_images as $cortex_image) :  ?>
                                <div class="grid-item <?php echo $cortex_columns; ?>">
                                    <figure class="img_container">
                                        <a href="<?php echo esc_url($cortex_image['url']); ?>" class="entry-link" title="<?php echo esc_html($cortex_image['caption']); ?>">
                                            <img src="<?php echo esc_url($cortex_image['sizes']['medium_large']); ?>" alt="<?php echo esc_html($cortex_image['alt']); ?>" /></a>
                                    </figure>
                                </div>
                        <?php endforeach;
                        } //endforeach
                        ?>
                    </div>
                </div>
                <!--end entry-content-gallery-grid-->
            <?php
                break;

            case 'masonry':
            ?>
                <!--end entry-content-gallery-->
                <div class="entry-content-gallery-grid masonry mar20T">
                    <div class="grid">
                        <div class="grid-sizer <?php echo $cortex_columns; ?>"></div>
                        <div class="gutter-sizer <?php echo $cortex_columns; ?>"></div>
                        <?php
                        if (!empty($cortex_images)) {
                            foreach ($cortex_images as $cortex_image) :  ?>
                                <div class="grid-item <?php echo $cortex_columns; ?>">
                                    <figure class="img_container">
                                        <a href="<?php echo esc_url($cortex_image['url']); ?>" class="entry-link" title="<?php echo esc_html($cortex_image['caption']); ?>">
                                            <img src="<?php echo esc_url($cortex_image['sizes']['medium_large']); ?>" alt="<?php echo esc_html($cortex_image['alt']); ?>" loading= "lazy" /></a>
                                    </figure>
                                </div>
                        <?php endforeach;
                        } //end if empty images
                        ?>
                    </div>
                </div>
                <!--end entry-content-gallery-grid-->
            <?php
                break;

            case 'inline':

            ?>
                <div class="entry-content-inline">
                    <?php
                    if (!empty($cortex_images)) {
                        foreach ($cortex_images as $cortex_image) :  ?>
                            <div class="entry-content-image">
                                <img src="<?php echo esc_url($cortex_image['url']); ?>" alt="<?php echo esc_html($cortex_image['alt']); ?>" class="mar10B" loading= "lazy"/>
                            </div>
                    <?php endforeach;
                    } //endifempty
                    ?>
                </div>
                <!--end of entry-content-->
            <?php
                break;

            case 'inline-text':
            ?>
                <!--end entry-content-gallery-->
                <div class="entry-content-inline-text mar20T">
                    <?php
                    if (!empty($cortex_images)) {
                        foreach ($cortex_images as $cortex_image) :  ?>
                            <div class="entry-content-image">
                                <img src="<?php echo esc_url($cortex_image['url']); ?>" alt="<?php echo esc_html($cortex_image['alt']); ?>" class="mar10B" loading= "lazy" />
                                <p class="h6 mar30B"><?php echo esc_html($cortex_image['caption']); ?></p>
                            </div>
                    <?php endforeach;
                    } //endifempty images
                    ?>
                </div>
                <!--end of entry-content-->
            <?php
                break;
            default:
            ?>
                <div class="entry-content-inline">
                    <?php
                    if (!empty($cortex_images)) {
                        foreach ($cortex_images as $cortex_image) :  ?>
                            <div class="entry-content-image">
                                <img src="<?php echo esc_url($cortex_image['url']); ?>" alt="<?php echo esc_html($cortex_image['alt']); ?>" class="mar10B" loading= "lazy" />
                            </div>
                    <?php endforeach;
                    } //endifempty
                    ?>
                </div>
        <?php
                break;
        }
        ?>
    </div>
    <!--end entry-content-->
<?php
}
?>
