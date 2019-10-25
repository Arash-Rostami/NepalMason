<template>
    <div class="container-fluid">
        <div class="grid-container">
            <div class="grid-item">
                <i class="far fa-user"></i>
                     <p>20</p>
                <span>تعداد کاربران</span>
            </div>
            <div class="grid-item">
                <i class="fas fa-comment"></i>
                      <p>20</p>
                <span>تعداد نظرات</span></div>
            <div class="grid-item">
                <i class="fas fa-shopping-cart"></i>
                     <p>20</p>
                <span>تعداد سفارشات</span></div>
            <div class="grid-item">
                <i class="fas fa-male"></i>
                      <p>20</p>
                <span>تعداد کاربران</span></div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "statspanel"
    }
</script>

<style scoped>
    .grid-container {
        background-color: #C4E0EB;
        height: 174px;
        display: grid;
        grid-template-columns: auto auto auto auto;
        grid-column-gap: 30px;
        margin-top: 50px;
    }

    .grid-item {
        background-color: #007BFF;
        text-align: center;
        padding: 10px;
        color: white;
        font-size: large;
    }

    .grid-item i {
        font-size: xx-large;
        margin-bottom: 30px;
    }
</style>