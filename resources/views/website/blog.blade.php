@extends('website.layouts.app')
@section('content')

<div class="mediz-page-title-wrap  mediz-style-custom mediz-left-align">
    <div class="mediz-header-transparent-substitute"></div>
    <div class="mediz-page-title-overlay"></div>
    <div class="mediz-page-title-container mediz-container">
        <div class="mediz-page-title-content mediz-item-pdlr">
            <h1 class="mediz-page-title">Blog 4 Columns With Frame</h1>
            <div class="mediz-page-caption">Caption align here</div>
        </div>
    </div>
</div>
<div class="mediz-page-wrapper" id="mediz-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 15px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame" style="padding-bottom: 40px ;">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                @foreach ($blogs as $index => $blog )
                                   <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-with-thumbnail" data-sync-height="blog-item-1">
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="{{route('website.singleblog', $blog->slug)}}">
                                                @if ($blog->hasMedia('cover'))
                                                <img src="{{ $blog->getFirstMedia('cover')->getUrl('thumbnail')}}" width="700" height="660" alt="" />
                                                @else
                                                <img src="https://www.freepik.com/premium-ai-image/woman-lab-coat-with-stethoscope-her-neck-smiles-camera_47243551.htm#query=doctor&position=10&from_view=keyword&track=sph&uuid=413a79b7-7a10-49ba-9cfd-a9cb7b47c0e9" width="700" height="660" alt="" />
                                                @endif

                                            </a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="{{route('website.singleblog', $blog->slug)}}" >{{$blog->title}}</a></h3>
                                            <div class="gdlr-core-blog-content">{{$blog->short_desc}}
                                                <div class="clear"></div>
                                            </div>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-blog-info-sep" >•</span><span class="gdlr-core-head"><i class="icon_clock_alt" ></i></span>February 28, 2019</span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-blog-info-sep" >•</span><span class="gdlr-core-head"><i class="icon_documents_alt" ></i></span>John Smith</span>
                                            </div>
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
    </div>
</div>

@endsection
