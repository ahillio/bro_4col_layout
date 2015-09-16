<?php
/**
 * @file
 * Display Suite Four Column Bricks template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $header: Rendered content for the "Header" region.
 * - $header_classes: String of classes that can be used to style the "Header" 
 * - region.
 *
 * - $first: Rendered content for the "Above First" region.
 * - $first_classes: String of classes that can be used to style the 
 * - "Above First" region.
 *
 * - $second: Rendered content for the "Above Second" region.
 * - $second_classes: String of classes that can be used to style the 
 * - "Above Second" region.
 *
 * - $third: Rendered content for the "Above Third" region.
 * - $third_classes: String of classes that can be used to style the 
 * - "Above Third" region.
 *
 * - $fourth: Rendered content for the "Above Fourth" region.
 * - $fourth_classes: String of classes that can be used to style the 
 * - "Above Fourth" region.
 *
 * - $footer: Rendered content for the "Footer" region.
 * - $footer_classes: String of classes that can be used to style the "Footer" 
 * - region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links. -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $header_wrapper; ?> class="ds-header<?php print $header_classes; ?>">
      <?php print $header; ?>
    </<?php print $header_wrapper; ?>>

    <<?php print $first_wrapper; ?> class="ds-first-col col-md-3<?php print $first_classes; ?>">
      <?php print $first; ?>
    </<?php print $first_wrapper; ?>>

    <<?php print $second_wrapper; ?> class="ds-second-col col-md-3<?php print $second_classes; ?>">
      <?php print $second; ?>
    </<?php print $second_wrapper; ?>>

    <<?php print $third_wrapper; ?> class="ds-third-col col-md-3<?php print $third_classes; ?>">
      <?php print $third; ?>
    </<?php print $third_wrapper; ?>>

    <<?php print $fourth_wrapper; ?> class="ds-fourth-col col-md-3<?php print $fourth_classes; ?>">
      <?php print $fourth; ?>
    </<?php print $fourth_wrapper; ?>>

    <<?php print $footer_wrapper; ?> class="ds-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </<?php print $footer_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms. -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
