@extends('website.layouts.app')

@section('content')
    <div class="mediz-page-wrapper" id="mediz-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper " style="padding: 160px 0px 145px 0px;" id="gdlr-core-wrapper-1">
                <div class="gdlr-core-pbf-background-wrap">
                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                        style="background-image: url({{ asset('website/upload/page-title-about-1.jpg') }}) ;background-size: cover ;background-position: center ;"
                        data-parallax-speed="0.05"></div>
                </div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 20px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                    style="font-size: 55px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">
                                                    Browse our book collection<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                    style="font-size: 17px ;font-weight: 300 ;letter-spacing: 0px ;text-transform: none ;color: #bbd1ff ;">
                                                    Only best books here<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper "
                style="padding: 80px 0px 30px 0px;border-width: 0px 0px 1px 0px;border-color: #dedede ;border-style: solid ;"
                data-skin="Personnel" id="gdlr-core-wrapper-2">
                <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background"
                                style="padding-bottom: 10px ;">


                                <div
                                    class="filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align">
                                    <ul>
                                        @foreach ($categories as $index => $category)
                                            <li><a href="#"
                                                    class="{{ request()->category == $category->category ? 'active' : '' }}"
                                                    data-filter=".class1">{{ $category->category }}</a></li>
                                        @endforeach
                                        {{-- <li><a href="#" data-filter=".class1" >Allergist</a></li>
                                    <li><a href="#" data-filter=".class2" >Anesthesiology</a></li>
                                    <li><a href="#" data-filter=".class3" >Endocrinologist</a></li>
                                    <li><a href="#" data-filter=".class4" >Neurosurgeon</a></li> --}}
                                    </ul>
                                </div>

                                <div class="gdlr-core-personnel-item-holder filter-container  clearfix">
                                    @foreach ($books as $index => $book)
                                        <div
                                            class="gdlr-core-item-list gdlr-core-personnel-list-column class1 gdlr-core-column-20 gdlr-core-item-pdlr">
                                            <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element"
                                                style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                <div
                                                    class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                    @if ($book->hasMedia('cover'))
                                                        <a href="#"><img
                                                                src="{{ $book->getFirstMedia('cover')->getUrl('thumbnail') }}"
                                                                alt=""
                                                                style="aspect-ratio: 1/1; object-fit:cover" /></a>
                                                    @else
                                                        <a href="#"><img
                                                                src="{{ asset('website/upload/library.png') }}"
                                                                style="aspect-ratio: 1/1; object-fit:cover" alt="" /></a>
                                                    @endif
                                                    <div class="gdlr-core-hover-opacity"></div>
                                                </div>
                                                <div class="gdlr-core-personnel-list-content-wrap ">
                                                    <h3 class="gdlr-core-personnel-list-title"
                                                        style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ; text-overflow: ellipsis; white-space: nowrap;
overflow: hidden;">
                                                        <a href="{{ route('website.books.show', $book->id) }}">{{ $book->title }}</a>
                                                    </h3>
                                                    <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">
                                                        {{ $book->author_name }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper "
                style="box-shadow: 0 0  rgba(0, 0, 0,0.27); -moz-box-shadow: 0 0  rgba(0, 0, 0,0.27); -webkit-box-shadow: 0 0  rgba(0, 0, 0,0.27); margin-right: auto;margin-bottom: -120px;margin-left: auto;padding: 70px 0px 80px 0px;z-index: 9 ;max-width: 1240px ;border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;"
                data-skin="Mediz A2 Counter">
                <div class="gdlr-core-pbf-background-wrap"
                    style="border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;">
                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                        style="background-image: url(upload/counter-bg.png) ;background-size: cover ;background-position: center ;"
                        data-parallax-speed="0"></div>
                </div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first"
                            id="gdlr-core-column-22623">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                                style="font-size: 39px ;font-weight: 700 ;"><span
                                                    class="gdlr-core-counter-item-count gdlr-core-js" data-duration=""
                                                    data-counter-start="0" data-counter-end="200">0</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                                style="font-size: 20px ;font-weight: 500 ;text-transform: none ;">Doctors
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-9837">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                                style="font-size: 39px ;font-weight: 700 ;"><span
                                                    class="gdlr-core-counter-item-count gdlr-core-js" data-duration=""
                                                    data-counter-start="0" data-counter-end="29000">0</span><span
                                                    class="gdlr-core-counter-item-suffix">+</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                                style="font-size: 20px ;font-weight: 500 ;text-transform: none ;">Happy
                                                Patients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-67709">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                                style="font-size: 39px ;font-weight: 700 ;"><span
                                                    class="gdlr-core-counter-item-count gdlr-core-js" data-duration=""
                                                    data-counter-start="0" data-counter-end="1000">0</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                                style="font-size: 20px ;font-weight: 500 ;text-transform: none ;">Medical
                                                Beds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                                style="font-size: 39px ;font-weight: 700 ;"><span
                                                    class="gdlr-core-counter-item-count gdlr-core-js" data-duration=""
                                                    data-counter-start="0" data-counter-end="150">0</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                                style="font-size: 20px ;font-weight: 500 ;text-transform: none ;">Winning
                                                Awards</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 200px 0px 80px 0px;" id="gdlr-core-wrapper-3">
                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first"
                            id="gdlr-core-column-93865">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                                style="margin: 0px 30px 0px 30px;padding: 210px 140px 290px 210px;">
                                <div class="gdlr-core-pbf-background-wrap">
                                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                        style="background-image: url(upload/pic-ourdoc-2.png) ;background-size: cover ;background-position: center ;"
                                        data-parallax-speed="0"></div>
                                </div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr"
                                            style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                                                style="border-width: 0px;">
                                                <a class="gdlr-core-lightgallery gdlr-core-js "
                                                    href="https://www.youtube.com/watch?v=KAvQsRL-jeo"><img
                                                        src="upload/play-icon.png" alt="" width="144"
                                                        height="144" title="play-icon" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-290">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                                style="margin: 20px 0px 0px 30px;padding: 0px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 20px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                    style="font-size: 26px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #222222 ;">
                                                    Private Care Service<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                            <div class="gdlr-core-divider-container" style="max-width: 80px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                    style="border-color: #17449e ;border-width: 3px;border-radius: 15px;-moz-border-radius: 15px;-webkit-border-radius: 15px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                            style="padding-bottom: 20px ;">
                                            <div class="gdlr-core-text-box-item-content"
                                                style="font-size: 20px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #17449e ;">
                                                <p>Pharmaceuticals or drugs or medicines are classified in various other
                                                    groups besides their origin on the basis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space">
                                            <div class="gdlr-core-text-box-item-content"
                                                style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #5f5f5f ;">
                                                <p>Surgery of the respiratory tract is generally performed by specialists in
                                                    cardiothoracic surgery (or thoracic surgery) though minor proce</p>
                                                <p>dures may be performed by pulmonologists. Pulmonology is closely.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align">
                                            <ul>
                                                <li class=" gdlr-core-skin-divider clearfix"><span
                                                        class="gdlr-core-icon-list-icon-wrap gdlr-core-left"
                                                        style="margin-top: 4px ;margin-right: 11px ;"><i
                                                            class="gdlr-core-icon-list-icon fa fa-dot-circle-o"
                                                            style="color: #4d93e9 ;"></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                                            class="gdlr-core-icon-list-content"
                                                            style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related
                                                            diabetes (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span
                                                        class="gdlr-core-icon-list-icon-wrap gdlr-core-left"
                                                        style="margin-top: 4px ;margin-right: 11px ;"><i
                                                            class="gdlr-core-icon-list-icon fa fa-dot-circle-o"
                                                            style="color: #4d93e9 ;"></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                                            class="gdlr-core-icon-list-content"
                                                            style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Gastrointestinal
                                                            (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span
                                                        class="gdlr-core-icon-list-icon-wrap gdlr-core-left"
                                                        style="margin-top: 4px ;margin-right: 11px ;"><i
                                                            class="gdlr-core-icon-list-icon fa fa-dot-circle-o"
                                                            style="color: #4d93e9 ;"></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                                            class="gdlr-core-icon-list-content"
                                                            style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related
                                                            liver disease (monthly)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span
                                                        class="gdlr-core-icon-list-icon-wrap gdlr-core-left"
                                                        style="margin-top: 4px ;margin-right: 11px ;"><i
                                                            class="gdlr-core-icon-list-icon fa fa-dot-circle-o"
                                                            style="color: #4d93e9 ;"></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                                            class="gdlr-core-icon-list-content"
                                                            style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Sweat
                                                            testing (three times per month)</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider clearfix"><span
                                                        class="gdlr-core-icon-list-icon-wrap gdlr-core-left"
                                                        style="margin-top: 4px ;margin-right: 11px ;"><i
                                                            class="gdlr-core-icon-list-icon fa fa-dot-circle-o"
                                                            style="color: #4d93e9 ;"></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                                            class="gdlr-core-icon-list-content"
                                                            style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Difficult
                                                            cystic fibrosis diagnosis (alternate months)</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border"
                                                href="#"
                                                style="font-size: 16px ;font-weight: 500 ;color: #ffffff ;padding: 11px 24px 17px 28px;text-transform: none ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #4d93e9 ;"><span
                                                    class="gdlr-core-content">Learn More</span><i
                                                    class="gdlr-core-pos-right arrow_right"
                                                    style="font-size: 23px ;"></i></a>
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
