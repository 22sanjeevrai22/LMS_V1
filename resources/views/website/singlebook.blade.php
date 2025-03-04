@extends('website.layouts.app')

@section('content')
    <div class="mediz-page-wrapper" id="mediz-page-wrapper">
        <div class="mediz-blog-title-wrap mediz-style-custom mediz-feature-image">
            <div class="mediz-header-transparent-substitute"></div>
            <div class="mediz-blog-title-overlay" style="opacity: 0.01"></div>
            <div class="mediz-blog-title-container mediz-container">
                <div class="mediz-blog-title-content mediz-item-pdlr">
                    <header class="mediz-single-article-head mediz-single-blog-title-style-4 clearfix">
                        <div class="mediz-single-article-head-right">
                            <h1 class="mediz-single-article-title">
                                {{ $book->title }}
                            </h1>
                            <div class="mediz-blog-info-wrapper">
                                <div
                                    class="mediz-blog-info mediz-blog-info-font mediz-blog-info-author vcard author post-author">
                                    <span class="mediz-blog-info-sep">•</span><span class="mediz-head"><i
                                            class="icon_documents_alt"></i></span><span class="fn"><a href="#"
                                            title="Posts by John Smith" rel="author">John Smith</a></span>
                                </div>
                                <div class="mediz-blog-info mediz-blog-info-font mediz-blog-info-book">
                                    <span class="mediz-blog-info-sep">•</span><span class="mediz-head"><i
                                            class="icon_folder-alt"></i></span><a href="#"
                                        rel="tag">Blog</a><span class="gdlr-core-sep">,</span>
                                    <a href="#" rel="tag">Post Format</a>
                                </div>
                                <div class="mediz-blog-info mediz-blog-info-font mediz-blog-info-comment">
                                    <span class="mediz-blog-info-sep">•</span><span class="mediz-head"><i
                                            class="icon_comment_alt"></i></span><a href="index.html#respond">no comments</a>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <div class="mediz-content-container mediz-container gdlr-core-sticky-sidebar gdlr-core-js">
            <div class="mediz-sidebar-wrap clearfix mediz-line-height-0 mediz-sidebar-style-right">
                <div class="mediz-sidebar-center mediz-column-40 mediz-line-height">
                    <div class="mediz-content-wrap mediz-item-pdlr clearfix">
                        <div class="mediz-content-area">
                            <article id="post-1268"
                                class="post-1268 post type-post status-publish format-standard hentry book-blog book-post-format">
                                <div class="mediz-single-article clearfix">
                                    <div class="mediz-single-article-content">
                                        <h4>{{ $book->title }}</h4>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->

                                        {{ $book->description }}


                                        <!-- /wp:paragraph -->
                                        <!-- wp:html --><span class="gdlr-core-space-shortcode"
                                            style="margin-top: 30px"></span>
                                        <ul class="wp-block-gallery aligncenter columns-5 is-cropped">
                                            <li class="blocks-gallery-item">
                                                <figure>
                                                    @if ($book->hasMedia('cover'))
                                                        <img class="alignnone wp-image-7309"
                                                            src="{{ $book->getFirstMedia('cover')->getUrl() }}"
                                                            alt="" width="1024" height="605" data-id="6030" />
                                                    @else
                                                        <a href="#"><img src="{{ asset('website/upload/books.jpg') }}"
                                                                width="500" height="500" alt=""
                                                                style="object-fit:cover" /></a>
                                                    @endif
                                                </figure>
                                            </li>
                                        </ul>

                                        <div class="product-properties mt-6">
                                            <div class="product-desc">
                                                <div class="price text-white text-xl font-light flex h-10 my-2">
                                                    <div
                                                        class="product-price w-1/2 text-center content-center align bg-green-500 rounded-l-lg shadow-lg">
                                                        Available:
                                                    </div>
                                                    <div
                                                        class="product-price w-1/2 text-center content-center text-xl bg-teal-500 rounded-r-lg shadow-lg">
                                                        Total: {{ $book->quantity}}
                                                    </div>
                                                </div>
                                                <a href="{{ route('website.borrow', $book->id) }}"
                                                    class="flex justify-center items-center mt-3 mx-auto bg-orange-500 my-2 h-10 text-white text-xl font-light rounded-lg shadow-lg hover:bg-orange-700 cursor-pointer">
                                                   Borrow
                                                    <IoCart class="ml-3 text-2xl" />
                                                </a>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="mediz-page-builder-wrap mediz-item-rvpdlr">
                            <div class="gdlr-core-page-builder-body"></div>
                        </div>
                        <div class="mediz-single-nav-area clearfix">
                            <span class="mediz-single-nav mediz-single-nav-left"><span
                                    class="mediz-text mediz-title-font">Previous Post</span></span><span
                                class="mediz-single-nav mediz-single-nav-right"><span
                                    class="mediz-text mediz-title-font">Next Post</span></span>
                        </div>


                        <div class="clear"></div>
                        <div class="mediz-single-author clearfix">
                            <div class="mediz-single-author-wrap">
                                <div class="mediz-single-author-avartar mediz-media-image">
                                    <img alt=""
                                        src="https://secure.gravatar.com/avatar/c4ffc7a48d6a02dac31975c893fa7ddb?s=90&amp;d=mm&amp;r=g"
                                        srcset="
                      https://secure.gravatar.com/avatar/c4ffc7a48d6a02dac31975c893fa7ddb?s=180&#038;d=mm&#038;r=g 2x
                    "
                                        class="avatar avatar-90 photo" height="90" width="90" />
                                </div>
                                <div class="mediz-single-author-content-wrap">
                                    <h4 class="mediz-single-author-title">
                                        <a href="#" title="Posts by John Smith" rel="author">John Smith</a>
                                    </h4>
                                    <div class="mediz-single-author-description">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the
                                        blind texts. Separated they live in Bookmar.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mediz-single-related-post-wrap mediz-item-rvpdlr">
                            <h3 class="mediz-single-related-post-title mediz-item-mglr">
                                Related Posts
                            </h3>
                            <div class="gdlr-core-blog-item-holder clearfix">
                                <div
                                    class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-with-thumbnail">
                                        <div
                                            class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="#"><img src="upload/shutterstock_556980217-800x533.jpg"
                                                    width="2000" height="1333" alt="" /></a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-content-wrap">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px">
                                                <a href="#">Using anthrax to fight cancer effectively</a>
                                            </h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                <span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                        class="gdlr-core-blog-info-sep">•</span><span
                                                        class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                        href="#">February 28, 2019</a></span><span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                        class="gdlr-core-blog-info-sep">•</span><span
                                                        class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                                        href="#" title="Posts by John Smith" rel="author">John
                                                        Smith</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-30">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-with-thumbnail">
                                        <div
                                            class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="#"><img src="upload/pexels-photo-1-800x532.jpg" width="1920"
                                                    height="1279" alt="" /></a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-content-wrap">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px">
                                                <a href="#">These blood markers may indicate a higher risk
                                                    of disease</a>
                                            </h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                <span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                        class="gdlr-core-blog-info-sep">•</span><span
                                                        class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                        href="#">February 28, 2019</a></span><span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                        class="gdlr-core-blog-info-sep">•</span><span
                                                        class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                                        href="#" title="Posts by John Smith" rel="author">John
                                                        Smith</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- mediz-comments-area -->
                    </div>
                </div>
                <div class="mediz-sidebar-right mediz-column-20 mediz-line-height mediz-line-height">
                    <div class="mediz-sidebar-area mediz-item-pdlr">
                        <div id="gdlr-core-recent-post-widget-1"
                            class="widget widget_gdlr-core-recent-post-widget mediz-widget">
                            <h3 class="mediz-widget-title">Recent Articles</h3>
                            <span class="clear"></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                        <img src="upload/shutterstock_556980217-150x150.jpg" alt=""
                                            width="150" height="150" title="shutterstock_556980217" />
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title">
                                            <a href="#">Using anthrax to fight cancer effectively</a>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget-info">
                                            <span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">February 28, 2019</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                    class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                                    href="#" title="Posts by John Smith" rel="author">John
                                                    Smith</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                        <img src="upload/pexels-photo-1-150x150.jpg" alt="" width="150"
                                            height="150" title="pexels-photo" />
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title">
                                            <a href="#">These blood markers may indicate a higher risk of
                                                disease</a>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget-info">
                                            <span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">February 28, 2019</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                    class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                                    href="#" title="Posts by John Smith" rel="author">John
                                                    Smith</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                        <img src="upload/shutterstock_123513331-150x150.jpg" alt=""
                                            width="150" height="150" title="shutterstock_123513331" />
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title">
                                            <a href="#">Brushing your teeth may keep your heart
                                                healthy</a>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget-info">
                                            <span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">February 28, 2019</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                    class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                                    href="#" title="Posts by John Smith" rel="author">John
                                                    Smith</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="gdlr-core-custom-menu-widget-2"
                            class="widget widget_gdlr-core-custom-menu-widget mediz-widget">
                            <h3 class="mediz-widget-title">Our Services</h3>
                            <span class="clear"></span>
                            <div class="menu-our-services-container">
                                <ul id="menu-our-services" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list">
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="lung-diseases.html">Lung Diseases</a>
                                    </li>
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="orthopaedic.html">Orthopaedic</a>
                                    </li>
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="pharmacy.html">Pharmacy</a>
                                    </li>
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="sport-injury.html">Sport Injury</a>
                                    </li>
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="heart.html">Heart</a>
                                    </li>
                                    <li class="menu-item mediz-normal-menu">
                                        <a href="dental-service.html">Dental Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

