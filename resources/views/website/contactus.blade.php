@extends('website.layouts.app')
@section('content')



<div class="mediz-page-wrapper" id="mediz-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 140px 0px 120px 0px;" id="gdlr-core-wrapper-1">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('website/upload/bg-1.jpg')}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.3"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Contact Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;font-style: normal ;color: #f2f2f2 ;margin-top: 15px ;">Get Intouch</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="White Input" id="gdlr-core-column-34122">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;letter-spacing: 0px ;text-transform: none ;">Leave us your info <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;">and we will get back to you.</span></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                                <form class="quform" action="{{route('website.form')}}" method="post" enctype="multipart/form-data" onclick="">
                                                    @csrf
                                                    <div class="quform-elements">
                                                        <div class="quform-element">

                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-name">
                                                                    <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                                </span>

                                                        </div>
                                                        <div class="quform-element">

                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-email">
                                                                    <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                                </span>

                                                        </div>
                                                        <div class="quform-element">

                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-message">
                                                                    <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                                </span>

                                                        </div>

                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Send</span></button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>

                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                                <iframe id="iframe_4e10_0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.8986013407!2d87.2835694!3d26.811357100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef4198d0942439%3A0x290bcbc801e24336!2sManjushree%20Poly%20Clinic%20%26%20Diagnostic%20Center%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1706364823026!5m2!1sen!2snp" width="100%" height="450" ></iframe>
                                <div id="div_4e10_34">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr"><a href="https://demo.goodlayers.com/cdn-cgi/l/email-protection#be9d" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px ;color: #1e1e1e ;"><i class="fa fa-envelope" ></i></a><a href="{{url('https://www.facebook.com/manjushreepolyclinic/')}}" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-facebook" ></i></a><a href="{{url('https://www.instagram.com/manjushreepolyclinic/')}}" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-instagram" ></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 30px 0px 25px 0px;" data-skin="White Text">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #161616 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-65157">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Phone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>You're one call away from our service.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                            <p><a href="#">025-577194,
                                                025-574363</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>Email us for further inquiries or assistance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p><a href="#"><span class="__cf_email__" data-cfemail="14577b7a6075776054737b7b7078756d7166673a777b79">manjushreepolyclinic@gmail.com</span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>Dharan-9, Putali Line
                                                <br />Sunsari, Nepal</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p><a href="{{url('https://www.google.com/maps/place/Manjushree+Poly+Clinic+%26+Diagnostic+Center+Pvt.+Ltd./@26.8113571,87.2835694,17z/data=!3m1!4b1!4m6!3m5!1s0x39ef4198d0942439:0x290bcbc801e24336!8m2!3d26.8113571!4d87.2835694!16s%2Fg%2F1hc242w8j?entry=ttu')}}">View On Google Map</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>

@endsection
