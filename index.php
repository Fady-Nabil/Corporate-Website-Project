<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>
		
<?php include "includes/slider.php"; ?>

<?php include "includes/services.php"; ?>

<?php include "includes/portfolio.php"; ?>
			
<?php include "includes/team.php"; ?>	

<?php include "includes/testimonials.php"; ?>			

<?php include "includes/blog.php"; ?>	

<!-- start contact -->
    <section class="section-padding contact" data-stellar-background-ratio="0.5" id="Contact">
        <div class="contact-header center">
            <h1 class="white">Contact Us</h1>
            <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
        </div>

        <form class="contact-form animation" data-animation="zoomIn">
            <fieldset>
                <input type="text" id="name" name="name" placeholder="Name">
            </fieldset>
            <fieldset>
                <input type="email" id="email" name="email" placeholder="Email">
            </fieldset>
            <fieldset>
                <input type="text" id="subject" name="subject" placeholder="Subject">
            </fieldset>
            <fieldset>
                <textarea rows="7" cols="30" id="message" name="message" placeholder="Message"></textarea>
            </fieldset>
            <fieldset>
                <input type="submit" id="submit"  name="submit" value="Submit">
            </fieldset>

        </form>
        <br/>
        <p class="result"></p>
    </section>
<!-- end contact -->	
			
<?php include "includes/footer.php"; ?>

			