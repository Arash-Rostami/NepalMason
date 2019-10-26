<template>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" @click="closeNav">&times;</a>
        <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;میزکار </a>
        <a href="#" @click="toggleCollapseUser"><i class="fas fa-users-cog"></i> &nbsp;&nbsp; مدیریت کاربران</a>
        <div :class="(userToggler == true) ? 'userShow' : 'userHide'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ایجاد کاربر جدید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        مشاهده کل کاربران</a>
                </li>
            </ul>
        </div>
        <a href="#" @click="toggleCollapseProduct"><i class="fas fa-box-open"></i> &nbsp;&nbsp;مدیریت محصولات</a>
        <div :class="(productToggler == true) ? 'productShow' : 'productHide'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ایجاد محصول جدید </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        مشاهده کل محصولات</a>
                </li>
            </ul>
        </div>
        <a href="#" @click="toggleCollapseList"><i class="far fa-list-alt"></i> &nbsp;&nbsp;مدیریت دسته ها</a>
        <div :class="(listToggler == true) ? 'listShow' : 'listHide'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ایجاد دسته جدید
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        مشاهده کل دسته ها
                    </a>
                </li>
            </ul>
        </div>
        <a href="#"><i class="fas fa-cart-arrow-down"></i> &nbsp;&nbsp;مدیریت سفارشات</a>
        <a href="#" @click="toggleCollapseQuality"><i class="fas fa-clipboard-list"></i> &nbsp;&nbsp;مدیریت مشخصات</a>
        <div :class="(qualityToggler == true) ? 'qualityShow' : 'qualityHide'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ایجاد مشخصه جدید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        مشاهده مشخصه</a>
                </li>
            </ul>
        </div>
        <a href="#"><i class="fas fa-comments"></i> &nbsp;&nbsp;مدیریت نظرات</a>
    </div>
</template>

<script>

    export default {
        name: "SideMenuPanel",
        data() {
            return {
                userToggler: false,
                productToggler: false,
                listToggler: false,
                orderToggler: false,
                qualityToggler: false,
            }
        },
        methods: {
            closeNav: () => {
                document.getElementById("mySidenav").style.width = "0";
            },
            toggleCollapseUser: function () {
                if (this.userToggler == false) {
                    this.userToggler = true;
                } else if (this.userToggler == true) {
                    this.userToggler = !this.userToggler;
                }
            },
            toggleCollapseProduct: function () {
                if (this.productToggler == false) {
                    this.productToggler = true;
                } else if (this.productToggler == true) {
                    this.productToggler = !this.productToggler;
                }
            },
            toggleCollapseList: function () {
                if (this.listToggler == false) {
                    this.listToggler = true;
                } else if (this.listToggler == true) {
                    this.listToggler = !this.listToggler;
                }
            },
            toggleCollapseQuality: function () {
                if (this.qualityToggler == false) {
                    this.qualityToggler = true;
                } else if (this.qualityToggler == true) {
                    this.qualityToggler = !this.qualityToggler;
                }
            },
        }
    }
</script>

<style scoped>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #343A40;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
    .sidenav a {
        padding: 8px 32px;
        text-decoration: none;
        font-size: medium;
        color: #818181;
        display: block;
        transition: 0.3s;
        direction: rtl;
        float: right;
    }

    .sidenav a:hover {
        color: white;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        left: 25px;
        font-size: xx-large;
        margin-right: 50px;
    }
    @-webkit-keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .userShow, .productShow, .listShow, .qualityShow {
        display: block;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
    }
    .userHide, .productHide, .listHide, .qualityHide {
        display: none;
    }
    i {
        color: #007BFF;
    }
    li {
        line-height: 30px;
    }
</style>