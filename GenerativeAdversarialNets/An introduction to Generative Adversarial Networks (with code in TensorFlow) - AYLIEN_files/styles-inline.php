/*====================================================
                    Heading
======================================================*/
h1 {
    color: rgb(63, 63, 63);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 36px;
    line-height: 75px;
    letter-spacing: 0px;
}

h2 {
    color: rgb(0,0,0);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 60px;
    line-height: 65px;
    letter-spacing: 0px;
}

h3,
h3.wpb_accordion_header,
h3.wpb_toggle_header{
    color: rgb(0,0,0);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 50px;
    line-height: 55px;
    letter-spacing: 0px;
}

h4 {
    color: rgb(0,0,0);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 40px;
    line-height: 45px;
    letter-spacing: 0px;
}

h5 {
    color: rgb(0,0,0);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 30px;
    line-height: 35px;
    letter-spacing: 0px;
}

h6 {
    color: rgb(33, 33, 33);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 20px;
    line-height: 25px;
    letter-spacing: 0px;
}

p {
    color: rgb(139, 139, 139);
    font-family: Poppins;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0px;
}


a{
color: rgb(0,0,0);
font-family: Poppins;
font-weight: 400;
font-style: normal;
font-size: 14px;
line-height: 14px;
letter-spacing: 0px;
}
/*====================================================
                    Layout
======================================================*/
.layout{
    padding-top: 0.0px;
    padding-bottom: 0px;;
}

main{
    padding-top: 65.4px;
}


/*====================================================
                    Header
======================================================*/


    header .content ul.icons-pack li.icon ,
    header.top-block .style-style2 .icons-pack .icon.notification-item{display:none;}



/*================= General Styles ================ */
    header {
        top: 0px;
    }
    header:not(.top-block) .top nav > ul > li .menu-title .icon ,
    header:not(.top-block) .top nav > ul > li .hover-effect .icon ,
    header:not(.top-block) .top nav > ul > li .menu-title .title,
    header.side-classic .side nav > ul > li > a .menu-title .title,
    header:not(.top-block) .top nav > ul > li .hover-effect .title {display:inline-block;}
    header.side-classic .side nav > ul > li > a .menu-title .icon{display:inline-block}
    header.side-classic .style-center nav > ul > li > a .menu-title .icon{display:block}


.activeMenu{
    color: rgb(255,255,255) !important;
}

header a,
header .navigation a,
header .navigation,
.gather-overlay .menu a,
header.side-classic div.footer .footer-content .copyright p{
    color: rgb(255,255,255);
    font-family: Poppins;
    font-weight: 500;
    font-style: normal;
    font-size: 14px;
    letter-spacing: 0px;
    line-height : 1.5em;
}

header .icons-pack a{
    color:rgb(255,255,255);
}

header .navigation .separator a {
    background-color:rgba(255,255,255,0.5);;
}

/* Menu icons pack color */
header .icons-pack .elem-container .title-content{
    color: rgb(255,255,255);
}

.top-classic .navigation .menu-separator,
.top-logotop .navigation .menu-separator{
    background-color: rgb(255,255,255);
}
.top-classic:not(.header-clone) .style-wireframe .navigation .menu-separator{
    background-color: rgb(255,255,255);
}
header.top-block .icons-pack li .elem-container,
header .top .icons-pack .icon span,
header.top-block .icons-pack li .title-content .icon,
header.top-modern .icons-pack li .title-content .icon,
header .icons-pack a{
    font-size: 18px;
}

.gather-btn .icon-gathermenu {
    font-size: 26px;
}

header .icons-pack .shopcart-item .number{
    color: rgb(255,255,255);
    background-color: rgb(255,255,255);
}

header .icons-pack a.shopcart .icon-shopcart2{
    font-size: 21px;
}

    .business{display:none}

/*================= Header Top - Classic ================ */

    header.top-classic:not(.header-clone) .content:not(.style-wireframe) nav > ul > li:hover > a .menu-title  span,
    header.top-classic:not(.header-clone) .content:not(.style-wireframe) nav > ul > li:hover > a .menu-title:after{
        color: rgb(255,255,255);
    }
    .top-classic .style-wireframe .navigation  > ul > li:hover .menu-separator{
        background-color: rgb(255,255,255);
    }

    header.top-classic .icons-pack .icon:hover {
        color: rgb(255,255,255);
    }


/*================= Header Top - Block ================ */

/*================= Header Top - Gather ================ */


/*================= Header Top - LogoTop ================ */



/*================= Header Top - Modern ================ */
    header.top-modern .btn-1b:after {
        background: rgb(255,255,255);
    }

    header.top-modern .btn-1b:active{
        background: rgb(255,255,255);
    }


    /* AB start */
    
       /* header.top-modern nav > ul> li,
        header.top-modern .icons-pack li,
        header.top-modern .first-part{
            border-left: 1px solid ;
        }*/

    
        header.top-modern nav > ul> li,
        header.top-modern .icons-pack li,
        header.top-modern .first-part{
            border-right: 1px solid rgba(255,255,255,0.3);;
        }

        /* AB end */

    header.top-modern .business{
        border-bottom: 1px solid rgba(255,255,255,0.3);;
    }

    header.top-modern .business,
    header.top-modern .business a{
        color: rgb(255,255,255);
    }



/*================= Header Side - Classic ================ */

/* Header Side Background Image */

/* Side menu color */
header.side-classic nav > ul > li:hover > a,
header.side-classic.standard-mode .icons-holder ul.icons-pack li:hover a,
header.side-classic.standard-mode .footer-socials li:hover a,
header.side-classic nav > ul > li.has-dropdown:not(.megamenu):hover > a,
header.side-classic nav > ul > li:hover > a > .menu-title span,
header.side-classic .footer-socials li a .hover,
header.side-classic .icons-pack li a .hover,
header.side-modern .icons-pack li a span.hover,
header.side-modern .nav-modern-button span.hover,
header.side-modern .footer-socials span.hover,
header.side-classic nav > ul > li.has-dropdown:not(.megamenu) .dropdown a:hover .menu-title span,
header.side-classic nav > ul > li > ul li.has-dropdown:not(.megamenu):hover > a .menu-title span{
    color: rgb(255,255,255);
    border-color: rgb(255,255,255);
}

header.side-classic div.footer ul li.info .footer-content span,
header.side-classic .icons-pack li.search .search-form input{
    color: rgb(255,255,255);
}

header.side-classic div.footer ul,
header.side-classic div.footer ul li,
header.side-classic .icons-holder{
    border-color: rgb(255,255,255);
}

header.side-classic .icons-holder li hr{
    background-color: rgb(255,255,255);
}
header .side .footer .copyright p{
    color: rgb(255,255,255);
}
/*================= Header Side - Modrn ================ */

/* Header Overlay*/
header .color-overlay,
header.side-modern .footer .info .footer-content .copyright,
header.side-modern .footer .info .footer-content .footer-socials,
header.side-modern .search-form input[type="text"]{
    background-color: rgb(53,73,96);
}

header:not(.header-clone) > .color-overlay {
                border-bottom: 1px solid;
        border-bottom-color: rgba(255,255,255,0.3);;
    
    
    
}

/*================= DropDown Styles ================ */
header nav.navigation li.megamenu > .dropdown,
header nav.navigation li.has-dropdown > .dropdown{
    display : table;
    position: absolute;
    top: 70px;
}

header nav.navigation li.megamenu > .dropdown > .megamenu-dropdown-overlay,
.gather-overlay  nav li.megamenu > .dropdown > .megamenu-dropdown-overlay,
header nav > ul > li.has-dropdown:not(.megamenu)  ul .megamenu-dropdown-overlay{
    background-color:rgb(255,255,255);

}

header nav.navigation > ul > li.megamenu > ul > li > a{
    color:rgb(83,83,83);
}
header[class *= "top-"]:not(.right) nav.navigation li.megamenu > ul.dropdown:not(.side-line),
header[class *= "top-"]:not(.right) nav.navigation > ul > li.has-dropdown > ul.dropdown:not(.side-line){
    border-top:3px solid rgb(246,118,85);
}
header.top nav.navigation > ul > li.has-dropdown:not(.megamenu) .dropdown.side-line,
header.top nav.navigation li.megamenu > .dropdown.side-line,
.gather-overlay nav.navigation > ul > li.has-dropdown:not(.megamenu) .dropdown.side-line,
.gather-overlay nav.navigation li.megamenu > .dropdown.side-line{
    border-left: 3px solid rgb(246,118,85);
}

header.top nav.navigation > ul > li.has-dropdown:not(.megamenu) .dropdown.side-line li:after,
.gather-overlay nav.navigation > ul > li.has-dropdown:not(.megamenu) .dropdown.side-line li:after{
    background-color:rgba(68,68,68,0.3);}

header[class *= "top-"]:not(.right) nav.navigation li.megamenu > .dropdown,
header[class *= "top-"]:not(.right) nav.navigation li.has-dropdown > .dropdown{
    left: 0;
}


header[class *= "top-"] nav .dropdown a,
header[class *= "side-"] nav .dropdown a,
.gather-overlay nav .dropdown a{
    font-size: 13px;
}

.gather-overlay nav.navigation li.megamenu > .dropdown,
.gather-overlay nav.navigation li.has-dropdown > .dropdown{
    background-color:rgb(255,255,255);
    display : table;
    left: 0;
    position: absolute;
    top: 150%;
}

header.left nav.navigation > ul > li.has-dropdown > .dropdown .megamenu-dropdown-overlay,
header.side-modern .side.style-style2 nav  > ul > li .megamenu-dropdown-overlay,
header.side-modern .side.style-style1 nav > ul .megamenu-dropdown-overlay,
header.side-modern .style-style1.side nav  ul  li{
    background-color:rgb(255,255,255);
}

header.side-modern .style-style1.side nav  ul  li,
header.side-modern .style-style1.side nav.navigation > ul > li.has-dropdown .dropdown{
    border-color:rgba(68,68,68,0.3);;
    color:rgb(68,68,68);
}

header nav.navigation .dropdown a,
header.side-modern nav.navigation a,
.gather-overlay nav.navigation .dropdown a{
    color:rgb(68,68,68);
    position: relative !important;
    width: auto !important;
}

/* dropDown Hover */

header .top nav > ul > li > ul li:hover > a .menu-title span,
header .top nav > ul > li .dropdown a:hover .menu-title span,
.gather-overlay nav > ul > li > ul li:hover > a .menu-title span,
.gather-overlay nav > ul > li .dropdown a:hover .menu-title span,
header.side-classic nav > ul > li > ul li:hover > a .menu-title span,
header.side-classic nav > ul > li .dropdown a:hover .menu-title span,
header.side-modern .side.style-style2 nav.navigation ul li a:hover{
    color: rgb(246,118,85);
    border-color: rgb(246,118,85);
}

header.side-modern .side.style-style1 nav.navigation ul li:hover{
    background-color: rgb(246,118,85);
}
/*====================================================
                Body
======================================================*/
        .layout-container > .color-overlay,.layout-container > .texture-overlay,.layout-container > .bg-image {
            display:none;
        }
            /*** Body Overlay ***/
                            .layout-container > .color-overlay.image-type,
            .layout-container > .bg-image
            { display:none; }
                            .layout-container > .color-overlay.texture-type,
            .layout-container > .texture-overlay
            { display:none; }
                        .layout-container > .color-overlay.color-type {
         background-color: #FFF;
                }
                /* Body Background Image */
                    .layout-container > .bg-image {
            background-repeat: no-repeat;
                        background-attachment:fixed;
                        background-position: center top;
            background-size: cover;
            opacity: 1;
            }
        
        /* Body Texture Overlay */
        .layout-container > .texture-overlay {
        opacity: 0.5;
        background-image: url(http://new.aylien.com/wp-content/themes/massive-dynamic/lib/customizer/assets/images/texture/1.png);
        }

        
            /*** Body Overlay ***/
                    footer > .color-overlay.color-type {
            display:none;
            }
                            footer > .color-overlay.image-type,
            footer > .bg-image
            { display:none; }
                                /* Body Background Image */
                    footer > .bg-image {
            background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center top;
            background-size: cover;
            opacity: 1;
            }
        
        /* Body Texture Overlay */
        footer > .texture-overlay {
        opacity: 1.0;
        background-image: url(http://new.aylien.com/wp-content/themes/massive-dynamic/lib/customizer/assets/images/texture/1.png);
        }

        
    
/*====================================================
                    Main
======================================================*/

/* Main Overlay*/
main .content .color-overlay.color-type { display:none }
/*** SITE Content Overlay ***/
main .content .color-overlay.color-type {
    background-color: rgb(255, 0, 0);
}
main .content {
    padding: 0.0px;
}


/*Run in header side classic */



/* Run in header side modern */


/*====================================================
                        Footer
======================================================*/
#footer-bottom .social-icons span a,
#footer-bottom .go-to-top a,
#footer-bottom p{
    color: rgb(255,255,255);
}

footer.footer-default .footer-widgets {
    background-color: rgb(53,73,96);
    overflow: hidden;
}

footer .widget-area {
   height: 300px;
}

footer hr.footer-separator{
    height:0px;
    background-color:rgb(122, 122, 122)}

footer.footer-default .widget-area.classicStyle.border.boxed div[class*="col-"]{
    height: 180px;
}

footer.footer-default .widget-area.classicStyle.border.full div[class*="col-"]{
    height : 300px;
    padding : 45px 30px;
}

footer.footer-default #footer-bottom{
    background-color: rgb(27,36,46);
    overflow: hidden;
}
#footer-bottom{
    height: 50px;
}

/*Footer Switcher*/

    #footer-bottom .social-icons > span:not(.go-to-top){display:inline-flex;}

    #footer-bottom .copyright{display:block;}

    #footer-bottom .logo{opacity:1;}

    #footer-bottom .logo{display:none;}

    #footer-bottom {display:block;}

/*====================================================
                    Sidebar
======================================================*/

/* Sidebar BACKGROUND */
        /*** Body Overlay ***/
                            .sidebar.box .widget > .color-overlay.image-type,
            .sidebar.box .widget > .bg-image
            { display:none; }
                            .sidebar.box .widget > .color-overlay.texture-type,
            .sidebar.box .widget > .texture-overlay
            { display:none; }
                        .sidebar.box .widget > .color-overlay.color-type {
         background-color: rgba(255,255,255,0);
                }
                /* Body Background Image */
                    .sidebar.box .widget > .bg-image {
            background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center top;
            background-size: cover;
            opacity: 1;
            }
        
        /* Body Texture Overlay */
        .sidebar.box .widget > .texture-overlay {
        opacity: 0.5;
        background-image: url(http://new.aylien.com/wp-content/themes/massive-dynamic/lib/customizer/assets/images/texture/1.png);
        }

        
            /*** Body Overlay ***/
                            .sidebar > .color-overlay.image-type,
            .sidebar > .bg-image
            { display:none; }
                            .sidebar > .color-overlay.texture-type,
            .sidebar > .texture-overlay
            { display:none; }
                        .sidebar > .color-overlay.color-type {
         background-color: rgba(255,255,255,0);
                }
                /* Body Background Image */
                    .sidebar > .bg-image {
            background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center top;
            background-size: cover;
            opacity: 1;
            }
        
        /* Body Texture Overlay */
        .sidebar > .texture-overlay {
        opacity: 0.5;
        background-image: url(http://new.aylien.com/wp-content/themes/massive-dynamic/lib/customizer/assets/images/texture/1.png);
        }

        
    .sidebar.box .widget .color-overlay,
.sidebar.box .widget .texture-overlay,
.sidebar.box .widget .bg-image{
    display:none;
}

/*=================Widget Contact Info================ */

.dark-sidebar .widget-contact-info-content,
.dark .widget-contact-info-content{
    background:url(http://blog.aylien.com/wp-content/themes/massive-dynamic/assets/img/map-dark.png)no-repeat 10px 15px;
}
.light-sidebar .widget-contact-info-content,
.light .widget-contact-info-content{
    background:url(http://blog.aylien.com/wp-content/themes/massive-dynamic/assets/img/map-light.png)no-repeat 10px 15px;
}

/*====================================================
                    Bussiness Bar
======================================================*/

/* Business Bar */

    
    .business {
        background: rgb(82,82,82);
        top: 0px;
        height: 36px;
    }

    .business, .business a {
        color: rgba(255,255,255,1);
    }

    header {
        margin-top: 0
    }


/*====================================================
                ShortCodes
======================================================*/


/*================= Row ================ */

.box_size{
    width: 100%}

.box_size_container{
    width: 100%}

/*==================================================
                        widget
====================================================*/
.widget a,
.widget p,
.widget span:not(.icon-caret-right)/*:not(.star-rating span)*/{
    font-family: Poppins;
}

/*=====================================================
                blog
=======================================================*/
.loop-post-content .post-title:hover{
    color: rgba(63,63,63,0.8);;
}
/*=====================================================
                woocommerce
======================================================*
.woocommerce ul.product_list_widget li span:not(.star-rating span){
    font-family: Poppins;
}

/*====================================================
                    Notification Center
======================================================*/
.notification-center .post .date .day.accent-color,
    #notification-tabs p.total,
    #notification-tabs p.total .amount,
    #notification-tabs .cart_list li .quantity,
    #notification-tabs .cart_list li .quantity  .amount{
    color : rgb(10,215,184);
}

.notification-center span,
.notification-center a,
.notification-center p,
#notification-tabs #result-container .search-title,
#notification-tabs #result-container .more-result,
#notification-tabs #result-container .item .title,
#notification-tabs #search-input,
#notification-tabs .cart_list li.empty,
.notification-collapse{
    font-family : Poppins;
}
    .notification-center .pager .posts,
    .notification-center #notification-tabs .pager .posts.selected{
        display :none;
    }

    .notification-center .tabs-container .posts-tab{
        opacity : 0 ;
    }

    .notification-center .pager .portfolio,
    .notification-center #notification-tabs .pager .portfolio.selected{
        display :none;
    }

    .notification-center .tabs-container .protfolio-tab{
        opacity : 0 ;
    }

    .notification-center .pager .shop,
     .notification-center #notification-tabs .pager .shop.selected{
         display :none;
    }

    .notification-center .tabs-container .shop-tab{
        opacity : 0;
    }
    #notification-tabs .pager {
        display : none !important;
    }

.portfolio .accent-color,
.portfolio .accent-color.more-project,
.portfolio-carousel .accent-color.like:hover,
.portfolio-carousel .buttons .sharing:hover{
    color :rgb(204,162,107)
}

.portfolio-split .accent-color.like:hover,
.portfolio-full .accent-color.like:hover{
    background-color :rgb(204,162,107);
    border-color :rgb(204,162,107);
    color:#fff;
}

.portfolio .accent-color.more-project:after{
    background-color :rgb(204,162,107)}

.portfolio .accent-color.more-project:hover{
    color :rgba(204,162,107,0.6);}

.portfolio .category span {
    color :rgba(0,0,0,0.7);}

.portfolio .buttons .sharing,
.portfolio-carousel .buttons .like{
    border-color: rgb(139, 139, 139);
    color: rgb(139, 139, 139);
}

.portfolio-split .buttons .sharing:hover,
.portfolio-full .buttons .sharing:hover{
    background-color: rgb(139, 139, 139);
    color: #fff;
}



