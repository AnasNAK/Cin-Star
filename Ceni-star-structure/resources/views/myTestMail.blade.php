<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movistan &#8211; A Premium Movies Website</title>
    <meta name='robots' content='max-image-preview:large' />


    <style>
     

        header {
            height: 100vh;
            background-image:url(" {{asset('/img/witcher_season_2_promo.jpg') }}");
            background-repeat: no-repeat;
            background-position: center;
        }

        .card {
            
            --card-width: 20em;
            --primer-color: hsl(241, 100%, 70%);
            --text-color: hsl(0, 0%, 100%);
            --text-color-L2: hsl(0, 0%, 60%);
            --transition: all 0.2s cubic-bezier(0.13, 0.78, 0.3, 0.99);
            background: hsl(0, 0%, 10%);

            font-size: 12px;
            line-height: 2;

            border-radius: 1em;
            padding-bottom: 0.5em;
            z-index: 20;
            overflow: hidden;
            display: flex;
            flex-direction: column;

            transition: all 0.2s ease-in;
        }

        .detial {
            width: var(--card-width);
            padding: 01em 1em;
            color: var(--text-color);
            transition: all 0.2s ease-in;

            z-index: 1;
        }

        .name {
            font-size: 2em;
            font-weight: bold;
        }

        .title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0.5em 0;
        }

        .content {
            color: var(--text-color);
            width: var(--card-width);
            position: absolute;
            transform: rotate3D(0.4, 1, 0.4, 0deg) scale(0.4);
            padding: 2em;
            opacity: 0;
            height: 20em;
            overflow: hidden;
        }

        .thumb {
            width: var(--card-width);
            height: 20em;
            overflow: hidden;
            transition: var(--transition);

            z-index: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thumb svg {
            transform: scale(7);
            color: hsla(0, 0%, 100%, 0.2);
        }

        .card:hover {
            background-color: hsl(0, 0%, 15%);
            box-shadow: 0px 20px 40px hsl(40, 60%, 0%, 0.4),
                inset 1px 2px 4px rgba(255, 255, 255, 0.1);
            transform: scale(1.1);
        }

        .card:hover .detial {
            padding: 1em 2em;
        }

        .card:hover .thumb {
            opacity: 0.2;
            filter: blur(20px);
            transform: scale(1.5);
        }

        .card:hover .content {
            transform: none;
            opacity: 1;
            transition: var(--transition);
        }

        .infomation {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .propertion {
            font-size: 0.8em;
            color: var(--text-color-L2);
        }

        .action {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 3em;
            padding: 0 0.5em;
            border-radius: 1em;
            border: 1px solid transparent;
            transition: var(--transition);
        }

        .action:hover {
            box-shadow: 2px 4px 16px rgba(0, 0, 0, 0.6),
                inset 0.5px 1px 2px rgba(255, 255, 255, 0.1);
            background: hsla(0, 0%, 50%, 0.1);
        }

        .mode {
            color: var(--text-color-L2);
            padding: 0.4em;
            width: 2em;
            height: 2em;
            border-radius: 0.5em;
            transition: var(--transition);
        }

        .mode:hover {
            color: var(--text-color);
            background: hsla(0, 0%, 50%, 0.15);
            transform: scale(1.2);
            box-shadow: 2px 4px 16px hsla(0, 0%, 100%, 0.1);
        }

        .mode:active {
            background: hsla(0, 0%, 50%, 0.3);
            transform: scale(1);
        }

        .mode.hide {
            opacity: 0;
            transition: var(--transition);
        }

        .action:hover .mode.hide {
            opacity: 1;
        }

        .level {
            color: rgb(230, 204, 89);
        }














        body {
            x-overflow: hidden;
            font-family: "Mont";
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }

        /* HEADLINES */
        h1 {
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        h3 {
            margin-bottom: 20px;
        }

        h4 {
            margin-bottom: 20px;
        }

        h5 {
            margin-bottom: 15px;
        }

        h6 {
            margin-bottom: 15px;
        }

        /* HTML TAGS */
        img {
            max-width: 100%;
        }

        p {
            line-height: 1.7;
        }

        strong {
            font-weight: 600;
        }

        blockquote {
            background: #e90101;
            color: #fff;
            padding: 30px;
            margin-bottom: 25px;
        }

        blockquote h5 {
            font-weight: 800;
        }

        blockquote p:last-child {
            margin-bottom: 0;
        }

        blockquote a {
            color: #fff;
            text-decoration: underline;
        }

        blockquote cite {
            width: 100%;
            display: block;
            font-size: 14px;
            font-family: "Georgia";
        }

        /* LINKS */
        a {
            color: #111111;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
        }

        a:hover {
            color: #111111;
            text-decoration: underline;
        }

        /* FORM ELEMENTS */
        input[type="text"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
            color: #757575;
        }

        input[type="email"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
        }

        input[type="search"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
        }

        input[type="password"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
        }

        input[type="number"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
        }

        input[type="date"] {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
        }

        input[type="radio"] {
            width: 18px;
            height: 18px;
            display: inline-block;
            margin-right: 4px;
            transform: translateY(3px);
            appearance: none;
            background: #ededed;
            border-radius: 50%;
        }

        input[type="radio"]:checked {
            border: 6px solid #111111;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            display: inline-block;
            margin-right: 4px;
            transform: translateY(3px);
            appearance: none;
            background: #ededed;
        }

        input[type="checkbox"]:checked {
            border: 5px solid #ededed;
            background: #e90101;
        }

        textarea {
            width: 520px;
            max-width: 100%;
            height: 140px;
            padding: 30px;
            border: 1px solid #cecece;
        }

        select {
            width: 420px;
            max-width: 100%;
            height: 70px;
            padding: 0 30px;
            border: 1px solid #cecece;
            color: #757575;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc);
            background-position: calc(100% - 30px) 34px, calc(100% - 25px) 34px, calc(100% - 3.5em) 15px;
            background-size: 5px 5px, 5px 5px, 1px 40px;
            background-repeat: no-repeat;
        }

        input[type="submit"] {
            height: 70px;
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            background: #e90101;
            border: none;
            padding: 0 50px;
        }

        button[type="submit"] {
            height: 70px;
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            background: #e90101;
            border: none;
            padding: 0 50px;
        }

        button[type="submit"] i {
            display: inline-block;
            margin-right: 8px;
            font-size: 18px;
            transform: translateY(2px);
        }

        /* CUSTOM CONTAINER */
        @media (min-width: 1170px) {
            .container {
                max-width: 1100px;
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1260px;
            }
        }

        /* CUSTOM CLASSES */
        .overflow {
            overflow: hidden;
        }

        .no-gutters {
            padding: 0;
        }

        /* SPACING */
        .no-spacing {
            margin: 0 !important;
            padding: 0 !important;
        }

        .no-top-spacing {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }

        .space-50 {
            height: 50px;
        }

        /* CUSTOM BUTTON */
        .custom-button {
            height: 66px;
            line-height: 64px;
            display: inline-block;
            background: #e90101;
            color: #fff;
            font-weight: 800;
            padding: 0 50px;
            border: 2px solid transparent;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
        }

        .custom-button:hover {
            text-decoration: none;
            color: #fff;
            border-color: #e90101;
            background: none;
        }

        /* ACCORDION */
        .accordion {

            float: left;
            background: #fff;
            padding: 0;
        }

        .accordion .card {
            background: none;
            border-radius: 0;
            margin-top: -1px;
            border: 1px solid #eaebee;
        }

        .accordion .card .card-header {
            background: none;
            padding: 0;
            border-bottom: none;
        }

        .accordion .card .card-header a {
            width: 100%;
            float: left;
            font-weight: 600;
            padding: 20px 25px;
            color: #111111;
            font-size: 17px;
        }

        .accordion .card .card-header a:before {
            content: "+";
            width: 30px;
            height: 30px;
            line-height: 30px;
            float: right;
            text-align: center;
            background: #eee;
            border-radius: 50%;
            color: #111111;
            font-weight: 400;
        }

        .accordion .card .card-header a:hover {
            color: #e90101;
            text-decoration: none;
        }

        .accordion .card .card-body {
            width: 100%;
            border-top: 1px solid #eee;
            line-height: 26px;
        }

        .accordion .card [aria-expanded="true"] {
            color: #e90101 !important;
        }

        .accordion .card [aria-expanded="true"]:before {
            content: "-" !important;
            color: #111111 !important;
        }

        /* TAB */
        .nav.nav-tabs {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .nav.nav-tabs li {
            display: inline-block;
            margin-right: 20px;
        }

        .nav.nav-tabs li:last-child {
            margin-right: 0;
        }

        .nav.nav-tabs li a {
            display: inline-block;
            color: #fff;
            opacity: 0.6;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            font-weight: 600;
        }

        .nav.nav-tabs li a.active {
            opacity: 1;
        }

        .nav.nav-tabs li a:hover {
            text-decoration: none;
            opacity: 1;
        }

        .tab-content {
            width: 100%;
            display: block;
        }

        .tab-content .tab-pane {
            width: 100%;
        }

        /* HAMBURGER */
        .hamburger {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            padding: 0;
            outline: none;
        }

        .hamburger .line {
            fill: none;
            stroke: #fff;
            stroke-width: 3;
            transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1), stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hamburger .line1 {
            stroke-dasharray: 60 207;
            stroke-width: 3;
        }

        .hamburger .line2 {
            stroke-dasharray: 60 60;
            stroke-width: 3;
        }

        .hamburger .line3 {
            stroke-dasharray: 60 207;
            stroke-width: 3;
        }

        .hamburger.opened {
            margin: 0;
        }

        .hamburger.opened .line1 {
            stroke-dasharray: 90 207;
            stroke-dashoffset: -134;
            stroke-width: 3;
        }

        .hamburger.opened .line2 {
            stroke-dasharray: 1 60;
            stroke-dashoffset: -30;
            stroke-width: 3;
        }

        .hamburger.opened .line3 {
            stroke-dasharray: 90 207;
            stroke-dashoffset: -134;
            stroke-width: 3;
        }

        /* MOBILE MENU */
        .mobile-menu {
            width: 80vw;
            max-width: 500px;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
            position: fixed;
            left: -100%;
            top: 0;
            background: #111111;
            z-index: 7;
            padding: 30px;
            padding-top: 60px;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-menu .inner {
            width: 100%;
            max-height: 100%;
            display: block;
            overflow-y: auto;
        }

        .mobile-menu .mobile-search {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .mobile-menu .mobile-search h6 {
            width: 100%;
            display: block;
            color: #fff;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .mobile-menu .mobile-search form {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .mobile-menu .mobile-search form select {
            border: none;
        }

        .mobile-menu .mobile-search form input[type="search"] {
            width: 100%;
            height: 70px;
            margin: 5px 0;
            border: none;
        }

        .mobile-menu .mobile-search form input[type="submit"] {
            width: 100%;
            height: 70px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: none;
            padding: 0;
            text-align: center;
        }

        .mobile-menu .site-menu {
            width: 100%;
            display: block;
        }

        .mobile-menu .site-menu ul {
            width: 100%;
            display: block;
            margin: 0;
            padding: 0;
        }

        .mobile-menu .site-menu ul li {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 10px;
            padding: 0;
            padding-bottom: 10px;
        }

        .mobile-menu .site-menu ul li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children i {
            display: inline-block;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children ul li i {
            display: none;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children ul li.menu-item-has-children i {
            display: inline-block;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children ul li.menu-item-has-children ul li i {
            display: none;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children ul li.menu-item-has-children ul li.menu-item-has-children i {
            display: inline-block;
        }

        .mobile-menu .site-menu ul li.menu-item-has-children ul li.menu-item-has-children ul li.menu-item-has-children ul li i {
            display: none;
        }

        .mobile-menu .site-menu ul li ul {
            display: none;
            padding-left: 15px;
            margin: 15px 0;
        }

        .mobile-menu .site-menu ul li ul li {
            margin-bottom: 5px;
            padding-bottom: 5px;
            border-bottom: none;
        }

        .mobile-menu .site-menu ul li ul li a {
            width: auto;
            display: inline-block;
        }

        .mobile-menu .site-menu ul li i {
            width: 6px;
            height: 6px;
            display: none;
            border-bottom: 2px solid #fff;
            border-left: 2px solid #fff;
            transform: rotate(-45deg);
            margin-left: auto;
            margin-right: 5px;
            cursor: pointer;
        }

        .mobile-menu .site-menu ul li a {
            display: inline-block;
            color: #fff;
            font-weight: 600;
            padding: 0;
        }

        .mobile-menu .site-menu ul li a:hover {
            background: none;
        }

        .mobile-menu .site-menu ul li a:focus {
            background: none;
        }

        .mobile-menu .mobile-account {
            width: 100%;
            height: 70px;
            line-height: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: #e90101;
            padding: 0 15px;
        }

        .mobile-menu .button-account {
            width: 100%;
            height: 70px;
            line-height: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: #e90101;
            padding: 0 15px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 30px;
            margin-top: 20px;
        }

        .mobile-menu .button-account i {
            width: 40px;
            height: 40px;
            line-height: 38px;
            float: left;
            border: 2px solid #fff;
            text-align: center;
            border-radius: 50%;
            font-size: 22px;
            margin-right: 10px;
        }

        /* SEARCH BOX */
        .search-box {
            width: 100%;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 2;
            padding-top: 150px;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            background: black;
            background: -moz-linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, black 100%);
            background: -webkit-linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, black 100%);
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, black 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000", endColorstr="#000000", GradientType=1);
        }

        .search-box .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .search-box .container h6 {
            width: 100%;
            display: block;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
            color: #fff;
        }

        .search-box .container form {
            margin: 20px auto;
            border: 1px solid #fff;
            padding: 10px;
            background: #fff;
        }

        .search-box .container form select {
            width: 200px;
            border: none;
            font-size: 20px;
        }

        .search-box .container form input[type="search"] {
            background: none;
            border: none;
            font-size: 20px;
            padding-left: 0;
        }

        .search-box .container ul {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .search-box .container ul li {
            display: inline-block;
            margin: 0 10px;
            padding: 0;
            list-style: none;
        }

        .search-box .container ul li a {
            display: inline-block;
            color: #fff;
        }

        .search-box.active {
            opacity: 1;
            visibility: visible;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 30px 60px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 4;
            color: #fff;
        }

        .navbar .logo {
            margin-right: auto;
        }

        .navbar .logo a {
            display: inline-block;
        }

        .navbar .logo a img {
            height: 54px;
        }

        .navbar .site-menu {
            display: inline-block;
            margin: 0 auto;
        }

        .navbar .site-menu ul {
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }

        .navbar .site-menu ul li {
            display: inline-block;
            margin: 0 20px;
            padding: 0;
            list-style: none;
        }

        .navbar .site-menu ul li a {
            color: #fff;
            font-weight: 600;
            padding: 0;
        }

        .navbar .site-menu ul li a:hover {
            text-decoration: none;
            color: #e90101;
            background: none;
        }

        .navbar .site-menu ul li a:focus {
            background: none;
        }

        .navbar .site-menu ul li ul {
            min-width: 160px;
            position: absolute;
            left: -30px;
            top: calc(100% + 23px);
            z-index: 6;
            border: 1px solid #111111;
            background: #e90101 !important;
            padding: 20px 0;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            visibility: hidden;
            opacity: 0;
            white-space: nowrap;
        }

        .navbar .site-menu ul li ul:before {
            content: "";
            width: 100%;
            height: 23px;
            position: absolute;
            left: 0;
            top: -23px;
        }

        .navbar .site-menu ul li ul li {
            width: 100%;
            display: block;
            margin: 0;
            padding: 0 30px;
            margin-bottom: 7px;
        }

        .navbar .site-menu ul li ul li:last-child {
            margin: 0;
        }

        .navbar .site-menu ul li ul li a {
            display: inline-block;
            color: #fff;
            font-weight: 600;
        }

        .navbar .site-menu ul li ul li a:hover {
           
            text-decoration: underline;
        }

        .navbar .site-menu ul li:hover ul {
            visibility: visible;
            opacity: 1;
        }

        .navbar .site-menu ul li ul i {
            display: none !important;
        }

        .navbar .site-menu ul li:hover ul li ul {
            visibility: hidden;
            opacity: 0;
            z-index: 1;
        }

        .navbar .site-menu ul li ul li ul {
            left: 100%;
            top: -21px;
        }

        .navbar .site-menu ul li:hover ul li:hover ul {
            visibility: visible;
            opacity: 1;
            background: #212529;
        }

        .navbar .site-menu ul li:hover ul li:hover ul li ul {
            visibility: hidden;
            opacity: 0;
        }

        .navbar .site-menu ul li:hover ul li:hover ul li:hover ul {
            visibility: visible;
            opacity: 1;
            background: #2e3338;
        }

        .navbar .user-menu {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-left: auto;
        }

        .navbar .user-menu .navbar-search {
            display: inline-block;
            font-size: 20px;
            color: #fff;
            cursor: pointer;
        }

        .navbar .user-menu .navbar-bookmark {
            display: inline-block;
            margin-left: 20px;
            position: relative;
            font-size: 20px;
        }

        .navbar .user-menu .navbar-bookmark a {
            color: #fff;
        }

        .navbar .user-menu .navbar-bookmark i {
            color: #fff;
            cursor: pointer;
        }

        .navbar .user-menu .navbar-account {
            margin-left: 30px;
            display: flex;
            align-items: center;
        }

        .navbar .user-menu .navbar-account .user-dropdown {
            display: inline-block;
            font-weight: 600;
            position: relative;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul {
            width: 100%;
            margin: 0;
            padding: 0;
            position: absolute;
            right: 0;
            top: calc(100% + 10px);
        }

        .navbar .user-menu .navbar-account .user-dropdown ul:before {
            content: "";
            width: 100%;
            height: 20px;
            position: absolute;
            left: 0;
            top: -10px;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li {
            display: block;
            margin: 5px 0;
            padding: 0;
            font-size: 15px;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li i {
            display: none;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li a {
            display: inline-block;
            white-space: nowrap;
            line-height: 22px;
            padding: 0;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li a:hover {
            background: none;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li a:focus {
            background: none;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul {
            width: auto;
            min-width: 160px;
            position: absolute;
            right: -30px;
            top: calc(100% + 13px);
            z-index: 6;
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
            visibility: hidden;
            opacity: 0;
            text-align: right;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul:before {
            content: "";
            width: 100%;
            height: 13px;
            position: absolute;
            left: 0;
            top: -13px;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li {
            width: 100%;
            display: block;
            margin: 0;
            padding: 0 30px;
            margin-bottom: 7px;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li:last-child {
            margin: 0;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li a {
            display: inline-block;
            color: #fff;
            font-weight: 600;
            white-space: nowrap;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li a:hover {
            text-decoration: underline;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul {
            visibility: visible;
            opacity: 1;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul i {
            display: none !important;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul li ul {
            visibility: hidden;
            opacity: 0;
            z-index: 1;
        }

        .navbar .user-menu .navbar-account .user-dropdown ul li ul {
            right: 100%;
            top: -21px;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul li:hover ul {
            visibility: visible;
            opacity: 1;
            background: #212529;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul li:hover ul li ul {
            visibility: hidden;
            opacity: 0;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul li:hover ul li:hover ul {
            visibility: visible;
            opacity: 1;
            background: #2e3338;
        }

        .navbar .user-menu .navbar-account .user-dropdown:hover ul {
            visibility: visible;
            opacity: 1;
        }

        .navbar .user-menu .navbar-account figure {
            margin-left: 10px;
            margin-bottom: 0;
        }

        .navbar .user-menu .navbar-account figure img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .navbar .user-menu .navbar-account a {
            line-height: 40px;
            display: inline-block;
            font-weight: 600;
            color: #fff;
        }

        .navbar .user-menu .navbar-account i {
            width: 40px;
            height: 40px;
            line-height: 38px;
            float: right;
            border: 2px solid #fff;
            text-align: center;
            border-radius: 50%;
            font-size: 22px;
            margin-left: 10px;
        }

        .navbar .hamburger-menu {
            margin-left: auto;
            display: none;
        }

        /* SLIDER */
        .slider {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;

            left: 0;
            top: 0;
            background: #111111;
        }

        .slider .main-slider {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            overflow: hidden;
        }

        .slider .main-slider .swiper-slide {
            overflow: hidden;
            color: #fff;
        }

        .slider .main-slider .swiper-slide .slide-inner {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background-size: cover !important;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slider .main-slider .swiper-slide .container {
            position: relative;
            z-index: 1;
            padding-top: 100px;
        }

        .slider .main-slider .swiper-slide .container .tagline {
            width: 100%;
            display: block;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.6);
            border-left: 3px solid #e90101;
            padding-left: 10px;
        }

        .slider .main-slider .swiper-slide .container .name {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            font-size: 80px;
            font-weight: 600;
        }

        .slider .main-slider .swiper-slide .container .name strong {
            -webkit-text-stroke: 1px #fff;
            text-stroke: 1px #fff;
            -webkit-text-fill-color: transparent;
            color: transparent;
            font-size: 100px;
        }

        .slider .main-slider .swiper-slide .container .features {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 30px;
            padding: 0;
            color: #fff;
        }

        .slider .main-slider .swiper-slide .container .features .rate {
            position: relative;
            margin-right: 20px;
        }

        .slider .main-slider .swiper-slide .container .features .rate svg {
            width: 40px;
            margin-right: 8px;
            transform: rotate(-90deg);
            transform-origin: center;
        }

        .slider .main-slider .swiper-slide .container .features .rate b {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            left: 0;
            top: 0;
            font-size: 13px;
        }

        .slider .main-slider .swiper-slide .container .features .rate img {
            height: 20px;
        }

        .slider .main-slider .swiper-slide .container .features .year {
            display: inline-block;
            font-weight: 800;
            margin-right: 20px;
        }

        .slider .main-slider .swiper-slide .container .features .quality {
            height: 20px;
            line-height: 20px;
            display: inline-block;
            color: #fff;
            font-size: 13px;
            padding-left: 7px;
            border: 1px solid #fff;
            margin-right: 20px;
        }

        .slider .main-slider .swiper-slide .container .features .quality b {
            height: 18px;
            line-height: 20px;
            float: right;
            margin-left: 7px;
            padding: 0 7px;
            background: #fff;
            color: #111111;
        }

        .section1 {
            width: 100vw;
            height: auto;

        }
    </style>






    <link rel='stylesheet' id='bootstrap-css'
        href='https://www.movistan.com/wp-content/themes/digiflex/css/bootstrap.min.css?ver=6.4.3' media='all' />




</head>

<body
    class="home page-template page-template-page-home page-template-page-home-php page page-id-452 wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
    <div class="search-box">
        <div class="container">
            <form role="search" action="https://www.movistan.com/" method="get" id="searchform">
                <select name="post_type">
                    <option value="movie">Movie</option>
                    <option value="tv_show">TV Show</option>
                </select>
                <input type="search" name="s" placeholder="Search here" />
                <input type="submit" value="FIND" />
            </form>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-box -->
    <nav class="mobile-menu bg-dark">
        <div class="inner bg-black">
            <div class="mobile-search">
                <form role="search" action="https://www.movistan.com/" method="get" id="searchform2">
                    <select name="post_type">
                        <option value="movie">Movie</option>
                        <option value="tv_show">TV Show</option>
                    </select>
                    <input type="search" name="s" placeholder="Search here" />
                    <input type="submit" value="FIND" />
                </form>
            </div>
            <!-- end mobile-search -->
            <a href="https://www.movistan.com/my-account/" class="button-account"><i class="lni lni-user"></i> ACCOUNT
            </a>
            <!-- end button-account -->
            <div class="site-menu">
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu-horizontal">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-51"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-452 current_page_item active menu-item-51 nav-item">
                            <a title="HOME" href="https://www.movistan.com/" class="nav-link"
                                aria-current="page">HOME</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-52"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a
                                title="MOVIES" href="https://www.movistan.com/movies/"
                                class="nav-link">MOVIES</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-53"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a
                                title="TV SHOWS" href="https://www.movistan.com/tv-shows/" class="nav-link">TV
                                SHOWS</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-443"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-443 nav-item"><a
                                title="AUDIOBOOKS" href="https://www.movistan.com/audiobooks/"
                                class="nav-link">AUDIOBOOKS</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-45"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45 nav-item"><a
                                title="BLOG" href="https://www.movistan.com/blog/" class="nav-link">BLOG</a><i></i></li>
                    </ul>
                </div>
            </div>
            <!-- end site-menu -->
        </div>
        <!-- end inner -->
    </nav>
    <!-- end mobile-menu -->

    <nav class="navbar">
        <div class="logo"><a href="https://www.movistan.com/"><img
                    src="https://www.movistan.com/wp-content/uploads/2022/06/movistan-white-red.png" alt="Movistan"></a>
        </div>
        <div class="site-menu">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu-1" class="menu-horizontal">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-452 current_page_item active menu-item-51 nav-item">
                        <a title="HOME" href="https://www.movistan.com/" class="nav-link"
                            aria-current="page">HOME</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a
                            title="MOVIES" href="https://www.movistan.com/movies/" class="nav-link">MOVIES</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a
                            title="TV SHOWS" href="https://www.movistan.com/tv-shows/" class="nav-link">TV
                            SHOWS</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-443 nav-item"><a
                            title="AUDIOBOOKS" href="https://www.movistan.com/audiobooks/"
                            class="nav-link">AUDIOBOOKS</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45 nav-item"><a
                            title="BLOG" href="https://www.movistan.com/blog/" class="nav-link">BLOG</a><i></i></li>
                </ul>
            </div>
        </div>
        <!-- end site-menu -->

        <div class="user-menu">
            <div class="navbar-search"> <i class="lni lni-search-alt"></i> </div>
            <!-- end navbar-search -->
            <div class="navbar-bookmark"> <a href="https://www.movistan.com/bookmark/"><i
                        class="lni lni-bookmark"></i></a> </div>
            <!-- end navbar-bookmark -->
            <div class="navbar-account">
                <a href="https://www.movistan.com/my-account/">ACCOUNT <i class="lni lni-user"></i> </a>
            </div>
            <!-- end navbar-account -->
        </div>
        <!-- end user-menu -->

        <div class="hamburger-menu">
            <button class="hamburger">
                <svg width="45" height="45" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
        <!-- end hamburger-menu -->
    </nav>
    <header class="slider">
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="container" data-swiper-parallax="200">
                            <h6 class="tagline">NEW RELEASES</h6>
                            <h2 class="name">Future Hell</h2>
                            <div class="features">
                                <div class="rate">
                                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40"
                                        fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart__background" stroke="#eee" stroke-width="2"
                                            fill="none" cx="15" cy="15" r="14"></circle>
                                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                            stroke-dasharray="48,100" cx="15" cy="15" r="14"></circle>
                                    </svg>
                                    <b>
                                        5.6 </b> <img
                                        src="https://www.movistan.com/wp-content/themes/digiflex/images/imdb-logo.svg"
                                        alt="IMDB"> Score
                                </div>
                                <!-- end rate -->
                                <div class="year">
                                    2020 </div>
                                <!-- end year -->
                                <div class="quality">
                                    4K <b>Ultra HD</b> </div>
                                <!-- end quality -->
                                <div class="range">
                                    1 hr 33 min </div>
                                <!-- end range -->
                                <div class="cc">CC</div>
                                <div class="category">
                                    Action Adventure Comedy Romance </div>
                            </div>
                            <!-- end features -->
                            <p class="description">
                                Based on Edgar Allan Poe's classic bone-chilling tale, this bloody story will have you
                                sleeping with the lights on for years to come. Nine year-old orphan <strong>Beth
                                    Harmon</strong> is quiet, sullen, and by all appearances unremarkable. </p>
                            <a href="https://www.movistan.com/movie/future-hell/" class="play-btn">WATCH NOW</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->



            </div>

        </div>

        <!-- end main-slider -->
    </header>


    <main>
        <section class="section1">
         

        <div class="group columns-6 px-4">
  <div class="card-box py-5">
    <div id="Hegel" class="card bg-dark">
      <div class="content">
        <p class="some">
          A film – also called a movie, motion picture, moving picture, picture,
          photoplay or (slang) flick – is a work of visual art that simulates
          experiences and otherwise communicates ideas, stories, perceptions,
          feelings, beauty, or atmosphere through the use of moving images.
          These images are generally accompanied by sound and, more rarely,
          other sensory stimulations.[1] The word "cinema", short for
          cinematography, is often used to refer to filmmaking and the film
          industry, and the art form that is the result of it.
        </p>
      </div>
      <div class="thumb">
        <svg
          viewBox="0 0 16 16"
          class="bi bi-camera-reels"
          fill="currentColor"
          height="16"
          width="16"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"
          ></path>
          <path
            d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"
          ></path>
          <path
            d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
          ></path>
        </svg>
      </div>
      <div class="detial">
        <div class="title">
          <p class="name">Film</p>
          <div class="action">
            <svg
              class="mode hide"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
              ></path>
            </svg>
            <svg
              class="mode hide"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"
              ></path>
            </svg>
            <svg
              class="mode"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"
              ></path>
            </svg>
            <svg
              viewBox="0 0 16 16"
              fill="currentColor"
              height="16"
              width="16"
              xmlns="http://www.w3.org/2000/svg"
              class="mode"
            >
              <path
                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z"
              ></path>
            </svg>
          </div>
        </div>
        <div class="level columns-5">
          <svg
            viewBox="0 0 16 16"
            class="bi bi-star-fill"
            fill="currentColor"
            height="16"
            width="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
            ></path>
          </svg>
          <svg
            viewBox="0 0 16 16"
            class="bi bi-star-fill"
            fill="currentColor"
            height="16"
            width="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
            ></path>
          </svg>
          <svg
            viewBox="0 0 16 16"
            class="bi bi-star-fill"
            fill="currentColor"
            height="16"
            width="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
            ></path>
          </svg>
          <svg
            viewBox="0 0 16 16"
            class="bi bi-star-fill"
            fill="currentColor"
            height="16"
            width="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
            ></path>
          </svg>
          <svg
            viewBox="0 0 16 16"
            class="bi bi-star"
            fill="currentColor"
            height="16"
            width="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
            ></path>
          </svg>
        </div>

        <div class="infomation">
          <p class="propertion">2024.1.11</p>
          <p class="propertion">xxx</p>
          <p class="propertion">type</p>
        </div>
      </div>
    </div>
  </div>
</div>



        </section>
    </main>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>