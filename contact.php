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
                    <div class="form-group">
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
                        <textarea class="form-control" rows="3" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">SEND</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
                <h4>store locations & opening hours</h4>


                <h5>BRISBANE - gasworks</h5>

                <p>76 Skyring Terrace, Newstead, Queenland 4006<br/>
                    p. 07 3252 3477</p>

                <h6>opening hours</h6>

                <p>Mon - Fri 7am - 9pm<br/>
                    Sat - Sun 9am - 6pm</p>


                <h5>BRISBANE - JAMES STREET MARKETS</h5>

                <p>20-22 James Street, Fortitude Valley, Queensland 4006<br/>
                    Fruit & Veg p. 07 3252 3477<br/>
                    Meats p. 07 3854 0440<br/>
                    Quench p. 07 3252 9922</p>

                <h6>opening hours</h6>

                <p>Mon - Fri 8am - 8pm<br/>
                    Sat - Sun 9am - 6pm</p>


                <h5>gold coast - ferry road MARKETS</h5>

                <p>107 Ferry Road, Southport, Queensland 4215<br/>
                    Fruit & Veg p. 07 5591 5361<br/>
                    Breads p. 07 5532 4749<br/>
                    Meats p. 07 5591 5416<br/>
                    Deli p. 07 5591 5066<br/>
                    Quench p. 07 5591 5927</p>

                <h6>opening hours</h6>

                <p>Mon - Fri 8am - 8pm<br/>
                    Sat - Sun 9am - 6pm</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>