<template>
    <div>
        <div>
            <!--========== ADMIN SIDE MENU one ========-->
            <!--<div class="_1side_menu" >-->
                <!--<div class="_1side_menu_logo">-->
                    <!--<h3 style="text-align:center;">Logo Image</h3>-->
                    <!--&lt;!&ndash;<img src="/img/logo.jpg" style="width: 108px;margin-left: 68px;"/>&ndash;&gt;-->
                <!--</div>-->

                <!--&lt;!&ndash;~~~~~~~~ MENU CONTENT ~~~~~~~~&ndash;&gt;-->
                <!--<div class="_1side_menu_content">-->
                    <!--<div class="_1side_menu_img_name">-->
                        <!--&lt;!&ndash; <img class="_1side_menu_img" src="/pic.png" alt="" title=""> &ndash;&gt;-->
                        <!--<p class="_1side_menu_name">Admin</p>-->
                    <!--</div>-->

                    <!--&lt;!&ndash;~~~ MENU LIST ~~~~~~&ndash;&gt;-->
                    <!--<div class="_1side_menu_list">-->
                        <!--<ul class="_1side_menu_list_ul">-->
                            <!--<li><a><Icon type="ios-speedometer" /> Overview</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--========== ADMIN SIDE MENU ========-->

            <!--========= HEADER ==========-->
            <!--<div class="header">-->
                <!--<div class="_2menu _box_shadow">-->
                    <!--<div class="_2menu_logo">-->
                        <!--<ul class="open_button">-->
                            <!--<li>-->
                                <!--<Icon type="ios-list" />-->
                            <!--</li>-->
                            <!--&lt;!&ndash;<li><Icon type="ios-albums" /></li>&ndash;&gt;-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--========= HEADER ==========-->
        </div>

        <!--========= FOOTER ==========-->
        <div id="footer-page" class="container">
            <footer-page></footer-page>
        </div>

        <router-view/>
    </div>
</template>

<script>

    import FooterPage from "./layouts/FooterPage";
    export default {
        components: {
            FooterPage
        }
    }

</script>

