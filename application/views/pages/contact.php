<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the contact page template for a mobile first responsive site using bootstrap and jquery
-->

<div class="form-container container-fluid">
    <h1 class="display-4 text-center text-white mt-3 mb-2">Contact Us</h1>
    <div class="text-secondary text-center pb-4"  id="user-msg">
        <p class="px-1">Fill out your information and we'll be in touch shortly.</p>
    </div>
    <form class="mx-auto my-0" id="contactForm" name="contactForm" method="post" action="../assets/email.php">
        <div class="form-group">
            <input class="form-control" type="text" id="name" name="name" placeholder="Name" maxlength="64">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="email1" name="remail1" placeholder="Return Email" maxlength="64">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="email2" name="remail2" placeholder="Re-enter Email" maxlength="64">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject" maxlength="64">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="10" maxlength="1000"></textarea>
        </div>
        <div class="form__button-container text-center mb-5">
            <button class="btn btn-secondary rounded mr-2 px-3 py-1" type="button" id="btn__send">Send</button>
            <button class="btn btn-secondary rounded px-3 py-1" type="button" id="btn__clear">Clear</button>
        </div>
    </form>