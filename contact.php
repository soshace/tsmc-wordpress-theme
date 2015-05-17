<?php
/**
 * Template Name: Contact
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>
<div class="container mainArea">
    <?php get_template_part('logo', 'top'); ?>
    <div class="main-content contact-page">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h4>contact</h4>

                <form>
                    <div class="form-group">
                        <label>Subject:</label>
                        <select id="subject" name="subject" class="form-control">
                            <option>Choose subject</option>
                            <option>Choose subject1</option>
                            <option>Choose subject2</option>
                        </select>
                    </div>
                    <div class="form-group contact-page__sex">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Mr
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> Mrs
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> Ms
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" placeholder="Surname">
                    </div>
                    <div class="form-group">
                        <label for="contact-number">Contact Number</label>
                        <input type="text" class="form-control" id="contact-number" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="9" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">SEND</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
                <h4>store locations & opening hours</h4>

                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>