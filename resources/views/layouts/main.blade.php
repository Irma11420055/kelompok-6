<!DOCTYPE HTML>
<html>
<head>
    <title>Web Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('template/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('template/web/css/form.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('template/web/js/jquery1.min.js') }}"></script>
    <!-- start menu -->
    <link href="{{ asset('template/web/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('template/web/js/megamenu.js') }}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!--start slider -->
    <link rel="stylesheet" href="{{ asset('template/web/css/fwslider.css') }}" media="all">
    <script src="{{ asset('template/web/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/web/js/css3-mediaqueries.js') }}"></script>
    <script src="{{ asset('template/web/js/fwslider.js') }}"></script>
    <!--end slider -->
    <script src="{{ asset('template/web/js/jquery.easydropdown.js') }}"></script>
</head>


<body>

<div class="header-top">
    <div class="wrap">
        <div class="header-top-left">

        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="login.html">Account</a></li> |
                <li><a href="checkout.html">Wishlist</a></li> |
                <li><a href="checkout.html">Checkout</a></li> |
                <li><a href="login.html">Log In</a></li> |
                <li><a href="register.html">Sign Up</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('template/web/images/logo.png') }}" alt=""/></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="index.html">Home</a></li>
                    <li><a class="color4" href="#">women</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Contact Lenses</h4>
                                        <ul>
                                            <li><a href="womens.html">Daily-wear soft lenses</a></li>
                                            <li><a href="womens.html">Extended-wear</a></li>
                                            <li><a href="womens.html">Lorem ipsum </a></li>
                                            <li><a href="womens.html">Planned replacement</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Sun Glasses</h4>
                                        <ul>
                                            <li><a href="womens.html">Heart-Shaped</a></li>
                                            <li><a href="womens.html">Square-Shaped</a></li>
                                            <li><a href="womens.html">Round-Shaped</a></li>
                                            <li><a href="womens.html">Oval-Shaped</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Eye Glasses</h4>
                                        <ul>
                                            <li><a href="womens.html">Anti Reflective</a></li>
                                            <li><a href="womens.html">Aspheric</a></li>
                                            <li><a href="womens.html">Bifocal</a></li>
                                            <li><a href="womens.html">Hi-index</a></li>
                                            <li><a href="womens.html">Progressive</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color5" href="#">Men</a>
                        <div class="megapanel">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Contact Lenses</h4>
                                    <ul>
                                        <li><a href="mens.html">Daily-wear soft lenses</a></li>
                                        <li><a href="mens.html">Extended-wear</a></li>
                                        <li><a href="mens.html">Lorem ipsum </a></li>
                                        <li><a href="mens.html">Planned replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sun Glasses</h4>
                                    <ul>
                                        <li><a href="mens.html">Heart-Shaped</a></li>
                                        <li><a href="mens.html">Square-Shaped</a></li>
                                        <li><a href="mens.html">Round-Shaped</a></li>
                                        <li><a href="mens.html">Oval-Shaped</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Eye Glasses</h4>
                                    <ul>
                                        <li><a href="mens.html">Anti Reflective</a></li>
                                        <li><a href="mens.html">Aspheric</a></li>
                                        <li><a href="mens.html">Bifocal</a></li>
                                        <li><a href="mens.html">Hi-index</a></li>
                                        <li><a href="mens.html">Progressive</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color6" href="other.html">Other</a></li>
                    <li><a class="color7" href="other.html">Purchase</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <div class="tag-list">
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c1" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>sed diam nonummy</h3><a href=""></a></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>No Products</h3><a href=""></a></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="section group example">
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{ asset('template/web/images/2.png') }}"><span class="f-text">Free Shipping on orders over $ 100</span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{ asset('template/web/images/3.png') }}"><span class="f-text">Call us! toll free-222-555-6666 </span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="wrap">
            <!-- <div class="section group">
                 <div class="f_10">
                   <div class="col_1_of_4 span_1_of_4">
                       <h3>Facebook</h3>
                       <script>(function(d, s, id) {
                         var js, fjs = d.getElementsByTagName(s)[0];
                         if (d.getElementById(id)) return;
                         js = d.createElement(s); js.id = id;
                         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                         fjs.parentNode.insertBefore(js, fjs);
                       }(document, 'script', 'facebook-jssdk'));</script>
                       <div class="like_box">
                           <div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                       </div>
                   </div>
                   <div class="col_1_of_4 span_1_of_4">
                       <h3>From Twitter</h3>
                       <div class="recent-tweet">
                           <div class="recent-tweet-icon">
                               <span> </span>
                           </div>
                           <div class="recent-tweet-info">
                               <p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                           </div>
                           <div class="clear"> </div>
                       </div>
                       <div class="recent-tweet">
                           <div class="recent-tweet-icon">
                               <span> </span>
                           </div>
                           <div class="recent-tweet-info">
                               <p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                           </div>
                           <div class="clear"> </div>
                       </div>
                   </div>
               </div>
               <div class="f_10">
                   <div class="col_1_of_4 span_1_of_4">
                       <h3>Information</h3>
                       <ul class="f-list1">
                           <li><a href="#">Duis autem vel eum iriure </a></li>
                           <li><a href="#">anteposuerit litterarum formas </a></li>
                           <li><a href="#">Tduis dolore te feugait nulla</a></li>
                            <li><a href="#">Duis autem vel eum iriure </a></li>
                           <li><a href="#">anteposuerit litterarum formas </a></li>
                           <li><a href="#">Tduis dolore te feugait nulla</a></li>
                        </ul>
                   </div>
                   <div class="col_1_of_4 span_1_of_4">
                       <h3>Contact us</h3>
                       <div class="company_address">
                                   <p>500 Lorem Ipsum Dolor Sit,</p>
                                      <p>22-56-2-9 Sit Amet, Lorem,</p>
                                      <p>USA</p>
                              <p>Phone:(00) 222 666 444</p>
                              <p>Fax: (000) 000 00 00 0</p>
                             <p>Email: <span>mail[at]leoshop.com</span></p>

                      </div>
                      <div class="social-media">
                            <ul>
                               <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
                               <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
                               <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
                               <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
                           </ul>
                      </div>
                   </div>
               <div class="clear"></div>
           </div>
           <div class="clear"></div>
         </div>-->





            <div class="section group example">
                <div class="col_1_of_f_1 span_1_of_f_1">
                    <div class="section group example">
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Facebook</h3>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="like_box">
                                <div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                            </div>
                        </div>
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>From Twitter</h3>
                            <div class="recent-tweet">
                                <div class="recent-tweet-icon">
                                    <span> </span>
                                </div>
                                <div class="recent-tweet-info">
                                    <p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="recent-tweet">
                                <div class="recent-tweet-icon">
                                    <span> </span>
                                </div>
                                <div class="recent-tweet-info">
                                    <p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col_1_of_f_1 span_1_of_f_1">
                    <div class="section group example">
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Information</h3>
                            <ul class="f-list1">
                                <li><a href="#">Duis autem vel eum iriure </a></li>
                                <li><a href="#">anteposuerit litterarum formas </a></li>
                                <li><a href="#">Tduis dolore te feugait nulla</a></li>
                                <li><a href="#">Duis autem vel eum iriure </a></li>
                                <li><a href="#">anteposuerit litterarum formas </a></li>
                                <li><a href="#">Tduis dolore te feugait nulla</a></li>
                            </ul>
                        </div>
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Contact us</h3>
                            <div class="company_address">
                                <p>500 Lorem Ipsum Dolor Sit,</p>
                                <p>22-56-2-9 Sit Amet, Lorem,</p>
                                <p>USA</p>
                                <p>Phone:(00) 222 666 444</p>
                                <p>Fax: (000) 000 00 00 0</p>
                                <p>Email: <span>mail[at]leoshop.com</span></p>

                            </div>
                            <div class="social-media">
                                <ul>
                                    <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <div class="copy">
                <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
            </div>
            <div class="f-list2">
                <ul>
                    <li class="active"><a href="about.html">About Us</a></li> |
                    <li><a href="delivery.html">Delivery & Returns</a></li> |
                    <li><a href="delivery.html">Terms & Conditions</a></li> |
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
