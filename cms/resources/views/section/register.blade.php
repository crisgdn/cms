@extends('website.website')

@section('content')
    <!-- contact section-->
<section id="contact_sectionx">
    <section class="contact_section">
           <div class="contactus1">
        <h2 class="contactus">Contact Us</h2>
            <h3 class="small_words2">We Want To Hear From You</h3>
            <div class="contactus2">
                <div class="contact_img">
                    <!-- background_contact_us.jpg ---->
            </div>
            <form action = "scripts/actionpage.php">
                <div class="contactField">
                    <input type="text" class="contact_field" id="name" name="name" placeholder="Name">
                    <input type="text" class="contact_field" id="email" name="email" placeholder="Email">
                    <!-- for message -->
                    <textarea class="contact_field1" id="message" name="message" placeholder="Write Your Message"></textarea>  
                <!-- button -->
                    <div class="button_container3">
                    <a href="" class="btn_learnmore4">Send Message</a>
                    </div>
            </div>
            </form>
             </div>
        </div>
    </section>
</section>
@endsection