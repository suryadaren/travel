<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Styles -->
    <style>
        .text-center {
            text-align: center !important;
        }
        .ml-auto, .mx-auto {
            margin-left: auto !important;
        }
        .mr-auto, .mx-auto {
            margin-right: auto !important;
        }
        @media (min-width: 992px) {
            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        @media (min-width: 768px) {
            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        @media (min-width: 576px) {
            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        *, *::before, *::after {
            box-sizing: border-box;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        @media (min-width: 992px) {
            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        @media (min-width: 768px) {
            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        @media (min-width: 576px) {
            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
            cursor: pointer;
        }
        button, [type="button"], [type="reset"], [type="submit"] {
            -webkit-appearance: button;
        }
        button, select {
            text-transform: none;
        }
        button, input {
            overflow: visible;
        }
        input, button, select, optgroup, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        button {
            border-radius: 0;
        }
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        @media (min-width: 992px) {
            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (min-width: 768px) {
            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (min-width: 576px) {
            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        table {
            border-collapse: collapse;
        }
        .text-left {
            text-align: left !important;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody + tbody {
            border: 0;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }
        .table-primary,
        .table-primary > th,
        .table-primary > td {
            background-color: #b8daff;
        }
        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody + tbody {
            border-color: #7abaff;
        }
        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }
        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #9fcdff;
        }
        .table-secondary,
        .table-secondary > th,
        .table-secondary > td {
            background-color: #d6d8db;
        }
        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody + tbody {
            border-color: #b3b7bb;
        }
        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }
        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #c8cbcf;
        }
        .table-success,
        .table-success > th,
        .table-success > td {
            background-color: #c3e6cb;
        }
        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody + tbody {
            border-color: #8fd19e;
        }
        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }
        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #b1dfbb;
        }
        .table-info,
        .table-info > th,
        .table-info > td {
            background-color: #bee5eb;
        }
        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody + tbody {
            border-color: #86cfda;
        }
        .table-hover .table-info:hover {
            background-color: #abdde5;
        }
        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #abdde5;
        }
        .table-warning,
        .table-warning > th,
        .table-warning > td {
            background-color: #ffeeba;
        }
        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody + tbody {
            border-color: #ffdf7e;
        }
        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }
        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #ffe8a1;
        }
        .table-danger,
        .table-danger > th,
        .table-danger > td {
            background-color: #f5c6cb;
        }
        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody + tbody {
            border-color: #ed969e;
        }
        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }
        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #f1b0b7;
        }
        .table-light,
        .table-light > th,
        .table-light > td {
            background-color: #fdfdfe;
        }
        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody + tbody {
            border-color: #fbfcfc;
        }
        .table-hover .table-light:hover {
            background-color: #ececf6;
        }
        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #ececf6;
        }
        .table-dark,
        .table-dark > th,
        .table-dark > td {
            background-color: #c6c8ca;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #95999c;
        }
        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }
        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: #b9bbbe;
        }
        .table-active,
        .table-active > th,
        .table-active > td {
            background-color: rgba(0, 0, 0, 0.075);
        }
        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }
        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075);
        }
        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }
        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .table-dark {
            color: #fff;
            background-color: #343a40;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }
        .table-dark.table-bordered {
            border: 0;
        }
        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }
        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }
        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-sm > .table-bordered {
                border: 0;
            }
        }
        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-md > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-lg > .table-bordered {
                border: 0;
            }
        }
        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-xl > .table-bordered {
                border: 0;
            }
        }
        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive > .table-bordered {
            border: 0;
        }
        .table {
            border-collapse: collapse !important;
        }
        .table td,
        .table th {
            background-color: #fff !important;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }
        .table-dark {
            color: inherit;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #dee2e6;
        }
        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6;
        }
    </style>
    <style>
        @charset "UTF-8";

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-LightOblique.eot");
            src: url("/fonts/Avenir-LightOblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-LightOblique.woff") format("woff"), url("/fonts/Avenir-LightOblique.ttf") format("truetype");
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Medium.eot");
            src: url("/fonts/Avenir-Medium.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Medium.woff") format("woff"), url("/fonts/Avenir-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Heavy.eot");
            src: url("/fonts/Avenir-Heavy.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Heavy.woff") format("woff"), url("/fonts/Avenir-Heavy.ttf") format("truetype");
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: 'Avenir Book';
            src: url("/fonts/Avenir-BookOblique.eot");
            src: url("/fonts/Avenir-BookOblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-BookOblique.woff") format("woff"), url("/fonts/Avenir-BookOblique.ttf") format("truetype");
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Roman.eot");
            src: url("/fonts/Avenir-Roman.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Roman.woff") format("woff"), url("/fonts/Avenir-Roman.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Avenir Black Oblique';
            src: url("/fonts/Avenir-BlackOblique.eot");
            src: url("/fonts/Avenir-BlackOblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-BlackOblique.woff") format("woff"), url("/fonts/Avenir-BlackOblique.ttf") format("truetype");
            font-weight: 900;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Oblique.eot");
            src: url("/fonts/Avenir-Oblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Oblique.woff") format("woff"), url("/fonts/Avenir-Oblique.ttf") format("truetype");
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-MediumOblique.eot");
            src: url("/fonts/Avenir-MediumOblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-MediumOblique.woff") format("woff"), url("/fonts/Avenir-MediumOblique.ttf") format("truetype");
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-HeavyOblique.eot");
            src: url("/fonts/Avenir-HeavyOblique.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-HeavyOblique.woff") format("woff"), url("/fonts/Avenir-HeavyOblique.ttf") format("truetype");
            font-weight: 900;
            font-style: italic;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Light.eot");
            src: url("/fonts/Avenir-Light.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Light.woff") format("woff"), url("/fonts/Avenir-Light.ttf") format("truetype");
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: 'Avenir Book';
            src: url("/fonts/Avenir-Book.eot");
            src: url("/fonts/Avenir-Book.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Book.woff") format("woff"), url("/fonts/Avenir-Book.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Avenir';
            src: url("/fonts/Avenir-Black.eot");
            src: url("/fonts/Avenir-Black.eot?#iefix") format("embedded-opentype"), url("/fonts/Avenir-Black.woff") format("woff"), url("/fonts/Avenir-Black.ttf") format("truetype");
            font-weight: 900;
            font-style: normal;
        }

        body {
            font-family: 'Avenir';
            background-color: #EAEFF2;
            padding: 30px;
        }
        .logo {
            width: auto;
            height: 40px;
            margin-bottom: 20px;
        }
        .content {
            background-color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 0;
        }
        .content .header {
            background: rgb(18,103,175);
            background: linear-gradient(90deg, rgba(18,103,175,1) 0%, rgba(39,155,212,1) 100%);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-size: 18px;
            font-weight: 450;
            color: white;
            padding: 10px;
        }
        .content .body {
            padding: 80px 5% 80px 5%;
        }
        .content .footer .top {
            margin: 0;
            height: 250px;
            background-image: url('{{asset('/images/email/wave-min.png')}}');
            background-position: top center;
            background-size: auto 100%;
            padding-top: 100px;
        }
        /* @media screen and (max-width:600px) {
            .content .footer .top {
                background-position: top center;
                background-size: auto 100% !important;
            } 
        } */
        .content .footer .bottom {
            background-color: #1B76AE;
            color: white;
            font-size: 12px;
            font-weight: 450;
            padding: 10px 0 10px 0;
        }
        .footer-note {
            font-size: 14px;
            color: #888C96;
            padding-top: 15px;
        }
        .footer-note a {
            font-size: 14px;
            color: #279bd4;
            font-weight: 500;
            text-decoration: none;
        }
        .footer .icon {
            height: 35px;
            padding-right: 10px;
        }
        .text-normal {
            color: white;
            font-style: normal;
        }
        .text-bold {
            color: white;
            font-weight: 450;
        }
        .text-link {
            color: white;
        }
        .text-link:hover {
            color: white;
            text-decoration: none;
        }
        .title {
            font-size: 22px;
            font-weight: bold;
            color: #3E425B;
            padding-bottom: 15px;
        }
        .description {
            font-size: 17px;
            color: #A7A9B3;
            padding-bottom: 25px;
        }
        .btn-medium-green {
            width: 100%;
            height: 50px;
            border-radius: 4px;
            font-size: 18px;
            font-weight: 500;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: center;
            color: white;
            border-radius: 4px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            background-color: #2ccc5b;
            border: 1px solid #2ccc5b;
        }
        .btn-medium-green:hover {
            cursor: pointer;
            color: #1266ae;
            background-color: white;
            text-decoration: none; 
        }
        .btn-medium-green:focus {
            outline: 0; 
        }

        @media (max-width: 600px) {
            .content .footer .top {
                height: 200px;
                background-size: auto 100% !important;
                padding-top: 55px;
            }
        }
    </style>
</head>
<body>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
        <div class="header text-center">
            @yield('title')
        </div>
        <div class="body">
            @yield('content')
            <div style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box; padding: 50px 0px;">
                Best regards,<br><br>
                Travel Agency
            </div>
        </div>
        <div class="footer" style="width:100%;">
            <div class="bottom text-center">
                Copyright &copy; 2020 Travel Agency Apps, Inc. All rights reserved.
            </div>
        </div>
    </div>

</body>
</html>
