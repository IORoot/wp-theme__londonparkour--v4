<?php

// https://github.com/advancedforms/advanced-forms/commit/cc6ade136992c8eafe52a59b50cd589c0baa8bb3

add_action('af/form/success_message', 'custom_success_message', 10, 3);


function custom_success_message($success_message, $form, $args)
{

    $new_message = '
    <div class="mt-10">
        <div id="class-help" class="text-center text-night">
            
            <div class="text-4xl md:text-6xl mb-4 font-semibold">Thanks for contacting us!</div><div class="text-2xl md:text-3xl mb-20 text-smoke">More help, support and social media.</div>
            </div>
            
            <div class="flex flex-wrap"><div class="block w-full md:w-1/2 lg:w-1/4 pl-4 md:pl-10 mb-4 md:mb-10 relative overflow-hidden">
                <a href="/support" class="flex flex-col bg-Orange400 text-white fill-white hover:bg-night hover:text-Orange400 hover:fill-Orange400 p-4 xl:p-10 rounded wavey-min bg-no-repeat bg-right-bottom mode-overlay"><svg class="p-4 md:p-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14.97,18.95L12.41,12.92C11.39,14.91 10.27,17 9.31,18.95C9.3,18.96 8.84,18.95 8.84,18.95C7.37,15.5 5.85,12.1 4.37,8.68C4.03,7.84 2.83,6.5 2,6.5C2,6.4 2,6.18 2,6.05H7.06V6.5C6.46,6.5 5.44,6.9 5.7,7.55C6.42,9.09 8.94,15.06 9.63,16.58C10.1,15.64 11.43,13.16 12,12.11C11.55,11.23 10.13,7.93 9.71,7.11C9.39,6.57 8.58,6.5 7.96,6.5C7.96,6.35 7.97,6.25 7.96,6.06L12.42,6.07V6.47C11.81,6.5 11.24,6.71 11.5,7.29C12.1,8.53 12.45,9.42 13,10.57C13.17,10.23 14.07,8.38 14.5,7.41C14.76,6.76 14.37,6.5 13.29,6.5C13.3,6.38 13.3,6.17 13.3,6.07C14.69,6.06 16.78,6.06 17.15,6.05V6.47C16.44,6.5 15.71,6.88 15.33,7.46L13.5,11.3C13.68,11.81 15.46,15.76 15.65,16.2L19.5,7.37C19.2,6.65 18.34,6.5 18,6.5C18,6.37 18,6.2 18,6.05L22,6.08V6.1L22,6.5C21.12,6.5 20.57,7 20.25,7.75C19.45,9.54 17,15.24 15.4,18.95C15.4,18.95 14.97,18.95 14.97,18.95Z"></path></svg><div class="text-xl border-t-2 pt-2 mt-2">Wiki</div>
                    <div class="md:h-40">
                        <p>Answers to popular questions can be found on our support wiki.</p>
                        <div class="mt-4">/support</div>
                    </div>
                </a>
            </div>
            
            <a href="/contact" class="block w-full md:w-1/2 lg:w-1/4 pl-4 md:pl-10 mb-4 md:mb-10 relative overflow-hidden"><div class="flex flex-col bg-Cyan500 text-white fill-white hover:bg-night hover:text-Cyan500 hover:fill-Cyan500 p-4 xl:p-10 rounded wavey-min bg-no-repeat bg-right-bottom mode-overlay">
                    <svg class="p-4 md:p-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path>
                    </svg>
            
                    <div class="text-xl border-t-2 pt-2 mt-2">Contact</div>
                    <div class="md:h-40">
                        <p>No bots or A.I. Directly email one of our team using the contact form and talk to a real person.</p>
                        <div class="mt-4">/contact</div>
                    </div>
                </div>
            </a>
            
            <a href="https://instagram.com/london_parkour" target="_blank" class="block w-full md:w-1/2 lg:w-1/4 pl-4 md:pl-10 mb-4 md:mb-10 relative overflow-hidden" rel="noopener">
                <div class="flex flex-col bg-instagram text-white fill-white hover:bg-night hover:text-instagram hover:fill-instagram p-4 xl:p-10 rounded wavey-min bg-no-repeat bg-right-bottom mode-overlay">
                    <svg class="p-4 md:p-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"></path>
                    </svg>
                    <div class="text-xl border-t-2 pt-2 mt-2">Instagram</div>
                    <div class="md:h-40">
                        <p>Our instagram channel is where we post all news. That way, everyone knows where to go for latest updates.</p>
                        <div class="mt-4">@london_parkour</div>
                    </div>
                </div>
            </a>
            
            <a href="https://www.youtube.com/londonparkour" target="_blank" class="block w-full md:w-1/2 lg:w-1/4 pl-4 md:pl-10 mb-4 md:mb-10 relative overflow-hidden" rel="noopener">
                <div class="flex flex-col bg-youtube text-white fill-white hover:bg-night hover:text-youtube hover:fill-youtube p-4 xl:p-10 rounded wavey-min bg-no-repeat bg-right-bottom mode-overlay">
                    <svg class="p-4 md:p-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z"></path>
                    </svg>
                    <div class="text-xl border-t-2 pt-2 mt-2">YouTube </div>
                    <div class="md:h-40">
                        <p>Tutorials, demonstrations, promos, adverts and previous projects are all hosted on our youtube channel.</p>
                        <div class="mt-4">@londonparkour</div>
                    </div>
                </div>
            </a>
        
        </div>
    </div>';

    return $new_message;
}
