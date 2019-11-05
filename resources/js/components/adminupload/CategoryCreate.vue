<template>
    <div class="dir">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3> ایجاد دسته ها</h3>
                </div>
                <div class="card-body text-right">
                    <div class="col-4">
                        <ul id="myUL">
                            <li v-for="pCategory in pCategories" @click="toggleNest">
                                <span class="caret"> {{ pCategory.name }}</span>
                                <ul class="nested text-primary">
                                    <li v-for="mCategory in mCategories" v-if="pCategory.id == mCategory.parent_id">
                                        {{ mCategory.name }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="col-4">
                        <div class="form-group">
                            <label for=""> دسته مادر </label>
                            <input type="text" class="form-control" name="title" aria-describedby="helpId"
                                   placeholder="نام دسته مادر را وارد نمایید" v-model="title"> <br>
                            <input type="submit" value="ایجاد دسته مادر" class="btn btn-info" @click="mCat">
                        </div>
                    </div>
                    <hr>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">زیر دسته </label>
                            <input type="text" class="form-control" name="cat" aria-describedby="helpId"
                                   placeholder="نام زبر دسته را وارد نمایید" v-model="catname">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="parent_id">انتخاب دسته </label>
                        <select class="form-control" name="parent_id" v-model="select">
                            <option v-for="pCategory in pCategories" :value="pCategory.id">
                                {{ pCategory.name }}
                            </option>
                        </select><br>
                        <input type="submit" value="ایجاد دسته " class="btn btn-primary" @click="Cat">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    //import Swal from 'sweetalert2';
    export default {
        name: "CategoryCreate",
        data() {
            return {
                title: "",
                pCategories: [],
                catname: "",
                select: [],
                mCategories: []
            }
        },
        props: [
            'parentcategory',
            'maincategory',
        ],
        created() {
            this.pCategories = JSON.parse(this.parentcategory);
            this.mCategories = JSON.parse(this.maincategory);
        },
        methods: {
            toggleNest() {
                var toggler = document.getElementsByClassName("caret");
                var i;
                for (i = 0; i < toggler.length; i++) {
                    toggler[i].addEventListener("click", function () {
                        this.parentElement.querySelector(".nested").classList.toggle("active");
                        this.classList.toggle("caret-down");
                    });
                }
            },
            mCat() {
                axios.post('./category', {
                    title: this.title,
                })
                    .then(function () {
                        // Swal.fire({
                        //     type: 'success',
                        //     title: ` ${this.title}
                        //                         با موفقیت بارگذاری شد`,
                        //     showConfirmButton: false,
                        //     timer: 2500,
                        //     animation: false,
                        //     customClass: {
                        //         popup: 'animated tada'
                        //     }
                        // });
                        location.reload(true);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
            Cat() {
                axios.post('./category', {
                    catname: this.catname,
                    parentid: this.select,
                })
                    .then(function () {
                        // Swal.fire({
                        //     type: 'success',
                        //     title: ` ${this.catname}
                        //                         با موفقیت بارگذاری شد`,
                        //     showConfirmButton: false,
                        //     timer: 2500,
                        //     animation: false,
                        //     customClass: {
                        //         popup: 'animated tada'
                        //     }
                        // });
                        location.reload(true);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            }
        }
    }
</script>
<style scoped>
    .dir {
        direction: rtl !important;
        margin-top: 7%;
    }

    ul, #myUL {
        list-style-type: none;
    }

    #myUL {
        margin: 0;
        padding: 0;
    }

    .caret {
        cursor: pointer;
        font-size: large;
        /* ser-select: none;  Prevent text selection */
    }

    .caret::before {
        content: "\23F4";
        color: #C4E0EB;
        display: inline-block;
        margin-left: 6px;
    }

    .caret-down::before {
        transform: rotate(270deg);
    }

    .nested {
        display: none;
        color: #C4E0EB;
        margin-right: 6px;
    }

    .active {
        display: block;
    }
</style>