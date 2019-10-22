<template>
    <div>
        <nav class="navbar navbar-color fixed-top ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-md-2 col-sm-2 top-left">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="far fa-user"></i>
                                <ul class="dropdown-menu">
                                    <li>1</li>
                                </ul>
                            </a>
                        </li>
                    </div>
                    <div class="col-xs-4 col-md-2 col-sm-2 pad-me top-left">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="far fa-envelope"></i>
                                <ul>
                                    <li>1</li>
                                </ul>
                            </a>
                        </li>
                    </div>
                    <div class="col-xs-4 col-md-2 col-sm-2 pad-me top-left">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fas fa-tasks"></i>
                                <ul>
                                    <li>1</li>
                                </ul>
                            </a>
                        </li>
                    </div>


                </div>
            </div>
        </nav>
    </div>

</template>

<script>

    export default {
        name: 'navbarManager',
        mounted() {
            console.log('Component mounted now again.')
        }
    }
</script>
<style scoped>
    li {
        list-style: none;
    }

    .top-left {
        float: left;
    }

    .navbar-color {
        background-color: #8CD9DE;
        border-color: #8CD9DE;
        color: black;
        height: 55px;
        border-right: 2px solid #0C9A9A;
    }

    .dropdown-toggle i {
        width: 43px;
        height: 44px;
        border-radius: 100%;
        color: #164aa9;
        background-color: #f5e9e9;
        margin-top: 2px;
        font-size: x-large;
        padding: 8px 0px 0px 10px;
    }

    .pad-me {
        margin-left: 20px;
    }
</style>