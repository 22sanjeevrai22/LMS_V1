@extends('website.layouts.app')
@section('content')

<div class="mediz-page-title-wrap  mediz-style-custom mediz-left-align">
    <div class="mediz-header-transparent-substitute"></div>
    <div class="mediz-page-title-overlay"></div>
    <div class="mediz-page-title-container mediz-container">
        <div class="mediz-page-title-content mediz-item-pdlr">
            <h1 class="mediz-page-title">Our Services</h1>
            <div class="mediz-page-caption">Detail about our services</div>
        </div>
    </div>
</div>
<div class="mediz-page-wrapper" id="mediz-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 90px 0px;" id="gdlr-core-wrapper-1">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">We Provide High Quality Services<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 20px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #17449e ;">
                                            <p>Although pulmonary medicine only began to evolve as a medical specialty in the 1950s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-54361">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                            <p>One of the first major discoveries relevant to the field of pulmonology was the discovery of pulmonary circulation. Originally, it was thought that blood reaching the right side of the heart passed through small &#8216;pores&#8217; in the septum into the left side to be oxygenated, as theorized by Galen; however, the discovery of pulmonary circulation disproves this theory.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">

                @foreach ($services as $index => $service )

                    <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="cl-ls" id="gdlr-core-column-93667">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-move-up-with-shadow gdlr-core-item-mglr gdlr-core-item-mgb" style="box-shadow: 0 0 30px rgba(0, 0, 0,0.08); -moz-box-shadow: 0 0 30px rgba(0, 0, 0,0.08); -webkit-box-shadow: 0 0 30px rgba(0, 0, 0,0.08); padding: 40px 35px 60px 35px;border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;">
                            <div class="gdlr-core-pbf-background-wrap" style="border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;border-width: 0px 0px 3px 0px;border-color: #ffffff ;border-style: solid ;"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-right: 0px;padding-bottom: 10px;padding-left: 0px;">
                                        @if($service -> hasMedia('cover'))
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="max-width: 400px ;margin-left: auto ;margin-right: auto ;"><img src="{{$service -> getFirstMedia('cover')->getUrl('thumbnail')}}" alt="" width="400" height="300" title="icon-Lsnew-1" /></div>
                                        @else
                                        <img src="{{ asset('website/upload/manjushree.png') }}" alt="">
                                        @endif
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{$service->service_name}}</h3></div>
                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                <p>{{$service->short_desc}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-with-border" href="{{route('website.singleservice', $service->slug)}}" id="gdlr-core-button-id-12831"><span class="gdlr-core-content" >Learn More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px -130px 0px;padding: 0px 0px 0px 0px;z-index: 9 ;" data-skin="Blockqoute">
            <div class="gdlr-core-pbf-background-wrap" style="border-radius: 0px 0px 0px 0px;-moz-border-radius: 0px 0px 0px 0px;-webkit-border-radius: 0px 0px 0px 0px;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 1240px ;">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first gdlr-core-hide-in-mobile" id="gdlr-core-column-76211" style="z-index: 999 ;">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding-bottom: -130px;" data-sync-height="Height Qoute">
                            <div class="gdlr-core-pbf-background-wrap" style="border-radius: 5px 0px 0px 5px;-moz-border-radius: 5px 0px 0px 5px;-webkit-border-radius: 5px 0px 0px 5px;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/Girl-talk.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-75629">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="box-shadow: 0 0 35px rgba(0, 0, 0,0.1); -moz-box-shadow: 0 0 35px rgba(0, 0, 0,0.1); -webkit-box-shadow: 0 0 35px rgba(0, 0, 0,0.1); margin-top: 0px;padding: 120px 20px 110px 60px;" data-sync-height="Height Qoute">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;border-radius: 0px 5px 5px 0px;-moz-border-radius: 0px 5px 5px 0px;-webkit-border-radius: 0px 5px 5px 0px;"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-blockquote-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-medium-size" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-blockquote gdlr-core-info-font">
                                            <div class="gdlr-core-blockquote-item-quote gdlr-core-quote-font gdlr-core-skin-icon" style="height: 95px ;font-size: 135px ;font-weight: 800 ;">&#8220;</div>
                                            <div class="gdlr-core-blockquote-item-content-wrap">
                                                <div class="gdlr-core-blockquote-item-content gdlr-core-skin-content" style="font-size: 18px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">
                                                    <p>Historically, drugs were discovered through identifying the active ingredient from traditional remedies or by serendipitous discovery. Later chemical libraries of synthetic small molecules.</p>
                                                </div>
                                                <div class="gdlr-core-blockquote-item-author gdlr-core-skin-caption" style="font-size: 20px ;font-weight: 700 ;font-style: normal ;"><span class="gdlr-core-blockquote-item-author-name">Mildred Payne</span><span class="gdlr-core-blockquote-item-author-position" style="font-size: 15px ;font-weight: 400 ;">Allergist</span></div>
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
        <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 145px 0px 20px 0px;border-radius: 0px 0px 5px 5px;-moz-border-radius: 0px 0px 5px 5px;-webkit-border-radius: 0px 0px 5px 5px;" id="gdlr-core-wrapper-2">
            <div class="gdlr-core-pbf-background-wrap" style="border-radius: 0px 0px 5px 5px;-moz-border-radius: 0px 0px 5px 5px;-webkit-border-radius: 0px 0px 5px 5px;">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/Bg-Title.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-30629">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 0px 40px 0px;" data-sync-height="Height title">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 10px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Subscribe to our newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #9ebeff ;">
                                            <p>Community Memorial Hospital is the ONLY hospital in the state of New York to achieve One of Healthgrades America’s 100 Best Hospitals for Joint Replacement in 2016.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4265">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 90px 60px 50px 60px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle" style="padding-bottom: 0px ;">



                                        <div class="newsletter newsletter-subscription">
                                            <form class="gdlr-core-newsletter-form clearfix" method="POST" action="{{route('website.newsletter')}}">
                                                @csrf
                                                <div class="gdlr-core-newsletter-email">
                                                    <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="email" size="30" required />
                                                </div>
                                                <div class="gdlr-core-newsletter-submit">
                                                    <input class="newsletter-submit" type="submit" value="Subscribe" />
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
    </div>
</div>

@endsection
