<form id="contact-form">
    <input type="text" name="name" placeholder="نام شما" required>
    <input type="email" name="email" placeholder="ایمیل شما" required>
    <textarea name="message" placeholder="پیام شما" required></textarea>
    <input type="hidden" name="security" value="<?php echo wp_create_nonce('seokar_ajax_nonce'); ?>">
    <button type="submit">ارسال پیام</button>
</form>
