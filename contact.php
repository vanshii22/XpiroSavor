<!-- Navbar start -->
<?php include_once 'components/navbar.php'; ?>
<!-- Navbar end -->
<!-- Contact Hero section -->
<section id="contact-hero">
    <div class="container">
        <h3 class="heading text-white">Contact Us</h3>
        <p class="para text-white">Please fill out the form below to send us a message or inquiry. Our team will respond
            as soon as possible.</p>
    </div>
</section>
<!-- Contact Hero section end-->
<!-- Contact Form -->
<section id="contact-form">
    <div class="container">
        <form class="row g-3" action="send.php" method='post'>
            <div class="col-md-4">
                <label for="inputName4" class="form-label">Name</label>
                <input type="text" name="name" required class="form-control" id="inputName4" placeholder="Your Name">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" required class="form-control" id="inputEmail4"
                    placeholder="Your Email">
            </div>
            <div class="col-md-4">
                <label for="inputSubject4" class="form-label">Subject</label>
                <input type="subject" name="subject" required class="form-control" id="inputSubject4"
                    placeholder="Your Subject">
            </div>
            <div class="col-12">
                <label for="exampleFormControlMessage1" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlMessage1" rows="3"
                    placeholder="Type Your Message Here"></textarea>
            </div>
            <div class="col-12">
                <button class="secondary-btn" type="submit" name="send">Send</button>
            </div>
        </form>
    </div>
</section>

<!-- Contact Form end-->
<!-- Contact Cards -->
<section id="contact-cards">
    <div class="container">
        <div class="row  ">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="sub-heading mt-4">Contact Information</h5>
                        <p class="para">Feel free to get in touch with us for any inquiries, support, or collaboration
                            opportunities. Here's how you can reach us:</p>
                        <ul>
                            <li><span>Address:</span>Meerut, Uttar Pradesh, India - 250001</li>
                            <li><span>Email:</span>info@expirosavor.com</li>
                            <li><span>Phone:</span>+91 7078546814</li>
                            <li><span>Social Media: </span>@expirosavor</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="sub-heading mt-4">Customer Support</h5>
                        <p class="para">Our dedicated support team is available to assist you with any platform-related
                            queries or issues. For immediate assistance, please reach out to our customer support:</p>
                        <ul>
                            <li><span>Email Support:</span>support@expirosavor.com</li>
                            <li><span>Phone Support:</span> +91 9193378534</li>
                            <li><span>Operating Hours:</span>24*7</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Cards End -->
<!-- Faqs Start -->
<section id="faqs">
    <div class="container">
        <h3 class="heading text-center">Frequently Asked Questions (FAQs)</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is Expiro Savor and its mission?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para"> Expiro Savor is a platform dedicated to preventing waste by providing a space
                            where expiring products find purpose. Our mission is to connect individuals and
                            organizations to reduce waste while supporting charitable causes through donations and sales
                            of surplus items.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I donate or sell expiring products through Expiro Savor?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para">To donate or sell expiring products, sign up or log in to your account. Then,
                            navigate to the "Add Product" section, input product details, and choose whether to donate
                            or sell at a discount.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How are donations matched with NGOs?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para"> Donations are matched with nearby NGOs based on the product type, location, and
                            NGO preferences. Users can also select a specific NGO or allow the platform to suggest a
                            match.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What are the benefits of subscribing to Expiro Savor?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para"> Subscribers gain access to exclusive features such as unlimited product
                            listings, priority NGO matching, advanced analytics, dedicated support, and flexible
                            subscription management.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How does Expiro Savor ensure the safety and validity of donations?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para">Expiro Savor verifies NGOs and their requirements before facilitating donations.
                            Additionally, user reviews and feedback mechanisms help maintain the platform's integrity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I track the impact of my donations or sales?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para">Yes, subscribers can access an advanced analytics dashboard to track the impact
                            of their contributions, providing insights into the positive outcomes achieved.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        What types of products can I list on Expiro Savor?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para">You can list various expiring products such as food items, medicines, and
                            other essentials, contributing to waste reduction and supporting charitable causes.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How can I get involved or collaborate with Expiro Savor?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="para">For partnership inquiries, collaborations, or media-related matters, reach
                            out to our partnerships team through the provided email addresses on the Contact Us
                            page.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faqs end -->
<!-- footer section start -->
<?php include_once 'components/footer.php'; ?>
