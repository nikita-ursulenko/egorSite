<?php get_header(); ?>
<?php 
/* Template Name: main */
?>
    <main>
        <section class="image_container">
            <div class="image_container__inner container__L">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_post_meta(get_the_ID(), 'sub_tittle', true); ?></p>
                <div class="image_container__inner__button">
                    <div class="button">
                        <a href="#reviews" id="beginnerButton">BEGINNING</a>
                    </div>
                    <div class="button">
                        <a href="#reviews" id="nowButton">NOW</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="togle__items" id="reviews">
            <div class="togle__items__explore">
                <div class="togle__items__explore__color">
                    <p>More about us —</p>
                    <h2>OUR STORY</h2>
                    <div class="togle__items__explore__radio" id="radio-container">
                        <div class="radio_div" id="startSelect">
                            <input type="radio" id="yes" name="animal" value="yes">
                            <label for="yes" class="radio-label">BEGINNING</label>
                        </div>
                        <div class="radio_div" id="resultSelect">
                            <input type="radio" id="no" name="animal" value="no">
                            <label for="no" class="radio-label">NOW</label>
                        </div>
                    </div>
                </div>
                <div class="togle__items__explore__gallery">
                    <div id="startStory" class="gallery__inner">
                        <div class="item item__top">
                            <div class="item__image">
                                <div class="item__image__inner" style="background-image: url('<?php echo B_IMG_DIR; ?>/togle_items_start/togle_items1.png');"></div>
                            </div>
                            <div class="item__text">
                                <p>
                                    <span class="item__text__span">Our Past:</span>
                                    The Path to Helping Pets
                                    Since childhood, we have had a passion for helping animals.
                                    We were inspired by our love for dogs and cats, and we were eager to help them and their owners.
                                    We saw some families struggling to provide their pets with what they needed, and it moved us to action.
                                </p>
                            </div>
                        </div>
                        <div class="item item__bottom">
                            <div class="item__image">
                                <div class="item__image__inner" style="background-image: url('<?php echo B_IMG_DIR; ?>/togle_items_start/togle_items2.png');"></div>
                            </div>
                            <div class="item__text">
                                <p>
                                    Starting small, we helped animals locally in our city. We bought collars, leashes, food - everything they needed to live comfortably. But at one point we realized that we could do much more. Until the beginning of this year we have been doing our thing locally, now it's time to spread our message and goodness throughout our country.
                                </p>
                            </div>
                        </div>
                        <div class="item item__top">
                            <div class="item__image">
                                <div class="item__image__inner" style="background-image: url('<?php echo B_IMG_DIR; ?>/togle_items_start/togle_items3.png');"></div>
                            </div>
                            <div class="item__text">
                                <p>
                                    With the advancement of technology, we realized that distance was no longer an insurmountable barrier. We decided to harness the power of the internet to help not only the animals in our city, but those in need across America. Thus began our journey to create an online pet relief service.
                                </p>
                            </div>
                        </div>
                        <div class="item item__bottom">
                            <div class="item__image">
                                <div class="item__image__inner" style="background-image: url('<?php echo B_IMG_DIR; ?>/togle_items_start/togle_items4.png');"></div>
                            </div>
                            <div class="item__text">
                                <p>
                                    By our example, we want to show people that the scope and potential of help can only depend on the size of our heart!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="resultStory" class="gallery__inner" style="display: none;">
                        <div class="item item__bottom">
                            <div class="item__image">
                                <div class="item__image__inner" style="background-image: url('<?php echo B_IMG_DIR; ?>/togle_items_end/togle_items1.jpeg');"></div>
                            </div>
                            <div class="item__text">
                                <p>
                                    <span class="item__text__span">Our help has no price.</span>
                                    We believe that true kindness cannot be measured in money, because it comes from the heart. 
                                    Each case of help is unique to us, and we do our best to please pets and their owners. 
                                    Therefore, the people we help do not know the price of the gifts they receive. 
                                    This is against our principles, because good deeds cannot have a price.
                                    <br>
                                    <span class="item__text__span">Feedback from our clients:</span>
                                </p>
                            </div>
                        </div>
                        <div class="item reviews" id="item_reviews1">
                            <div class="reviews__text right">
                                <p><span>James, Ohio</span>I am grateful to each and every one of you for what you do. My dog got the help and attention he needed. Great toy, I think it will last a long time.</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item reviews left">
                            <div class="reviews__text left__text">   
                                <p><span>Anna, Chicago</span>Thank you! Look at the way that collar looks on my dog.</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item reviews">
                            <div class="reviews__text right">   
                                <p><span> Mary, Los Angeles</span>Thank you very much. Everything fit them perfectly.</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews3.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item reviews left">
                            <div class="reviews__text left__text">   
                                <p><span>Thomas, Dallas</span>Thank you so much, look at how happy my dog is!</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews4.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item reviews">
                            <div class="reviews__text right">   
                                <p><span>Emily, Miami</span>hank you so much, now it's hard to find a more stylish dog than mine. Look at her!</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews5.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item reviews left">
                            <div class="reviews__text left__text">   
                                <p><span>Courtney, Texas</span>I am grateful for what you do! Now my bull looks even more charismatic.</p>
                            </div>
                            <div class="reviews__image">
                                <img src="<?php echo B_IMG_DIR; ?>/togle_items_end/reviews/reviews6.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tall__me">
            <!-- Всплывающий блок (модальное окно) -->
            <div id="myModal" class="modal">
                <div class="modal_content how__message">
                <h2>Steps to Fill Out an Application for Help for Your Pet:</h2>
                <ol>
                    <li><strong>First and Last Name:</strong> Include your full first and last name.</li>
                    <li><strong>Email:</strong> Enter your email address for contact.</li>
                    <li><strong>Phone:</strong> Provide your contact phone number.</li>
                    <li><strong>Pet Name:</strong> Provide the name of your pet.</li>
                    <li><strong>Problem Description:</strong> Describe in detail what your pet's problem is and what help your pet needs.</li>
                    <li><strong>Pet Photo:</strong> Attach a photo of your pet so we can better understand your pet's situation.</li>
                    <li><strong>Communication Preference:</strong> Please indicate whether you prefer phone or mail.</li>
                </ol>
                <p>After completing the application, a specialist will contact you with details and assistance for your pet.</p>
                <div class="button">
                    <button onclick="closeModal()">Close</button>
                </div>
                </div>
            </div>
            <div class="tall__me__block container__L">
                <p class="p_above">FILL OUT AN APPLICATION IN A COUPLE OF CLICKS —</p>
                <div class="tall__me__block__btn">
                    <div class="button">
                        <button  onclick="openModal()">HOW IT WORKS</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="story" class="story container__L">
            <div class="story__left">
                <h2>OUR STORY</h2>
                <p>We are a team of animal lovers who strive to make the world a better place for our furry friends. Our story began with a simple idea to help animals and their owners in times of need. Since then, we have been growing and evolving, bringing joy and relief to those who need our help.</p>
                <div class="button">
                    <a href="#contact">CONTACT</a>
                </div>
            </div>
            <div class="story__right">
                <div id="image-carousel" class="splide" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="<?php echo B_IMG_DIR; ?>/splide/img1.jpeg" alt="">
                                </div>
                                <h3>Explore our diverse dog essentials.</h3>
                                <p>Tailored for happiness.</p>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src=" <?php echo B_IMG_DIR; ?>/splide/img2.jpeg" alt="">
                                </div>
                                <h3>Happy pets, satisfied owners – that's us!</h3>
                                <p>Where smiles meet tails.</p>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="<?php echo B_IMG_DIR; ?>/splide/img3.jpeg" alt="">
                                </div>
                                <h3>Delivering joy with every order.</h3>
                                <p>Bringing love to your doorstep.</p>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="<?php echo B_IMG_DIR; ?>/splide/img4.jpeg" alt="">
                                </div>
                                <h3>Special deals for our special customers.</h3>
                                <p>Because your pets deserve the best.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="arrows__carousel">
                    <a id="btnPrev">
                        <img src="<?php echo B_IMG_DIR; ?>/splide/arrows/left-arrow.png" alt="">
                    </a>
                    <a id="btnNext">
                        <img src="<?php echo B_IMG_DIR; ?>/splide/arrows/right-arrow.png" alt="">
                    </a>
              </div>
            </div>
        </section>
        <section class="goals">
            <div class="container__L">
                <div class="goals__text">
                    <span>THERE'S TRUTH —</span>
                    <h2>OUR GOAL</h2>
                    <p>Our goal is to create a world where every animal has a home, is loved and cared for. We strive to provide each pet with a warm cozy place, delicious food and caring hands so they can be happy and healthy.</p>
                </div>
                <div class="goals__block">
                    <div class="goals__container">
                        <div class="goals__block__inner">
                            <img src="<?php echo B_IMG_DIR; ?>/goals/dog.png" alt="">
                        </div>
                        <p>Homes for<span> Every Animal</span></p>
                    </div>
                    <div class="goals__container">
                        <div class="goals__block__inner">
                            <img src="<?php echo B_IMG_DIR; ?>/goals/dog1.png" alt="">
                        </div>
                        <p>Caring for <span>Companions</span></p>
                    </div>
                    <div class="goals__container">
                        <div class="goals__block__inner">
                            <img src="<?php echo B_IMG_DIR; ?>/goals/kat1.png" alt="">
                        </div>
                        <p>Happy and <span>Healthy Pets</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="our__values">
            <div class="container__L">
                <div class="our__values__head">
                    <p>THERE'S HEART —</p>
                    <h2>OUR VALUES</h2>
                    <p>We believe in responsibility to animals and care about the well-being of every furry friend. Our work is based on honesty, empathy and a desire to do good. We are open to new ideas and ready to cooperate with those who share our interests.</p>
                </div>
                <div class="our__values__button">
                    <div class="button">
                        <a href="#contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="formContainer" class="form">
            <div class="container__L form__container">
                <div class="form__left">
                    <div class="form__left__inside">
                        <h2>WE'D LOVE TO STAY IN TOUCH</h2>
                        <p>Fill out the form below, and we'll get in touch with you shortly.</p>
                    </div>
                </div>
                <div class="form__right">
                    <form class="contacts__form" action="<?php echo admin_url('admin-ajax.php?action=callback_mail') ?>" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name"required placeholder="Enter your name" maxlength="50" min="3">

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email" min="5">

                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone">
                        
                        <label for="pet">Pet's name:</label>
                        <input type="text" id="pet" name="pet" required placeholder="Enter your pet's name" maxlength="50" min="2">

                        <label for="problemDescription">Description:</label>
                        <textarea id="problemDescription" name="problemDescription" rows="4" cols="50" maxlength="150" placeholder="Enter your problem"></textarea>
                        
                        <div class="file-upload" style="padding-top: 20px">
                            <label for="petPhoto">Pet photo:</label>
                            <br>
                            <label for="petPhoto" style="font-weight: 300; cursor: pointer;">
                            <p style = "font-size: 14px; background-color: #c60e3b; padding: 3px; width: max-content; color: white; margin-top: 5px; display: inline;">Select file:</p></label>
                            <span id="fileName"></span>
                            <input type="file" id="petPhoto" name="petPhoto" accept="image/*" style="display: none;">
                        </div>

                        <label for="preferredCoontact">Preferred Contact Method:</label>
                        <select id="preferredCoontact" name="preferredContact" >
                            <option value="phone">Phone</option>
                            <option value="email">Email</option>
                        </select>  
                        <button type="submit" class="button">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Всплывающий элемент и оверлей -->
    <div id="overlay"></div>
    <div id="popup">
        <p>We will contact you shortly!</p>
        <a class="button" href="#" onclick="closePopup()">Закрыть</a>
    </div>
<?php get_footer();?>