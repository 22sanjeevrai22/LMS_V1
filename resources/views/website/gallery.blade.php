@extends('website.layouts.app')
@section('content')

<div class="mediz-page-wrapper" id="mediz-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>

            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Grid Style<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;">With Space</span></div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                                @foreach ($galleryimages as $index => $galleryimage)
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        @if($galleryimage->getFirstMedia('gallery'))
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{ $galleryimage->getFirstMedia('gallery')->getUrl()}}" data-lightbox-group="gdlr-core-img-group-1"><img src="{{$galleryimage->getFirstMedia('gallery')->getUrl()}}" width="700" height="660"  alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon  gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                        @else
                                            <img src="{{ asset('website/upload/manjushree.png') }}" alt="">
                                        @endforelse
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-background-wrap"></div>

        </div>

    </div>
</div>


@endsection
