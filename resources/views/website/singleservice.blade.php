@extends('website.layouts.app')
@section('content')
<div class="mediz-page-title-wrap  mediz-style-custom mediz-left-align">
    <div class="mediz-header-transparent-substitute"></div>
    <div class="mediz-page-title-overlay"></div>
    <div class="mediz-page-title-container mediz-container">
        <div class="mediz-page-title-content mediz-item-pdlr">
            <h1 class="mediz-page-title">Our Service</h1>
            <div class="mediz-page-caption">Detail about our service</div>
        </div>
    </div>
</div>

<div class="mediz-page-wrapper" id="mediz-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 0px 10px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-57301">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="{{asset('website/upload/lung.jpg')}}" alt="" width="277" height="316" title="pic1-doc-departent" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-82064">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 15px 0px 0px 0px;padding: 0px 0px 65px 0px;">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">About This Department<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                <p>{{$singleservice->short_desc}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align" style="padding-bottom: 0px ;">
                                            <ul>
                                                <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related diabetes (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Gastrointestinal (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related liver disease (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Sweat testing (three times per month)</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">{{$singleservice->service_name}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>

                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 50px ;">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                <p>{{$singleservice->long_desc}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 50px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #17449e ;border-width: 3px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" data-skin="cl-doc-dpment" id="gdlr-core-column-91318">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 15px 0px 15px;padding: 40px 25px 0px 30px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f9ff ;border-width: 1px 1px 1px 1px;border-color: #dbeaff ;border-style: solid ;"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left-title gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 5px;">
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 15px;"><img src="{{asset('website/upload/icon-cl-dpment-1.png')}}" alt="" width="35" height="37" title="icon-cl-dpment-1" /></div>
                                                <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 25px ;">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">View Our Doctor</h3></div>
                                                <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                    <p>Our doctors at the clinic are not just medical professionals; they're compassionate caregivers dedicated to improving the health and well-being of our patients. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border" href="#" style="box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); -moz-box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); -webkit-box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); font-size: 12px ;font-weight: 700 ;letter-spacing: 1px ;color: #17449e ;padding: 12px 30px 14px 30px;background: #ffffff ;"><span class="gdlr-core-content" >Learn More</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30" data-skin="cl-doc-dpment" id="gdlr-core-column-86661">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 15px 0px 15px;padding: 40px 25px 0px 30px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f9ff ;border-width: 1px 1px 1px 1px;border-color: #dbeaff ;border-style: solid ;"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left-title gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 5px;">
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 15px;"><img src="{{asset('website/upload/icon-cl-dpment-2.png')}}" alt="" width="33" height="38" title="icon-cl-dpment-2" /></div>
                                                <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 25px ;">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Special Care Unit</h3></div>
                                                <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                    <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may visit without permission .</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border" href="#" style="font-size: 12px ;font-weight: 700 ;letter-spacing: 1px ;color: #ffffff ;padding: 12px 30px 14px 30px;background: #17449e ;"><span class="gdlr-core-content" >Learn More</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  mediz-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="gdlr-core-custom-menu-widget-15" class="widget widget_gdlr-core-custom-menu-widget mediz-widget">
                            <h3 class="mediz-widget-title">Lung Diseases</h3><span class="clear"></span>
                            <div class="menu-lung-diseases-container">
                                <ul id="menu-lung-diseases" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list2">
                                    <li class="menu-item mediz-normal-menu"><a href="#">Asthma and Allergy</a></li>
                                    <li class="menu-item mediz-normal-menu"><a href="#">Cancer Services</a></li>
                                    <li class="menu-item mediz-normal-menu"><a href="#">Cystic Fibrosis</a></li>
                                    <li class="menu-item mediz-normal-menu"><a href="#">Endoscopy</a></li>
                                    <li class="menu-item mediz-normal-menu"><a href="#">Colorectal</a></li>
                                    <li class="menu-item mediz-normal-menu"><a href="#">Hemorrhoids</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="gdlr-core-opening-hour-widget-2" class="widget widget_gdlr-core-opening-hour-widget mediz-widget">
                            <h3 class="mediz-widget-title">Department Hours</h3><span class="clear"></span>
                            <div class="gdlr-core-opening-hour-widget" style="color: #17449e ;">
                                <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Sun - Sat</span><span class="gdlr-core-tail">7:00 am - 6:00 pm</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-bullet-style-round gdlr-core-color-bullet" data-type="carousel" data-column="3" data-move="1" data-nav="bullet" data-nav-parent="gdlr-core-personnel-item" data-disable-autoslide="1">
                    <ul class="slides">
                        @foreach ($doctors as $index => $doctor )
                            <li class="gdlr-core-item-mglr">
                            <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 35px rgba(0, 0, 0,0.1); -moz-box-shadow: 0 0 35px rgba(0, 0, 0,0.1); -webkit-box-shadow: 0 0 35px rgba(0, 0, 0,0.1); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                    @if ($doctor -> hasMedia('doctorimage'))
                                        <a href="#"><img src="{{ $doctor->getFirstMedia('doctorimage')->getUrl('thumbnail')}}" width="600" height="600"  alt="" /></a>
                                    @else
                                        <a href="#"><img src="{{asset('website/upload/p-1.1-400x400.jpg')}}" width="600" height="600"  alt="" /></a>
                                    @endif
                                    <div class="gdlr-core-hover-opacity"></div>
                                </div>
                                <div class="gdlr-core-personnel-list-content-wrap ">
                                    <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >{{$doctor->name}}</a></h3>
                                    <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">{{$doctor->specialization}}</div>
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
