   @extends('website.website')

   @section('content')
<!-- main -->
   <section class="hero-section" id="hero">
    <div class="hero">
        <div class="hero-text">
             <!-- hero image -->
       <div class="heroImg">
            <div class="textMain">
                <h2 class="heading1">BullyProof Hockey</h2>
                <p class="pp">Some things are not part of the sport.<br>Parents and coaches are the first line in defense of respect for sports.</p>
                <a href="#facts" class="btn_learnmore">Learn More</a>
                <div class="scroll-down">
                    <a href="#support" class="scroll-down-link">
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <!-- support and behaviour -->
    <section class="support-section" id="support">
<div class="container">
    <div class="support-text2">
        <h2 class="headingx">
            <span class="support-text">Support and behaviour</span>
        </h2>
        <p>
            Parent support and behavior play a crucial role in minor hockey. Hockey is not just a sport, it's also a learning experience that teaches children life skills such as teamwork, sportsmanship, and dedication. Parents play a key role in fostering a positive environment that enables children to develop these skills.<br><br>

            When parents provide emotional support, encourage healthy competition, and model good sportsmanship, they help create a positive experience for their children. Additionally, parents who demonstrate respect towards coaches, referees, and other players help establish an environment where children feel comfortable and confident. On the other hand, negative behaviors such as shouting at officials, arguing with other parents, or criticizing children can undermine the positive experience and create unnecessary stress for the children.<br><br>
            
            It's important for parents to understand that their behavior affects their children. By setting a positive example and fostering an inclusive environment, parents can help their children develop a love for the sport and a commitment to being their best both on and off the ice.
        </p>
        </div>
    <div class="support-image">
        <img src="{{ asset('assets/website/images/support_image.png')}}" alt="support image" class="supportimg">
         <!-- button -->
         </div>
        <div class="button_container">
        <!-- learn more button -->
            <a href="" class="btn">Learn More</a>
            <a href="" class="btn4">Download Guide</a>
        </div>
    </div>

    </section>

    <!-- paragraph-->
    <section id="aboutus">
        <div class="container">
            <div class="support-text2">
                <h2 class="headingx">
                    <span class="about_us-text">About Us</span>
                </h2>
                <p>
                    The Bully Proof Hokey Foundation is a non-profit organization dedicated to promoting positive behavior and ending bullying in the hockey community. The foundation believes that everyone deserves to feel safe, respected and included, regardless of race, religion, gender, or ability.<br><br>

                    The foundation works to raise awareness about the negative impact of bullying and provides resources and support to individuals, families, and communities. It offers educational programs, training sessions, and resources for parents, coaches, and players to help them understand the impact of bullying and learn how to recognize, prevent, and respond to it.<br><br>

                    We are committed to creating a culture of respect and inclusion in the hockey community. By working together with parents, coaches, players, and other organizations, the foundation aims to create a safe and supportive environment for everyone who is involved with hockey, where everyone is free to be their best and reach their full potential.
                </p>
            </div>
            <div class="about_us_img">
                <img src="{{ asset('assets/website/images/about_us.png')}}" alt="support image" class="about_us_img">
            </div>
          
            <div class="button_container">
                <a href="" class="btn">Help Phone</a>
                <a href="" class="btn4">See Our Campaign</a>
              </div>
        </div>
    </section>
    <!-- events section -->

    <!-- this data can get updated dyanamically and will be coming out from database-->
    <section id="events">
        <h2 class="headingx">
            <span class="events_actiontext">Events and Actions</span>
        </h2>
        <!-- start of the event-->
        <section class="container_event">
            <!-- start of event sections -->
              <!-- register1-->
                <div class="box1">
                    <img src="{{ asset('assets/website/images/events_camp.png')}}" alt="register camp image" class="event_img">
                    <h2 class="heading3">
                        Bully Proof Hockey Camp
                    </h2>
                    <!-- date -->
                    <div class="lower">
                        <div class="left">
                            <p class="date">March 27, 2023</p>
                            <p class=date2>Join our charity hockey event
                            by playing, celebrating, saying words of encouragement and being kind.</p>
                        </div>
                        <!-- button -->
                        <div class="button_container2">
                            <a href="" class="btn11">Register</a>
                        </div>
                    </div>
                </div>
                <!-- register-2 -->
                <div class="box1">
                <img src="{{ asset('assets/website/images/register2.jpg')}}" alt="register fans image" class="event_img">
                    <h2 class="heading3">Bully Proof Hockey Fans</h2>
                    <!-- date -->
                    <div class="lower">
                        <div class="left">
                            <p class="date">March to December,2023</p>
                            <p class=date2>Let's cheer for officials and players! Be a fan and celebrate the wins and the fails
                            of both teams.</p>
                        </div>
                    <!-- button -->
                        <div class="button_container2">
                            <a href="" class="btn11">Register</a>
                        </div>
                    </div>
                </div>
                    <!-- register-3 -->
                    <div class="box1">
                    <img src="{{ asset('assets/website/images/register3.jpg')}}" alt="register tim contest image" class="event_img">
                                <h2 class="heading3">Bully Proof Tims Contest</h2>
                                <!-- date -->
                        <div class="lower">
                            <div class="left">
                                <p class="date">January to December, 2023</p>
                                    <p class= "date2">Take a picture with a official or members of the other team and post on Instagram or twitter using the hashtag #bullyproofhockey</p>
                            </div>
                            <!-- button -->
                            <div class="button_container2">
                                <a href="" class="btn_learnmore1">Participate</a>
                            </div>
                        </div>  
                    </div>
            </section>
</section>
<section id="testimonials">
    <h2 class="headingx1">
        <p class="mobile-events-text">What Officals, Coaches and Players Say</p>
    </h2>
    <!-- Small text-->
    <p class="small_words1">
        How bullying is impacting life and the sport.
    </p>
        <section class="testimonial_event">
            <!-- testimonial section -->
            <!-- testimonial1 -->
            <div class="box11">
             <img src="{{ asset('assets/website/images/t1.png')}}" class="testimonial_img" alt="photo of a middle age man official">
                    <!-- <img src="images/t1.png" class="testimonial_img" alt="t1"> -->
                <div class="lower3">
                    <p class="date3">
                        “Children imitate coaches by complaining and paying more attention to the referee than the game.”
                    </p>
                    <h3 class="heading11">John Carter</h3>
                    <p class="small_words">Hockey Official</p>
                </div>
            </div>
            <!-- end of testimonial 1 -->

            <!-- testimonial2 -->
            <div class="box11">
            <img src="{{ asset('assets/website/images/t2.png')}}" class="testimonial_img" alt="photo of a young woman hockey player">
                <!-- <img src="images/t2.png" class="testimonial_img" alt="t2"> -->
                <div class="lower3">
                    <p class= "date3">
                        “I think that a lot parents think that physical play - being tough - helps you get to the NHL
                        level.”
                    </p>
                    <h3 class="heading11">Sophie Moore</h3>
                    <p class="small_words">Hockey College Player</p>
                </div>
            </div>
            <!-- end of testimonial 2-->

            <div class="box11">
            <img src="{{ asset('assets/website/images/t3.png')}}" class="testimonial_img" alt="photo of a male coach">
                <!-- <img src="images/t3.png" class="testimonial_img" alt="photo of a male coach"> -->
            <div class="lower3">
                <p class= "date3">
                    “When I was a kid I could hear parents complaining that girls should do ice skating and not hockey..”
                    </p>
                    <h3 class="heading11">Matt Cannon</h3>
                    <p class="small_words">Hockey Coach</p>
                </div>
            </div>
                 <!-- end of testimonial 3-->
        </section>      
</section>

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

