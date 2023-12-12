@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        FaQ</h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> FaQ</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!-- //banner-section-->
<section class="w3l-faq-sec py-5">
    <div class="faq-inner py-md-5 py-3">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Ask Questions?</h6>
                <h3 class="title-w3l mb-5">FaQ's</h3>
            </div>
            <div class="container">
                <div class="faq-page">
                    <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <symbol viewBox="0 0 24 24" id="expand-more">
                                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </symbol>
                            <symbol viewBox="0 0 24 24" id="close">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </symbol>
                        </svg>
                    </div>
                    <details open>
                        <summary>
                            What is the meaning of a vitae fringilla?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                    <details>
                        <summary>
                            Consectetur vitae fringilla eu, ornare eu augue?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                    <details>
                        <summary>
                            What is meant by Cross fit?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                    <details>
                        <summary>
                            How does fringilla help?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                    <details>
                        <summary>
                            Aliquam in tincidunt dui, nec
                            mattis velit.?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                    <details>
                        <summary>
                            Aliquam in tincidunt dui, nec
                            mattis velit.?
                            <span class="fa control-icon-expand fa-chevron-down"></span>
                            <span class="fa control-icon-close fa-times"></span>
                        </summary>
                        <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                            ullamcorper neque,
                            vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui,
                            nec
                            mattis velit.
                            Mauris at mauris erat. </p>
                    </details>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection