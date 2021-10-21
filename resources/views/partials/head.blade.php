<!DOCTYPE html>
<html
    class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface supports-pointerevents">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ZandoPhone</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="Digital World Store">
    <meta property="og:url" content="http://demo.tadathemes.com/html-digitalworld">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="ZandoPhone">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="ZAndoPhone">
    <meta name="twitter:description" content="">
    <link rel="canonical" href="http://demo.tadathemes.com/html-digitalworld">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#1c1d1d">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/rating.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/timber.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/theme.scss.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/themepunch.revolution.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets/css/digital-world.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}">
    <style>
        .pagination {
            height: 36px;
            margin: 0;
            padding: 0;
        }

        .pager, .pagination ul {
            margin-left: 0;
            *zoom: 1
        }

        .pagination ul {
            padding: 0;
            display: inline-block;
            *display: inline;
            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .05)
        }

        .pagination li {
            display: inline
        }

        .pagination a {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination .active a, .pagination a:hover {
            background-color: #f5f5f5;
            color: #94999E
        }

        .pagination .active a {
            color: #94999E;
            cursor: default
        }

        .pagination .disabled a, .pagination .disabled a:hover, .pagination .disabled span {
            color: #94999E;
            background-color: transparent;
            cursor: default
        }

        .pagination li:first-child a, .pagination li:first-child span {
            border-left-width: 1px;
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px
        }

        .pagination li:last-child a {
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0
        }

        .pagination-centered {
            text-align: center
        }

        .pagination-right {
            text-align: right
        }

        .pager {
            margin-bottom: 18px;
            text-align: center
        }

        .pager:after, .pager:before {
            display: table;
            content: ""
        }

        .pager li {
            display: inline
        }

        .pager a {
            display: inline-block;
            padding: 5px 12px;
            background-color: #fff;
            border: 1px solid #ddd;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px
        }

        .pager a:hover {
            text-decoration: none;
            background-color: #f5f5f5
        }

        .pager .next a {
            float: right
        }

        .pager .previous a {
            float: left
        }

        .pager .disabled a, .pager .disabled a:hover {
            color: #999;
            background-color: #fff;
            cursor: default
        }

        .pagination .prev.disabled span {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 1
        }

        .pagination .next.disabled span {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination li.active, .pagination li.disabled {
            float: left;
            padding: 0 12px;
            line-height: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0
        }

        .pagination li.active {
            background: #364E63;
            color: #fff;
        }

        .pagination li:first-child {
            border-left-width: 1px;
        }

        #spinner {
            position: absolute;
            top: 50%;
            right: 50%;
            z-index: 99999;
        }

        .loading-wrapper:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: block;
            z-index: 99998;
        }
        .single-entry-item > div {
            margin-top: 30px;
        }
        .single-comment-list {
            background: #fff;
            border: 1px solid #f1f1f1;
            border-top: none;
        }

        .single-comment-list > h3 {
            background: #fcfcfc;
            border-bottom: 1px solid #f1f1f1;
            padding: 24px 30px;
            text-transform: capitalize;
        }
        .comment-list > h3 span{
            color: #1570B7;
        }
        .single-comment-list .comments-list {
            margin: 0;
            padding: 0;
        }
        .single-comment-list ol{
            list-style: none;
        }
        .single-comment-list ol li{
            list-style: none;
        }
        .single-comment-list .comments-list .comment .comment-avatar, .single-comment-list .comments-list > li .comment-avatar {
            width: 80px;
            border-radius: 50%;
            margin-right: 30px;
        }
        .kopa-pull-left {
            float: left;
        }
        .single-comment-list .comments-list .comment .comment-avatar img, .single-comment-list .comments-list > li .comment-avatar img {
            border-radius: 50%;
        }
        .single-comment-list .comments-list .comment .comment-content, .single-comment-list .comments-list > li .comment-content {
            overflow: hidden;
            position: relative;
        }
        .entry-meta.style-01{
            margin: 0;
            list-style: none;
            padding: 0;
            font-size: 12px;
            line-height: 20px;
            position: relative;
        }
        .entry-meta.style-01 > p:first-child{
            margin-left: 0;
        }
        .entry-meta.style-01 > p{
            display: inline-block;
            margin: 0 0 13px 60px;
            position: relative;
        }
    </style>
    {{--   <script>
           window.theme = window.theme || {};
           theme.strings = {
               zoomClose: "Close (Esc)",
               zoomPrev: "Previous (Left arrow key)",
               zoomNext: "Next (Right arrow key)",
              /* moneyFormat: "\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e"*/
           };
           theme.settings = {
               cartType: "drawer",
               gridType: "collage",
               zoomEnable: true
           };
       </script>
   --}}
    @livewireStyles
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}" type="text/javascript"></script>
</head>
