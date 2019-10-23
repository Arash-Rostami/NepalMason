<template>
    <div>
        <div class="container-fluid">
            <div class="row main-header">
                <div class="col-2 bg-primary">
                    <ul class="nav nav-pills">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">
                                <i class="far fa-user"></i>
                                <sub>
                                    <span class="badge badge-dark">4</span>
                                </sub>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 bg-primary">
                    <ul class="nav nav-pills">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">
                                <i class="far fa-envelope"></i>
                                <sub>
                                    <span class="badge badge-dark">4</span>
                                </sub>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 bg-primary">
                    <ul class="nav nav-pills">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tasks"></i>
                                <sub>
                                    <span class="badge badge-dark">4</span>
                                </sub>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 bg-primary float-right">
                    <form class="form-inline my-sm-2 float-right" action="">
                        <button class="btn btn-sm  btn-dark float-right" type="submit">جستجو شود</button>
                        <input class="form-control ml-sm-2 input-lg float-right " type="text">
                    </form>
                </div>
                <div class="col-2 bg-primary float-right">
                    <ul class="nav nav-pills float-right ">
                        <li class="nav-item float-right">
                            <a class="nav-link active float-right" href="#">
                                <i class="fab fa-windows float-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

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
    .main-header {
        height: 50px;
    }

    i {
        font-size: xx-large;
    }

</style>