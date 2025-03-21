<?php
$post_id = get_the_ID();
$likes = get_post_meta($post_id, 'seokar_likes', true);
$likes = $likes ? $likes : 0;
?>
<button class="like-button" data-postid="<?php echo $post_id; ?>">❤️ <?php echo $likes; ?></button>
<?php
$custom_field_value = seokar_get_custom_field(get_the_ID());
if (!empty($custom_field_value)) {
    echo '<p class="custom-field">📌 ' . esc_html($custom_field_value) . '</p>';
}
?>
<img src="<?php echo esc_url(seokar_get_featured_image_webp(get_the_ID())); ?>" alt="<?php the_title(); ?>">
