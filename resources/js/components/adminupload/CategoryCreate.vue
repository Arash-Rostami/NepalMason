<template>
    <div class="dir">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3> ایجاد دسته</h3>
                </div>
                <div class="card-body text-right">
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
                            <option v-for="object in objects" :value="object.id">
                                {{ object.name }}
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

    export default {
        name: "CategoryCreate",
        data() {
            return {
                title: "",
                objects: [],
                catname: "",
                select: []
            }
        },
        props: ['parentcategory'],
        created() {
            this.objects = JSON.parse(this.parentcategory);
        },
        methods: {
            mCat() {
                axios.post('./category', {
                    title: this.title,
                })
                    .then(function () {
                        alert(` ${this.title}
                                                با موفقیت بارگذاری شد`);
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
                        alert(` ${this.catname}
                                                با موفقیت بارگذاری شد`);
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

</style>