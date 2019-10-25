<template>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" @click="closeNav">&times;</a>
        <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;میزکار </a>

        <a href="#" @click="toggleCollapseUser"><i class="fas fa-users-cog"></i> &nbsp;&nbsp; مدیریت کاربران</a>

        <div :class="(clasCssU == true) ? 'uncollapsedU' : 'collapsedU'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">ایجاد کاربران</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">مشاهده کاربران</a>
                </li>

            </ul>
        </div>
        <a href="#" @click="toggleCollapseList"><i class="far fa-list-alt"></i>  &nbsp;&nbsp;مدیریت دسته ها</a>

        <div :class="(clasCssL == true) ? 'uncollapsedL' : 'collapsedL'">
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="#">ایجاد کاربران</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">مشاهده کاربران</a>
                </li>

            </ul>
        </div>

    </div>
</template>

<script>

    export default {
        name: "SideMenuPanel",
        data() {
            return {
                clasCssU: false,
                clasCssL: false,

            }
        },
        methods: {
            closeNav: () => {
                document.getElementById("mySidenav").style.width = "0";
            },
            toggleCollapseUser: function () {
                if (this.clasCssU == false) {
                    this.clasCssU = true;
                } else if (this.clasCssU == true) {
                    this.clasCssU = !this.clasCssU;
                }
            },
            toggleCollapseList: function () {
                if (this.clasCssL == false) {
                    this.clasCssL = true;
                } else if (this.clasCssL == true) {
                    this.clasCssL = !this.clasCssL;
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
        line-height: 30px;
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

    .uncollapsedU, .uncollapsedL {
        display: block;
    }

    .collapsedU, .collapsedL {
        display: none;
    }

    i {
        color: blue;
    }


</style>