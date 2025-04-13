@extends('layouts.app')

@section('title', "Contact Us")
@section('description', "Contact Our Micro Private Equity Firm for inquiries and support.")
@section('keywords', "contact, support, inquiries, Dev Shah")
@section('author', 'BuyingABiz')
@section('canonical', env('APP_URL') . '/contact')

@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_full_page_template">

            <!-- PAGE TITLE -->
            <div class="xoxo_fn_pagetitle">
                <div class="container">
                    <div class="pagetitle">
                        <h3 class="fn__title">Contact Page</h3>
                        <div class="xoxo_fn_breadcrumbs">
                            <ul id="breadcrumbs" class="breadcrumbs">
                                <li class="item-home">
                                    <a class="bread-link bread-home" href="/" title="Home">Home</a>
                                </li>
                                <li class="separator separator-home">
                                    <span></span>
                                </li>
                                <li class="item-current item-142">
                                    <span class="bread-current bread-142">Contact Page</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /PAGE TITLE -->

            <!-- ALL PAGES -->
            <div class="xoxo_fn_full_page_in">
                <div class="xoxo_fn_hassidebar">
                    <div class="container">
                        <div class="sidebarpage">

                            <div class="xoxo_fn_leftsidebar">
                                <div class="ls_content">

                                    <div class="wpcf7 no-js" id="wpcf7-f145-p142-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <form action="/contact" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                            @csrf
                                            <div class="fn__contact">
                                                <div class="item half_item">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Your Name *" value="" type="text" name="your_name">
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="item half_item">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Your Email *" value="" type="email" name="your_email">
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="item half_item">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="tel-330">
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone (optional)" value="" type="tel" name="your_phone">
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="item half_item">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="your-subject">
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Topic (optional)" value="" type="text" name="your_subject">
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="item">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                            <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" name="your_message"></textarea>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="item">
                                                    <div class="xoxo_submit">
                                                        <p>
                                                            <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Send Message">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>

                                    <div style="height:23px" aria-hidden="true" class="wp-block-spacer"></div>
                                    
                                    <p>Thank you for your interest in reaching out to us. We value your feedback, 
                                       questions, and inquiries. Our team is dedicated to providing timely responses 
                                       to all messages we receive.</p>
                                    <p>Please fill out the contact form above with your details, and we'll get back 
                                       to you as soon as possible. For urgent matters, you can also reach us directly 
                                       via email at devshah1103@gmail.com or by phone during business hours.</p>
                                </div>
                            </div>

                            @include('includes.sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection