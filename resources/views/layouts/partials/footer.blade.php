<footer id="colophon" class="site-footer" dir="ltr">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a class="site-title"><span>Em</span>Code</a>
                <p>{{ __('We\'re a digital agency focused on creative and results-driven solutions.') }}</p>
                <p>{{ __('We measure our success by the results we drive for our clients.') }}</p>
            </div>
            <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                <h3>{{ __('Keep in touch') }}</h3>
                <ul class="list-unstyled contact-links">
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:support@gemcode.ir">support@gemcode.ir</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+989381133408">+98 938 11 33 408 </a></li>
                    <li><i class="fa fa-whatsapp" aria-hidden="true"></i><a href="whatsapp://send?abid=+18122506890&text=Hello%2C%20EMCODE!">+1 812 250 68 90</a></li>
                    {{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>20 Leo, Armenia</p></li> --}}
                </ul>
            </div>
            <div class="clearfix visible-xs"></div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                <h3>{{ __('Featured links') }}</h3>
                <ul class="list-unstyled featured-links">
                    <li class="active"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('front.portfolios.index') }}">{{ __('Blog') }}</a></li>
                    <li><a href="{{ route('blog') }}">{{ __('Portfolio') }}</a></li>
                    <li><a href="{{ route('front.contacts.show') }}">{{ __('Contact') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <div class="social-links">
                        <a class="twitter-bg" href="https://twitter.com/KiasaraeiM"><i class="fa fa-twitter"></i></a>
                        <a class="facebook-bg" href="https://www.facebook.com/mohammad.eminay.3"><i class="fa fa-facebook"></i></a>
                        <a class="instagram" href="https://www.instagram.com/emcode.ir/"><i class="fa fa-instagram"></i></a>
                        <a class="linkedin-bg" href="https://www.linkedin.com/in/mohammad-imani-08402417b/"><i class="fa fa-linkedin"></i></a>
                    </div><!-- /.social-links -->
                </div>
                <div class="col-xs-4">
                    <div class="text-right">
                        <p>&copy; EmCode</p>
                        <p>All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.copyright -->
</footer><!-- /#footer -->
