<?php /* This is the template for the header @package twin dragon theme */ ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style1.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style2.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style3.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style4.css" media="all" />
  <meta charset="UTF-8">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="https://ld-wp.template-help.com/wordpress_58926/xmlrpc.php">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Twin Dragon Restaurant</title>
  <style type="text/css">
    body #booked-profile-page input[type=submit].button-primary:hover,
    body table.booked-calendar input[type=submit].button-primary:hover,
    body .booked-modal input[type=submit].button-primary:hover,
    body table.booked-calendar thead,
    body table.booked-calendar thead th,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
    body #booked-profile-page .booked-profile-appt-list .appt-block .google-cal-button,
    body #booked-profile-page .booked-profile-header {
      background: #365769 !important
    }
    body #booked-profile-page input[type=submit].button-primary:hover,
    body table.booked-calendar input[type=submit].button-primary:hover,
    body .booked-modal input[type=submit].button-primary:hover,
    body table.booked-calendar th,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
    body #booked-profile-page .booked-profile-appt-list .appt-block .google-cal-button,
    body #booked-profile-page .booked-profile-header {
      border-color: #365769 !important
    }
    body table.booked-calendar tr.days,
    body table.booked-calendar tr.days th,
    body .booked-calendarSwitcher,
    body .booked-calendarSwitcher select {
      background: #264452 !important
    }
    body table.booked-calendar tr.days th {
      border-color: #264452 !important
    }
    body #booked-profile-page input[type=submit].button-primary,
    body table.booked-calendar input[type=submit].button-primary,
    body .booked-modal input[type=submit].button-primary,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
    body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block {
      background: #56c477
    }
    body #booked-profile-page input[type=submit].button-primary,
    body table.booked-calendar input[type=submit].button-primary,
    body .booked-modal input[type=submit].button-primary,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button {
      border-color: #56c477
    }

  </style>
  <link rel="alternate" type="application/rss+xml" title="Confucius &raquo; Feed" href="https://ld-wp.template-help.com/wordpress_58926/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Confucius &raquo; Comments Feed" href="https://ld-wp.template-help.com/wordpress_58926/comments/feed/" />
  <script type="text/javascript">
    /*<![CDATA[*/
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
      "ext": ".png",
      "source":
      {
        "concatemoji": "http:\/\/ld-wp.template-help.com\/wordpress_58926\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.11"
      }
    };
    ! function (a, b, c)
    {
      function d(a)
      {
        var c, d, e, f = b.createElement("canvas"),
          g = f.getContext && f.getContext("2d"),
          h = String.fromCharCode;
        if (!g || !g.fillText) return !1;
        switch (g.textBaseline = "top", g.font = "600 32px Arial", a)
        {
        case "flag":
          return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL()
            .length > 3e3;
        case "diversity":
          return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1)
            .data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1)
            .data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
        case "simple":
          return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1)
            .data[0];
        case "unicode8":
          return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1)
            .data[0]
        }
        return !1
      }

      function e(a)
      {
        var c = b.createElement("script");
        c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
      }
      var f, g, h, i;
      for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
      c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function ()
      {
        c.DOMReady = !0
      }, c.supports.everything || (g = function ()
      {
        c.readyCallback()
      }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function ()
      {
        "complete" === b.readyState && c.readyCallback()
      })), f = c.source ||
      {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
    }(window, document, window._wpemojiSettings); /*]]>*/

  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important
    }

  </style>
  <link rel='stylesheet' id='booked-gf-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A600%2C400%7CMontserrat%3A700%2C400&#038;subset=cyrillic%2Ccyrillic-ext%2Clatin%2Cgreek-ext%2Cgreek%2Clatin-ext%2Cvietnamese&#038;ver=1.6.11' type='text/css' media='all' />
  <link rel='stylesheet' id='cherry-google-fonts-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A400%7CDelius%3A400%7CKaushan+Script%3A400%7CMontserrat%3A700%7CRoboto%3A300&#038;subset=latin%2Cgreek&#038;ver=4.5.11' type='text/css' media='all' />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery_copy.js"></script>
  <script type="text/javascript">
    var profilePage = 'https://ld-wp.template-help.com/wordpress_58926/';
    var timeFormat = 'h:i A';
    var timeInterval = 60;
    var i18n_confirm_appt_delete = 'Are you sure you want to cancel this appointment?',
      i18n_please_wait = 'Please wait...',
      i18n_wrong_username_pass = 'Wrong username/password combination.',
      i18n_request_appointment = 'Request Appointment',
      i18n_fill_out_required_fields = 'Please fill out all required fields.',
      i18n_appt_required_fields = 'A first name and an email address are required fields.';

  </script>
  <link rel='https://api.w.org/' href='https://ld-wp.template-help.com/wordpress_58926/wp-json/' />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ld-wp.template-help.com/wordpress_58926/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ld-wp.template-help.com/wordpress_58926/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 4.5.11" />
  <link rel="canonical" href="https://ld-wp.template-help.com/wordpress_58926/" />
  <link rel='shortlink' href='https://ld-wp.template-help.com/wordpress_58926/' />
  <link rel="alternate" type="application/json+oembed" href="https://ld-wp.template-help.com/wordpress_58926/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fld-wp.template-help.com%2Fwordpress_58926%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://ld-wp.template-help.com/wordpress_58926/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fld-wp.template-help.com%2Fwordpress_58926%2F&#038;format=xml" />
  <style type="text/css">
    .showcase-active .header-wrapper {
      background-image: url(<?php echo get_template_directory_uri(); ?>/img/dumplings.jpg)
    }
    body.error404 {
      background-image: url(https://ld-wp.template-help.com/wordpress_58926/wp-content/themes/confucius/assets/images/bg_404.jpg)
    }
    .header-wrapper {
      background-image: url(<?php echo get_template_directory_uri(); ?>/img/dumplings.jpg)
    }

  </style>
  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important
    }

  </style>
  <link rel="icon" href="https://ld-wp.template-help.com/wordpress_58926/wp-content/uploads/2016/06/cropped-Favicon-150x150.png" sizes="32x32" />
  <link rel="icon" href="https://ld-wp.template-help.com/wordpress_58926/wp-content/uploads/2016/06/cropped-Favicon-300x300.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="https://ld-wp.template-help.com/wordpress_58926/wp-content/uploads/2016/06/cropped-Favicon-190x190.png" />
  <meta name="msapplication-TileImage" content="https://ld-wp.template-help.com/wordpress_58926/wp-content/uploads/2016/06/cropped-Favicon-300x300.png" />
  <style type="text/css">
    body {
      font-style: normal;
      font-weight: 400;
      font-size: 15px;
      line-height: 1.6;
      font-family: 'Open Sans', sans-serif;
      letter-spacing: -0.3px;
      text-align: left;
      color: #69564b
    }
    h1 {
      font-style: normal;
      font-weight: 400;
      font-size: 40px;
      line-height: 1.1;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      text-align: inherit;
      color: #69564b
    }
    h2 {
      font-style: normal;
      font-weight: 400;
      font-size: 37px;
      line-height: 1.12;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      text-align: inherit;
      color: #69564b
    }
    h3 {
      font-style: normal;
      font-weight: 400;
      font-size: 32px;
      line-height: 1.15;
      font-family: 'Kaushan Script', handwriting;
      letter-spacing: 0px;
      text-align: inherit;
      color: #a55340
    }
    h4 {
      font-style: normal;
      font-weight: 400;
      font-size: 26px;
      line-height: 1.2;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      text-align: inherit;
      color: #69564b
    }
    h5 {
      font-style: normal;
      font-weight: 400;
      font-size: 22px;
      line-height: 1.3;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      text-align: inherit;
      color: #69564b
    }
    h6 {
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height: 1.3;
      font-family: 'Open Sans', sans-serif;
      letter-spacing: -0.4px;
      text-align: inherit;
      color: #69564b
    }
    @media (min-width: 992px) {
      h1 {
        font-size: 60px
      }
      h2 {
        font-size: 55px
      }
      h3 {
        font-size: 42px
      }
      h4 {
        font-size: 30px
      }
    }
    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a {
      color: #a55340
    }
    h1 a:hover,
    h2 a:hover,
    h3 a:hover,
    h4 a:hover,
    h5 a:hover,
    h6 a:hover {
      color: #15191c
    }
    a {
      color: #d54d35
    }
    a:hover {
      color: #15191c
    }
    .invert {
      color: #fff
    }
    .invert h1 {
      color: #fff
    }
    .invert h2 {
      color: #fff
    }
    .invert h3 {
      color: #fff
    }
    .invert h4 {
      color: #fff
    }
    .invert h5 {
      color: #fff
    }
    .invert h6 {
      color: #fff
    }
    .invert a {
      color: #fff
    }
    .invert a:hover {
      color: #d54d35
    }
    .invert a[href*="mailto:"] {
      color: #d54d35
    }
    .invert a[href*="mailto:"]:hover {
      color: #fff
    }
    @media (min-width: 1200px) {
      .container {
        max-width: 1200px
      }
    }
    body.error404 {
      background-color: #000;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: scroll
    }
    .accent-color-1 {
      color: #a55340
    }
    .accent-color-2 {
      color: #15191c
    }
    .accent-color-3 {
      color: #f5f2df
    }
    blockquote {
      font-family: 'Kaushan Script', handwriting
    }
    blockquote:before {
      color: rgb(249, 167, 148)
    }
    blockquote cite {
      color: #555;
      font-family: 'Open Sans', sans-serif
    }
    blockquote cite a {
      color: #d54d35
    }
    blockquote a:hover {
      color: #15191c
    }
    code {
      color: #fff;
      background: #d54d35;
      font-style: normal;
      font-weight: 400;
      font-size: 15px;
      line-height: 1.6;
      font-family: 'Open Sans', sans-serif
    }
    .entry-content ol>li:before {
      color: rgb(249, 167, 148);
      font-family: 'Kaushan Script', handwriting
    }
    .entry-content dl dt {
      color: #15191c
    }
    ul.marked-list>li:before {
      color: rgb(249, 167, 148)
    }
    .header-wrapper {
      background-color: #000;
      );
      */background-repeat: no-repeat;
      background-position: center top;
      background-attachment: scroll
    }
    .isStuck {
      background-color: #000
    }
    .site-logo {
      font-style: normal;
      font-weight: 400;
      font-size: 39px;
      font-family: 'Kaushan Script', handwriting
    }
    .site-logo a,
    .site-logo__link:hover {
      color: #15191c
    }
    .invert .site-logo a,
    .invert .site-logo__link:hover {
      color: #fff
    }
    .top-panel {
      background-color: #000
    }
    .invert .info-block {
      color: #fff
    }
    .info-block .fa,
    .info-block .material-icon {
      color: #a55340
    }
    .invert .info-block .fa,
    .invert .info-block .material-icon {
      color: rgb(194, 175, 164)
    }
    .showcase-active .header-wrapper {
      background-color: #8c2f23;
      background-repeat: no-repeat;
      background-position: center top;
      background-attachment: scroll
    }
    .showcase-active .header-wrapper:before {
      background-color: rgba(0, 0, 0, 0)
    }
    .showcase-panel .showcase-panel__title {
      font-style: normal;
      font-weight: 400;
      font-size: 34px;
      line-height: 1.1;
      font-family: 'Kaushan Script', handwriting;
      letter-spacing: 0px;
      color: #d34d34;
      text-transform: none
    }
    .showcase-panel .showcase-panel__subtitle {
      font-style: normal;
      font-weight: 400;
      font-size: 47px;
      line-height: 1.2;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      color: #6a564d;
      text-transform: none
    }
    .showcase-panel .showcase-panel__description {
      font-size: 20px;
      color: #6a564d
    }
    @media (min-width: 768px) {
      .showcase-panel .showcase-panel__title {
        font-size: 42px
      }
      .showcase-panel .showcase-panel__subtitle {
        font-size: 62px
      }
    }
    @media (min-width: 992px) {
      .showcase-panel .showcase-panel__title {
        font-size: 42px
      }
      .showcase-panel .showcase-panel__subtitle {
        font-size: 77px
      }
    }
    .showcase-panel .showcase-panel__btn {
      background-color: #fff;
      border-color: #fff;
      color: #d54d35
    }
    .showcase-panel .showcase-panel__btn:hover {
      background-color: #a55340;
      border-color: #a55340;
      color: #fff
    }
    input.search-form__field {
      background-color: #fff;
      color: #69564b
    }
    .search-form__submit {
      color: #d54d35
    }
    .search-form__submit:hover {
      color: #15191c
    }
    .top-panel input.search-form__field,
    .invert.top-panel input.search-form__field {
      background-color: rgb(12, 16, 19)
    }
    .top-panel .search-form__field,
    .invert.top-panel .search-form__field {
      color: #fff
    }
    .top-panel .search-form__submit,
    .invert.top-panel .search-form__submit {
      color: #fff
    }
    .top-panel .search-form__submit:hover,
    .invert.top-panel .search-form__submit:hover {
      color: #d54d35
    }
    .search-form__field::-webkit-input-placeholder {
      color: #555
    }
    .search-form__field::-moz-placeholder {
      color: #555
    }
    .search-form__field:-moz-placeholder {
      color: #555
    }
    .search-form__field:-ms-input-placeholder {
      color: #555
    }
    button,
    input[type='button'],
    input[type='reset'],
    input[type='submit'] {
      font-family: Montserrat, sans-serif
    }
    .comment-form .submit,
    .wpcf7-submit,
    .post-password-form label+input {
      font-family: Montserrat, sans-serif;
      background-color: transparent;
      border-color: rgb(194, 175, 164);
      color: #a55340
    }
    .comment-form .submit:hover,
    .wpcf7-submit:hover,
    .post-password-form label+input:hover {
      background-color: #d54d35;
      border-color: #d54d35;
      color: #fff
    }
    .comment-form .submit:active,
    .wpcf7-submit:active,
    .post-password-form label+input:active {
      box-shadow: 0 0 10px #a55340
    }
    ::-webkit-input-placeholder {
      color: #15191c
    }
    ::-moz-placeholder {
      color: #15191c
    }
    :-moz-placeholder {
      color: #15191c
    }
    :-ms-input-placeholder {
      color: #15191c
    }
    .social-list a::before {
      color: #555
    }
    .social-list a:hover::before {
      color: #d54d35
    }
    .invert .social-list a:hover::before {
      color: #fff
    }
    .share-btns__link {
      color: #555
    }
    .share-btns__link:hover {
      color: #d54d35
    }
    .main-navigation .menu > li > a,
    .footer-menu .footer-menu__items>li>a {
      font-family: Montserrat, sans-serif;
      font-style: normal;
      font-weight: 700;
      font-size: 14px;
      line-height: 1.6;
      letter-spacing: 0px;
      color: #15191c
    }
    @media (max-width: 767px) {
      .main-navigation .menu>li>a {
        color: #fff
      }
    }
    .invert .main-navigation .menu > li > a,
    .invert .footer-menu .footer-menu__items>li>a {
      color: #fff
    }
    .main-navigation .menu > li > a:hover,
    .main-navigation .menu > li.menu-hover > a,
    .main-navigation .menu > li.current_page_item > a,
    .main-navigation .menu > li.current_page_ancestor > a,
    .main-navigation .menu > li.current-menu-item > a,
    .main-navigation .menu>li.current-menu-ancestor>a {
      color: #a55340
    }
    .page-id-1 #menu-item-1 > a,
    .page-id-2 #menu-item-2 > a,
    .term-21 #menu-item-21 > a,
    .term-22 #menu-item-22 > a,
    .term-23 #menu-item-23 > a,
    .term-24 #menu-item-24 > a,
    .page-id-3 #menu-item-3 > a,
    .page-id-4 #menu-item-4 > a,
    .page-id-5 #menu-item-5 > a {
      color: #a55340
    }
    .footer-menu .footer-menu__items > li > a:hover,
    .footer-menu .footer-menu__items > li.menu-hover > a,
    .footer-menu .footer-menu__items > li.current_page_ancestor > a,
    .footer-menu .footer-menu__items > li.current_menu_ancestor > a,
    .footer-menu .footer-menu__items > li.current-menu-item > a,
    .footer-menu .footer-menu__items>li.current_page_item>a {
      color: #d54d35
    }
    .main-navigation .sub-menu {
      background: rgb(12, 16, 19)
    }
    .main-navigation .menu>li>.sub-menu {
      background: #15191c
    }
    .main-navigation ul ul a {
      color: #fff
    }
    .main-navigation .sub-menu > li > a:hover,
    .main-navigation .sub-menu > li.menu-hover > a,
    .main-navigation .sub-menu > li.current_page_item > a,
    .main-navigation .sub-menu > li.current_page_ancestor > a,
    .main-navigation .sub-menu > li.current-menu-item > a,
    .main-navigation .sub-menu>li.current-menu-ancestor>a {
      color: #d54d35
    }
    .menu-item__desc {
      font-family: 'Open Sans', sans-serif
    }
    .sub-menu .menu-item__desc {
      color: #fff
    }
    @media (max-width: 767px) {
      .main-navigation .menu,
      .main-navigation .menu::before {
        background: #15191c
      }
      .main-navigation .menu li .sub-menu {
        background: rgb(12, 16, 19)
      }
    }
    .footer-menu__items li.current-menu-item a,
    .footer-menu__items li.current_page_item a {}.sticky__label {
      color: #fff;
      background-color: #a55340
    }
    .format-link.no-thumb .sticky__label,
    .format-link.no-thumb .sticky__label:before {
      background-color: #15191c
    }
    .post__cats {
      color: #d54d35
    }
    .post__cats a,
    #tm_builder_outer_content .custom-posts .post__cats a {
      font-family: Delius, handwriting;
      background: #a55340;
      color: #fff;
      border-color: #a55340
    }
    #tm_builder_outer_content .custom-posts .post__cats a:hover,
    .post__cats a:hover {
      background: #fff;
      color: #15191c
    }
    .invert .post__cats a:hover {
      background-color: transparent;
      color: #fff
    }
    .entry-meta .material-icons,
    .post__tags .material-icons,
    .post__cats .material-icons,
    .entry-meta .fa,
    .post__tags .fa,
    .post__cats .fa {
      color: #a55340
    }
    .post__date a,
    .posted-by a:hover,
    .post__comments a:hover,
    .post__comments a:hover i {
      color: #69564b
    }
    .post__date a:hover {
      color: #d54d35
    }
    .post__tags a,
    #tm_builder_outer_content .custom-posts .post__tags a {
      font-family: Delius, handwriting;
      border-color: #a55340;
      color: #15191c;
      background-color: #fff
    }
    .post__tags a:hover,
    #tm_builder_outer_content .custom-posts .post__tags a:hover,
    .invert .post__tags a:hover {
      border-color: #a55340;
      background-color: #a55340;
      color: #fff
    }
    .invert .post__tags a {
      background-color: transparent;
      color: #fff
    }
    .format-quote .post-quote {
      background: #15191c
    }
    .format-quote .post-quote blockquote {
      color: #fff
    }
    .format-quote .post-quote blockquote a:hover {
      color: #fff
    }
    .post-thumbnail__format-link {
      background-color: #a55340
    }
    .post-format-link,
    .post-format-link:hover {
      color: #fff
    }
    .post-author__holder {
      background-color: #15191c
    }
    .comment-form__input-title {
      color: #15191c
    }
    .comment-metadata .fn {
      color: #a55340
    }
    .comment-date {
      color: #69564b
    }
    .comment-date:hover {
      color: #d54d35
    }
    .comment-reply-link {
      font-family: Delius, handwriting
    }
    .comment-content {
      color: #15191c
    }
    #cancel-comment-reply-link {
      color: #d54d35
    }
    #cancel-comment-reply-link:hover {
      color: #15191c
    }
    .comment-respond {
      background: #f5f2df
    }
    .swiper-slide:hover {
      background-color: rgba(165, 83, 64, 0.1)
    }
    .swiper-pagination-bullet {
      background-color: #a55340
    }
    .swiper-button-next,
    .swiper-button-prev {
      color: #15191c;
      background-color: #fff
    }
    .swiper-button-next:not(.swiper-button-disabled):hover,
    .swiper-button-prev:not(.swiper-button-disabled):hover {
      color: #fff;
      background-color: #a55340
    }
    .page-numbers,
    .page-links .page-links__item {
      font-style: normal;
      font-weight: 700;
      font-size: 16px;
      line-height: 1.5;
      font-family: Montserrat, sans-serif;
      letter-spacing: 0px;
      color: #69564b
    }
    a.page-numbers:hover,
    .page-numbers.current,
    .page-links a:hover .page-links__item,
    .page-links>.page-links__item {
      color: #a55340
    }
    .page-numbers.next,
    .page-numbers.prev {
      color: #d54d35
    }
    .page-numbers.next:hover,
    .page-numbers.prev:hover {
      color: #15191c
    }
    .comment-navigation a,
    .posts-navigation a,
    .post-navigation a {
      font-style: normal;
      font-weight: 700;
      font-size: 16px;
      line-height: 1.5;
      font-family: Montserrat, sans-serif;
      letter-spacing: 0px
    }
    .breadcrumbs__item {
      font-style: normal;
      font-weight: 300;
      font-size: 13px;
      line-height: 1.5;
      font-family: Roboto, sans-serif;
      letter-spacing: 0px;
      color: #555
    }
    .footer-container {
      background-color: #281612
    }
    .footer-area-wrap,
    .footer-top {
      background-color: #321c17
    }
    .invert .site-info {
      color: #69564b
    }
    .invert .site-info a {
      color: #d54d35
    }
    .invert .site-info a:hover {
      color: #fff
    }
    .invert.footer-area-container {
      color: rgb(194, 175, 164)
    }
    #toTop {
      background: #a55340;
      color: #fff
    }
    #toTop:hover {
      color: #fff;
      background-color: #d54d35
    }
    .page-preloader-cover .dot1,
    .page-preloader-cover .dot2 {
      background-color: #a55340
    }
    .btn-link,
    .btn {
      font-family: Montserrat, sans-serif
    }
    .btn:active {
      box-shadow: 0 0 10px #a55340
    }
    .btn.btn-primary,
    .entry-content #tm_builder_outer_content .btn.btn-primary {
      background-color: transparent;
      border-color: rgb(194, 175, 164);
      color: #a55340
    }
    .btn.btn-primary:hover,
    .entry-content #tm_builder_outer_content .btn.btn-primary:hover {
      background-color: #d54d35;
      border-color: #d54d35;
      color: #fff
    }
    .invert .btn.btn-primary,
    .entry-content #tm_builder_outer_content .invert .btn.btn-primary {
      border-color: #fff;
      color: #fff
    }
    .invert .btn.btn-primary:hover,
    .entry-content #tm_builder_outer_content .invert .btn.btn-primary:hover {
      border-color: #d54d35;
      color: #fff
    }
    #tm_builder_outer_content h1 a,
    #tm_builder_outer_content h2 a,
    #tm_builder_outer_content h3 a,
    #tm_builder_outer_content h4 a,
    #tm_builder_outer_content h5 a,
    #tm_builder_outer_content h6 a {
      color: #d54d35
    }
    #tm_builder_outer_content h1 a:hover,
    #tm_builder_outer_content h2 a:hover,
    #tm_builder_outer_content h3 a:hover,
    #tm_builder_outer_content h4 a:hover,
    #tm_builder_outer_content h5 a:hover,
    #tm_builder_outer_content h6 a:hover {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm-pb-slider-arrows {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm-pb-arrow-prev:hover,
    .entry-content #tm_builder_outer_content .tm-pb-arrow-next:hover {
      color: #fff !important;
      background-color: #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_promo {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_button {
      font-family: Montserrat, sans-serif
    }
    .entry-content #tm_builder_outer_content .tm_pb_button,
    .entry-content #tm_builder_outer_content .tm_pb_button.tm_pb_more_button,
    .entry-content #tm_builder_outer_content .tm_pb_button.tm_pb_promo_button {
      color: #a55340;
      background-color: transparent;
      border-color: rgb(194, 175, 164)
    }
    .entry-content #tm_builder_outer_content .tm_pb_button:hover {
      background-color: #d54d35;
      border-color: #d54d35;
      color: #fff
    }
    .entry-content #tm_builder_outer_content .invert .tm_pb_button,
    .entry-content #tm_builder_outer_content .tm_pb_button.tm_pb_more_button {
      color: #fff;
      border-color: rgb(255, 136, 112)
    }
    .entry-content #tm_builder_outer_content .invert .tm_pb_button:hover,
    .entry-content #tm_builder_outer_content .tm_pb_button.tm_pb_more_button:hover {
      background-color: #fff;
      border-color: #fff;
      color: #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_button:active {
      box-shadow: 0 0 10px #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_testimonial:before {
      color: #f5f2df
    }
    .entry-content #tm_builder_outer_content .tm_pb_testimonial_author {
      font-weight: 400
    }
    .entry-content #tm_builder_outer_content .tm_pb_testimonial_meta {
      font-family: Montserrat, sans-serif
    }
    .entry-content #tm_builder_outer_content .tm_pb_testimonial_meta {
      color: rgb(194, 175, 164)
    }
    .entry-content #tm_builder_outer_content .custom-hover-1::after {
      background-color: #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_blurb h4 {
      font-family: Delius, handwriting
    }
    .entry-content #tm_builder_outer_content .tm_pb_member_position {
      color: #555
    }
    .entry-content #tm_builder_outer_content .tm_pb_team_member_description {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_member_social_links a {
      color: #555
    }
    .entry-content #tm_builder_outer_content .tm_pb_member_social_links a:hover {
      color: #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_toggle.tm_pb_toggle_close {
      background-color: #f5f2df
    }
    .entry-content #tm_builder_outer_content .tm_pb_toggle_title {
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height: 1.3;
      font-family: 'Open Sans', sans-serif;
      letter-spacing: -0.4px;
      color: #69564b
    }
    .entry-content #tm_builder_outer_content .tm_pb_toggle_content {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing_heading h2 {
      font-family: Delius, handwriting
    }
    .entry-content #tm_builder_outer_content .tm_pb_tm_price,
    .entry-content #tm_builder_outer_content .tm_pb_pricing .tm_pb_dollar_sign {
      color: #15191c;
      font-family: Delius, handwriting
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing .tm_pb_pricing_content {
      background-color: #f5f2df
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing li:not(.tm_pb_not_available) {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing .tm_pb_pricing_table_button {
      border-color: #15191c;
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing .tm_pb_pricing_table_button:hover {
      background-color: #15191c;
      color: #fff
    }
    .entry-content #tm_builder_outer_content .tm_pb_pricing .tm_pb_pricing_table_button:active {
      box-shadow: 0 0 10px #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_featured_table .tm_pb_pricing_table_button {
      border-color: #a55340;
      color: #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_featured_table .tm_pb_pricing_table_button:hover {
      background-color: #d54d35;
      border-color: #d54d35;
      color: #fff
    }
    .entry-content #tm_builder_outer_content .tm_pb_featured_table .tm_pb_pricing_table_button:active {
      box-shadow: 0 0 10px #a55340
    }
    .entry-content #tm_builder_outer_content .tm_pb_contact_form_label {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_contact_form_container {
      background: #f5f2df
    }
    .entry-content #tm_builder_outer_content .tm_pb_counter_title {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_tab {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_tabs_controls li {
      background: #f5f2df;
      color: #69564b
    }
    .entry-content #tm_builder_outer_content .tm_pb_social_media_follow li a.icon:hover {
      color: #a55340 !important
    }
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer_container {
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer .section .value,
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer .countdown-sep {
      font-family: Delius, handwriting
    }
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer .countdown-sep,
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer .section .label {
      color: #555
    }
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer.invert .countdown-sep {
      color: rgba(255, 255, 255, 0.5)
    }
    .entry-content #tm_builder_outer_content .tm_pb_countdown_timer h4 {}.entry-content #tm_builder_outer_content .tm_pb_circle_counter .percent p,
    .entry-content #tm_builder_outer_content .tm_pb_slide_content .tm_pb_circle_counter .percent p:last-of-type {
      font-family: Delius, handwriting;
      color: #15191c
    }
    .entry-content #tm_builder_outer_content .tm_pb_number_counter .percent {
      font-family: Delius, handwriting
    }
    .entry-content #tm_builder_outer_content .tm_pb_post_slider .post-meta a:hover {
      color: #d54d35 !important
    }
    .more-link {
      font-family: Montserrat, sans-serif
    }
    #tm_builder_outer_content .tm_link_content,
    #tm_builder_outer_content .tm_audio_content {
      background-color: #a55340
    }
    #tm_builder_outer_content .tm_quote_content {
      background-color: #15191c
    }
    .mprm-related-item a .mprm-related-title {
      font-family: Delius, handwriting
    }
    .mprm-related-item a .mprm-related-title {
      color: #d54d35
    }
    .mprm-related-item a:hover .mprm-related-title,
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-container .mprm-item-title a:hover,
    .site-content .mprm-shortcode-items .mprm-item-title a:hover,
    .widget.mprm_widget .mprm-container.mprm-widget-items .mprm-item-title a:hover {
      color: #15191c
    }
    .invert .site-content .mprm-main-wrapper.mp_menu_item .mprm-container .mprm-item-title a:hover,
    .invert .site-content .mprm-shortcode-items .mprm-item-title a:hover,
    .invert .widget.mprm_widget .mprm-container.mprm-widget-items .mprm-item-title a:hover {
      color: #d54d35
    }
    .invert .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-grid .mprm-item-title a {
      color: #d54d35
    }
    .invert .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-grid .mprm-item-title a:hover {
      color: #15191c
    }
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-excerpt,
    .site-content .mprm-shortcode-items .mprm-excerpt,
    .widget.mprm_widget .mprm-container.mprm-widget-items .mprm-excerpt {
      color: #555
    }
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-price,
    .site-content .mprm-shortcode-items .mprm-price,
    .widget.mprm_widget .mprm-container.mprm-widget-items .mprm-price {
      color: #a55340;
      font-family: Montserrat, sans-serif
    }
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-tags .mprm-tag,
    .site-content .mprm-shortcode-items .mprm-tags .mprm-tag,
    .widget.mprm_widget .mprm-container.mprm-widget-items .mprm-tags .mprm-tag {
      font-family: Delius, handwriting;
      color: #fff;
      background: #a55340
    }
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-header {
      background-color: #15191c
    }
    .mprm-breadcrumbs li a {
      color: #d54d35 !important
    }
    .mprm-breadcrumbs li a:hover {
      color: #15191c !important
    }
    .site-content .mprm-container.mprm-shortcode-categories .mprm-menu-category .mprm-effect-hover:before,
    .site-content .mprm-container.mprm-shortcode-categories .mprm-menu-category .mprm-effect-hover:after,
    .widget.mprm_widget .mprm-container.mprm-widget-categories .mprm-menu-category .mprm-effect-hover:before,
    .widget.mprm_widget .mprm-container.mprm-widget-categories .mprm-menu-category .mprm-effect-hover:after {
      background: rgba(21, 25, 28, 0.2)
    }
    .site-content .mprm-container.mprm-shortcode-categories.mprm-view-grid .mprm-title,
    .widget.mprm_widget .mprm-container.mprm-widget-categories.mprm-view-grid .mprm-title {
      font-family: Delius, handwriting
    }
    .site-content .mprm-container.mprm-shortcode-categories.mprm-view-list .mprm-menu-category.mprm-columns .mprm-category-description,
    .widget.mprm_widget .mprm-container.mprm-widget-categories.mprm-view-list .mprm-menu-category.mprm-columns .mprm-category-description {
      color: #69564b
    }
    .site-content .mprm-container.mprm-shortcode-categories.mprm-view-list .mprm-menu-category .mprm-link:hover .mprm-title,
    .widget.mprm_widget .mprm-container.mprm-widget-categories.mprm-view-list .mprm-menu-category .mprm-link:hover {
      color: #a55340
    }
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-grid .mprm-desc,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-grid .mprm-desc,
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-taxonomy-items-grid .mp-menu-item {
      background-color: #f5f2df
    }
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-grid .mprm-excerpt,
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-list .mprm-excerpt,
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-taxonomy-items-list .mp-menu-item .mprm-excerpt,
    .site-content .mprm-main-wrapper.mp_menu_item .mprm-taxonomy-items-grid .mp-menu-item .mprm-excerpt,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-grid .mprm-excerpt,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-list .mprm-excerpt,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-simple-list .mprm-excerpt {
      line-height: 1.6
    }
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-grid .mprm-proportions,
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-list .mprm-proportions,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-grid .mprm-proportions,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-list .mprm-proportions,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-simple-list .mprm-proportions {
      font-family: Montserrat, sans-serif;
      color: rgb(194, 175, 164)
    }
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-list .mprm-item-title,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-list .mprm-item-title {
      font-size: 15px
    }
    .site-content .mprm-container.mprm-shortcode-items.mprm-view-list .mprm-price,
    .widget.mprm_widget .mprm-container.mprm-widget-items.mprm-view-list .mprm-price {
      color: #69564b
    }
    .mprm_purchase_submit_wrapper .mprm-submit,
    #mprm_purchase_submit .mprm-submit,
    .cart_item.mprm_checkout a {
      font-family: Montserrat, sans-serif
    }
    .mprm_purchase_submit_wrapper .mprm-submit.plain,
    #mprm_purchase_submit .mprm-submit.plain {
      color: #d54d35 !important
    }
    .mprm_purchase_submit_wrapper .mprm-submit.plain:hover,
    #mprm_purchase_submit .mprm-submit.plain:hover {
      color: #15191c !important
    }
    .mprm_purchase_submit_wrapper .button.mprm-submit.mprm-inherit,
    #mprm_purchase_submit .button.mprm-submit.mprm-inherit,
    .cart_item.mprm_checkout a {
      color: #d54d35;
      background-color: transparent;
      border-color: #d54d35
    }
    .mprm_purchase_submit_wrapper .button.mprm-submit.mprm-inherit:hover,
    #mprm_purchase_submit .button.mprm-submit.mprm-inherit:hover,
    .cart_item.mprm_checkout a:hover {
      background-color: #d54d35;
      border-color: #d54d35;
      color: #fff
    }
    .mprm_purchase_submit_wrapper .button.mprm-submit.mprm-inherit:active,
    #mprm_purchase_submit .button.mprm-submit.mprm-inherit:active {
      box-shadow: 0 0 10px #a55340
    }
    .mprm-cart-number-of-items,
    .cart_item.mprm-cart-meta.mprm_total,
    .cart_item.empty,
    .mprm_empty_cart,
    .mprm-container.mprm-widget-items.mprm-view-simple-list .type-mp_menu_item .mprm-flex-container-simple-view .mprm-flex-item .mprm-title {
      font-style: normal;
      font-weight: 400;
      font-size: 22px;
      line-height: 1.3;
      font-family: Delius, handwriting;
      letter-spacing: 0px;
      color: #69564b
    }
    .widget.widget_mprm_cart_widget a.mprm-remove-from-cart,
    .mprm_cart_remove_item_btn {
      font-family: Delius, handwriting;
      color: #d54d35
    }
    .widget.widget_mprm_cart_widget a.mprm-remove-from-cart:hover,
    .mprm_cart_remove_item_btn:hover {
      color: #15191c
    }
    .widget.widget_mprm_cart_widget .mprm-cart-item-price,
    .widget.widget_mprm_cart_widget .mprm-cart-item-quantity,
    .mprm_cart_total {
      font-family: Delius, handwriting;
      color: #15191c
    }
    body table.booked-calendar thead th,
    body table.booked-calendar thead th [class*="page-"],
    body table.booked-calendar th .monthName a {
      color: #15191c !important
    }
    body table.booked-calendar thead th [class*="page-"]:hover,
    body table.booked-calendar th .monthName a:hover {
      color: #a55340 !important
    }
    body .invert table.booked-calendar th .monthName,
    body .invert table.booked-calendar th .monthName a,
    body table.booked-calendar thead th [class*="page-"] {
      color: #fff !important
    }
    body .invert table.booked-calendar th .monthName a:hover,
    body table.booked-calendar thead th [class*="page-"]:hover {
      color: #d54d35 !important
    }
    body table.booked-calendar tr.days th {
      color: #69564b !important
    }
    body table.booked-calendar th,
    body table.booked-calendar td {
      font-weight: 400;
      font-family: 'Open Sans', sans-serif
    }
    body table.booked-calendar td .date {
      color: #555
    }
    body table.booked-calendar td .date.tooltipster {
      color: #15191c
    }
    body .invert table.booked-calendar td .date.tooltipster {
      color: #a55340
    }
    body table.booked-calendar td.today .date .number {
      color: #d54d35
    }
    body table.booked-calendar tr.week td.active .date .number,
    body table.booked-calendar tr.week td:hover .date.tooltipster .number,
    body .booked-calendar-wrap.small table.booked-calendar tr.week td.active .date .number {
      background: #a55340;
      color: #fff
    }
    body table.booked-calendar tr.entryBlock {
      background-color: #d54d35
    }
    body table.booked-calendar .booked-appt-list,
    body table.booked-calendar .booked-appt-list h2,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-time,
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-time i.fa {
      color: #fff
    }
    body table.booked-calendar .booked-appt-list .timeslot .spots-available {
      color: #fff
    }
    body table.booked-calendar .booked-appt-list .timeslot .spots-available.empty {
      color: rgba(85, 85, 85, 0.5)
    }
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button {
      color: #a55340;
      font-family: Delius, handwriting;
      background-color: #fff !important;
      border-color: #fff !important
    }
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover {
      background-color: #15191c !important;
      color: #fff !important;
      border-color: #15191c !important
    }
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button[disabled],
    body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button[disabled]:hover {
      background-color: #a55340 !important;
      border-color: #a55340 !important;
      color: #fff !important
    }
    body #booked-profile-page input.button-primary[type="submit"],
    body table.booked-calendar input.button-primary[type="submit"],
    body .booked-modal input.button-primary[type="submit"] {
      background-color: #a55340 !important;
      border-color: #a55340 !important;
      font-family: Delius, handwriting
    }
    body #booked-profile-page input.button-primary[type="submit"]:hover,
    body table.booked-calendar input.button-primary[type="submit"]:hover,
    body .booked-modal input.button-primary[type="submit"]:hover {
      background-color: #15191c !important;
      border-color: #15191c !important
    }
    body .booked-calendar-wrap.small table.booked-calendar .booked-appt-list h2 {
      color: #69564b
    }
    body .booked-calendar-wrap.small table.booked-calendar .booked-appt-list .timeslot .timeslot-people button {
      border-color: #a55340 !important
    }
    body .booked-calendar-wrap.small table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover {
      border-color: #15191c !important
    }
    .widget ul li:before {
      color: #a55340
    }
    .widget li a,
    #tm_builder_outer_content .widget li a {
      color: #69564b
    }
    .widget li a:hover,
    #tm_builder_outer_content .widget li a:hover {
      color: #d54d35
    }
    .invert .widget li a {
      color: #fff
    }
    .invert .widget li a:hover {
      color: #d54d35
    }
    .invert .widget select {
      color: #69564b
    }
    .widget_calendar th {
      color: rgb(192, 173, 162)
    }
    .widget_calendar tbody td {
      color: rgb(125, 106, 95)
    }
    .widget_calendar tbody td a:hover,
    #tm_builder_outer_content .widget_calendar tbody td a:hover {
      background: #a55340;
      color: #fff
    }
    #tm_builder_outer_content .widget_calendar tfoot td a {
      color: #d54d35
    }
    #tm_builder_outer_content .widget_calendar tfoot td a:hover {
      color: #15191c
    }
    .tagcloud a,
    #tm_builder_outer_content .tagcloud a {
      font-family: Delius, handwriting;
      border-color: #a55340;
      color: #15191c;
      background-color: #fff
    }
    .tagcloud a:hover,
    #tm_builder_outer_content .tagcloud a:hover {
      border-color: #a55340;
      background-color: #a55340;
      color: #fff
    }
    .invert .tagcloud a {
      color: #fff
    }
    .widget_recent_entries .post-date {
      color: #555
    }
    .invert .widget_recent_entries .post-date {
      color: rgb(230, 230, 230)
    }
    .widget_recent_comments .recentcomments,
    .widget_recent_comments .recentcomments a {
      color: #15191c
    }
    .widget_recent_comments .comment-author-link {
      color: #a55340
    }
    .widget_recent_comments .recentcomments a:hover {
      color: #d54d35
    }
    .invert .widget_recent_comments .recentcomments,
    .invert .widget_recent_comments .recentcomments a {
      color: #d54d35
    }
    .invert .widget_recent_comments .comment-author-link {
      color: #fff
    }
    .invert .widget_recent_comments .recentcomments a:hover {
      color: #fff
    }
    .custom-posts .post-title a,
    #tm_builder_outer_content .custom-posts .post-title a {
      color: #a55340
    }
    .custom-posts .post-title a:hover,
    #tm_builder_outer_content .custom-posts .post-title a:hover {
      color: #15191c
    }
    .invert .custom-posts .post-title a:hover {
      color: #fff
    }
    .custom-posts .post__date a,
    #tm_builder_outer_content .custom-posts .post__date a {
      color: #555
    }
    .custom-posts .post__date a:hover,
    #tm_builder_outer_content .custom-posts .post__date a:hover {
      color: #d54d35
    }
    #tm_builder_outer_content .custom-posts a {
      color: #d54d35
    }
    #tm_builder_outer_content .custom-posts a:hover {
      color: #15191c
    }
    .instagram__cover {
      color: #fff
    }
    .subscribe-block__submit.btn {
      color: #d54d35
    }
    .subscribe-block__submit.btn:hover {
      color: #15191c
    }
    .invert .footer-area .subscribe-block__submit.btn:hover {
      color: #fff
    }
    .invert .footer-area .subscribe-block__input[type="email"] {
      color: #fff;
      background: rgb(65, 43, 38);
      border-color: rgb(65, 43, 38)
    }
    .invert .footer-area .subscribe-block__input[type="email"]:focus {
      box-shadow: 0 0 10px #69564b
    }
    .subscribe-block__input[type="email"]::-webkit-input-placeholder {
      color: #555
    }
    .subscribe-block__input[type="email"]::-moz-placeholder {
      color: #555
    }
    .subscribe-block__input[type="email"]:-moz-placeholder {
      color: #555
    }
    .subscribe-block__input[type="email"]:-ms-input-placeholder {
      color: #555
    }
    .invert .footer-area .subscribe-block__input[type="email"]::-webkit-input-placeholder {
      color: #69564b
    }
    .invert .footer-area .subscribe-block__input[type="email"]::-moz-placeholder {
      color: #69564b
    }
    .invert .footer-area .subscribe-block__input[type="email"]:-moz-placeholder {
      color: #69564b
    }
    .invert .footer-area .subscribe-block__input[type="email"]:-ms-input-placeholder {
      color: #69564b
    }
    #tm_builder_outer_content .tm_pb_toggle_title {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_tabs_controls li.tm_pb_tab_active {
      border-bottom: 2px solid #a55340
    }
    #tm_builder_outer_content .tm_pb_countdown_timer_container {
      color: #f5f2df
    }
    #tm_builder_outer_content .tm_pb_button {
      border-color: #a55340;
      background-color: #a55340;
      color: #f5f2df
    }
    #tm_builder_outer_content .tm_pb_button:hover {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_button:hover:after {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_button:after {
      color: #f5f2df
    }
    #tm_builder_outer_content .tm_pb_audio_module {
      background-color: #a55340
    }
    #tm_builder_outer_content .tm_pb_pricing_heading {
      background-color: #15191c
    }
    #tm_builder_outer_content .tm_pb_featured_table .tm_pb_pricing_heading {
      background-color: #a55340
    }
    #tm_builder_outer_content .tm_pb_pricing li:before {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_pricing .tm_pb_dollar_sign {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_promo {
      color: #f5f2df
    }
    #tm_builder_outer_content .tm_pb_promo .tm_pb_promo_button {
      background-color: #f5f2df;
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_promo .tm_pb_promo_button:after {
      color: #a55340
    }
    #tm_builder_outer_content .tm_pb_video_play:before {
      color: #a55340
    }
    .tm_pb_testimonial:before {
      color: #a55340
    }

  </style>
</head>

<?php wp_head() ?>
